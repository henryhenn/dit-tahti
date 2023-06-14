<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survey = Survey::query()
            ->select('id', 'judul', 'link')
            ->latest()
            ->get();

        return view('survey.index', compact('survey'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string',
        ]);

        Survey::create($data);

        return to_route('survey.index')->with('message', 'Survey berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        return view('survey.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string',
        ]);

        $survey->update($data);

        return to_route('survey.index')->with('message', 'Survey berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();

        return back()->with('message', 'Survey berhasil dihapus!');
    }
}
