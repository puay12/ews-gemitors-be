<?php

namespace App\Http\Controllers;

use App\Models\Protocol;
use App\Http\Requests\StoreProtocolRequest;
use App\Http\Requests\UpdateProtocolRequest;
use App\Models\ScoreThreshold;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class ProtocolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('protocols')
                ->select(
                    'protocols.*','score_threshold.threshold', 'risk_levels.level', 
                    'protocol_categories.category', 'monitoring_frequency.frequency')
                ->join('score_threshold','score_threshold.id','=','protocols.score_thres_id')
                ->join('risk_levels','risk_levels.id','=','protocols.risk_level_id')
                ->join('protocol_categories','protocol_categories.id','=','protocols.category_id')
                ->join('monitoring_frequency','monitoring_frequency.id','=','protocols.monitor_freq_id')
                ->get();
        
        return response()->json($data);
    }

    public function getRecommendation($score) {
        $data = (int)$score;
        $id = $this->findThreshold($data);

        if($id != 0) {
            $recommendation = $this->getProtocolById($id);
        } else {
            $recommendation = null;
        }

        if($recommendation != null) {
            return response()->json([
                'message' => 'Berhasil mendapatkan rekomendasi protokol',
                'data' => $recommendation
            ]);
        } else {
            return response()->json([
                'message' => 'Gagal mendapatkan rekomendasi protokol',
                'data' => array()
            ], 404);
        }
    }

    public function show($id) {
        $data = DB::table('protocols')
                ->select(
                    'protocols.*','score_threshold.threshold', 'risk_levels.level', 
                    'protocol_categories.category', 'monitoring_frequency.frequency')
                ->join('score_threshold','score_threshold.id','=','protocols.score_thres_id')
                ->join('risk_levels','risk_levels.id','=','protocols.risk_level_id')
                ->join('protocol_categories','protocol_categories.id','=','protocols.category_id')
                ->join('monitoring_frequency','monitoring_frequency.id','=','protocols.monitor_freq_id')
                ->where('protocols.id','=',$id)
                ->get();
        
        return response()->json($data);
    }

    private function getProtocolById($id) {
        $data = DB::table('protocols')
                ->select(
                    'protocols.*','score_threshold.threshold', 'risk_levels.level', 
                    'protocol_categories.category', 'monitoring_frequency.frequency')
                ->join('score_threshold','score_threshold.id','=','protocols.score_thres_id')
                ->join('risk_levels','risk_levels.id','=','protocols.risk_level_id')
                ->join('protocol_categories','protocol_categories.id','=','protocols.category_id')
                ->join('monitoring_frequency','monitoring_frequency.id','=','protocols.monitor_freq_id')
                ->where('protocols.id','=',$id)
                ->get();

        return $data;
    }

    private function findThreshold($score) {
        $data = ScoreThreshold::all();
        $id = 0;

        foreach($data as $item) {
            $threshold = $item->threshold;
            $numbers = $this->getNumber($threshold);

            if(count($numbers) > 1) {
                if(($score >= $numbers[0]) && ($score <= $numbers[1])) {
                    $id = $item->id;
                    break;
                }
            } else {
                if(((Str::contains($threshold, ">=")) && ($score >= $numbers[0])) || 
                    ($score == $numbers[0])) {
                    $id = $item->id;
                    break;
                }
            }
        }

        return $id;
    }

    private function getNumber($string) {
        $numbers = array();

        for($i = 0; $i <= strlen($string)-1; $i++) {
            if(is_numeric($string[$i])) {
                array_push($numbers, (int)$string[$i]);
            }
        }

        return $numbers;
    }
}
