<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SubmissionEvaluated;
use App\Models\Submission;

class incidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function evaluateSubmission(Submission $submission)
{
    // Logique d'évaluation de la soumission
    $submission->status = 'approved'; // ou 'rejected'
    $submission->save();

    // Diffuser l'événement en temps réel
    event(new SubmissionEvaluated($submission));

    return response()->json(['status' => 'Soumission évaluée avec succès.']);
}
}
