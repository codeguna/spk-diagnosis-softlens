<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
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
        $diagnosis = new Diagnosis();
        return view('diagnosis.create', compact('diagnosis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Diagnosis::$rules);

        $diagnosis = Diagnosis::create($request->all());

        return redirect()->route('diagnoses.index')
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

        return redirect()->route('diagnoses.index')
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

        return redirect()->route('diagnoses.index')
            ->with('success', 'Diagnosis deleted successfully');
    }
}
