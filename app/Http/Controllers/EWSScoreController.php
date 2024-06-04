<?php

namespace App\Http\Controllers;

use App\Models\EWSScore;
use Illuminate\Http\Request;

class EWSScoreController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        EWSScore::create($validatedData);

        return response()->json([
            'message' => 'Berhasil menambahkan skor EWS!'
        ]);
    }

    public function show($id){
        $result = EWSScore::where('record_id', $id)->get();
        if (empty($result)) {
            return response()->json([
                'message' => 'Gagal mendapatkan hasil skor EWS pasien dari tanda vital tersebut!'
            ], 404);
        } else {
            return response()->json($result);
        }
    }

    public function destroy($id)
    {
        $result = EWSScore::where('record_id',$id)->delete();
        
        if ($result) {
            return response()->json([
                'message' => 'Berhasil menghapus skor EWS dari tanda vital tersebut!'
            ]);
        } else {
            return response()->json([
                'message' => 'Gagal menghapus skor EWS dari tanda vital tersebut!'
            ], 400);
        }
    }

    private function validateData($request){
        $data = $request->validate([
            'record_id' => 'required',
            'heart_score' => 'required|max:50',
            'sys_score' => 'required|max:50',
            'dias_score' => 'required|max:50',
            'respiratory_score' => 'required|max:50',
            'temp_score' => 'required|max:50',
            'spo2_score' => 'required|max:50',
            'ews_score' => 'required|max:50',
        ]);

        return $data;
    }
}
