<?php

namespace App\Http\Controllers;

use App\Models\Protocol;
use App\Http\Requests\StoreProtocolRequest;
use App\Http\Requests\UpdateProtocolRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProtocolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Protocol $protocol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Protocol $protocol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProtocolRequest $request, Protocol $protocol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Protocol $protocol)
    {
        //
    }
}
