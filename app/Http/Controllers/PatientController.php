<?php

namespace App\Http\Controllers;

use App\Models\HealthRecords;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        return response()->json(Patient::orderBy('created_at', 'DESC')->get());
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        $data = Patient::create($validatedData);

        return response()->json([
            'message' => 'Berhasil menambahkan data pasien!',
            'patient_id' => $data->id
        ]);
    }

    public function show($id){
        $patient = Patient::find($id);
        if (empty($patient)) {
            return response()->json([
                'message' => 'Pasien tidak ditemukan.'
            ], 404);
        } else {
            return response()->json($patient);
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validateData($request);

        Patient::where('id', $id)->update($validatedData);

        return response()->json([
            'message' => 'Berhasil mengupdate data pasien!'
        ]);
    }

    public function destroy($id)
    {
        Patient::destroy($id);
        return response()->json([
            'message' => 'Berhasil menghapus data pasien!'
        ]);
    }

    private function validateData($request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required|max:50',
            'age' => 'required|max:50',
            'height' => 'required|max:50',
            'weight' => 'required|max:50',
            'phone' => 'required|max:50',
        ]);

        return $data;
    }
}
