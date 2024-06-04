<?php

namespace App\Http\Controllers;

use App\Models\EWSScore;
use App\Models\HealthRecords;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HealthRecordsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        $data = HealthRecords::create($validatedData);

        return response()->json([
            'message' => 'Berhasil menambahkan tanda vital pasien!',
            'record_id' => $data->id
        ]);
    }

    public function show($id){
        $record = HealthRecords::find($id);
        if (empty($record)) {
            return response()->json([
                'message' => 'Tanda vital tidak ditemukan!'
            ], 404);
        } else {
            return response()->json($record);
        }
    }

    public function showRecordsByPatient($patient_id){
        $records = HealthRecords::where('patient_id', $patient_id)->orderBy('created_at', 'DESC')->get();
        if (empty($records)) {
            return response()->json([
                'message' => 'Pasien tersebut belum memiliki data riwayat tanda vital.'
            ], 404);
        } else {
            return response()->json($records);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $this->validateData($request);

        $data = HealthRecords::where('id', $id)->update($validatedData);
        
        return response()->json([
            'message' => 'Berhasil mengupdate data tanda vital pasien!',
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        EWSScore::where('record_id', $id)->delete();
        HealthRecords::destroy($id);
        
        return response()->json([
            'message' => 'Berhasil menghapus tanda vital pasien!'
        ]);
    }

    private function validateData($request){
        $data = $request->validate([
            'patient_id' => 'required',
            'heart_rate' => 'required|max:50',
            'systolic_blood_pressure' => 'required|max:50',
            'diastolic_blood_pressure' => 'required|max:50',
            'respiratory_rate' => 'required|max:50',
            'temperature' => 'required|max:50',
            'spo2' => 'required|max:50',
        ]);

        return $data;
    }
}
