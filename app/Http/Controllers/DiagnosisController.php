<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Question;
use Illuminate\Http\Request;

/**
 * Class DiagnosisController
 * @package App\Http\Controllers
 */
class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnoses = Diagnosis::paginate();

        return view('diagnosis.index', compact('diagnoses'))
            ->with('i', (request()->input('page', 1) - 1) * $diagnoses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $questions = Question::all();

        return view('diagnosis.create', compact('questions'))->with('i');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $G001 = $request->G001;
        $G002 = $request->G002;
        $G003 = $request->G003;
        $G004 = $request->G004;
        $G005 = $request->G005;
        $G006 = $request->G006;
        $G007 = $request->G007;
        $G008 = $request->G008;
        $G009 = $request->G009;
        $G010 = $request->G010;
        $G011 = $request->G011;
        $G012 = $request->G012;
        $G013 = $request->G013;
        $G014 = $request->G014;
        $G015 = $request->G015;
        $G016 = $request->G016;
        $G017 = $request->G017;
        $G018 = $request->G018;
        $G019 = $request->G019;
        $G020 = $request->G020;
        $G021 = $request->G021;

        if ($G001 == 1 && $G002 == 1 && $G003 == 1) {
            $hasil = "Noda Kornea";
        } elseif ($G003 == 1 && $G004 == 1 && $G006  == 1 && $G007 == 1 && $G008 == 1 && $G009 == 1) {
            $hasil = "Blepharitis";
        } elseif ($G004 == 1 && $G005 == 1 && $G021  == 1) {
            $hasil = "Reaksi Alergi";
        } else {
            $hasil = "Tidak Diketahui";
        }

        return $hasil;
        $diagnosis = Diagnosis::create([
            'user_id'           => $request->user_id,
            'nama_pasien'       => $request->nama_pasien,
            'alamat'            => $request->alamat,
            'tanggal'           => $request->tanggal,
            'hasil'             => $hasil,
            'saran'             => $saran
        ]);

        return redirect()->route('admin.diagnoses.index')
            ->with('success', 'Diagnosis created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosis = Diagnosis::find($id);

        return view('diagnosis.show', compact('diagnosis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnosis = Diagnosis::find($id);

        return view('diagnosis.edit', compact('diagnosis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Diagnosis $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        request()->validate(Diagnosis::$rules);

        $diagnosis->update($request->all());

        return redirect()->route('admin.diagnoses.index')
            ->with('success', 'Diagnosis updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $diagnosis = Diagnosis::find($id)->delete();

        return redirect()->route('admin.diagnoses.index')
            ->with('success', 'Diagnosis deleted successfully');
    }
}
