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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $this->validateData($request);

        EWSScore::where('id', $id)->update($validatedData);
        
        return response()->json([
            'message' => 'Berhasil mengupdate skor  EWS tanda vital tersebut!'
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     EWSScore::destroy($id);
    //     return response()->json([
    //         'message' => 'Berhasil menghapus skor EWS tanda vital tersebut!'
    //     ]);
    // }

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
