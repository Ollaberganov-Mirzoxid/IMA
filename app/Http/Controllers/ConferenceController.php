<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('pages.conferences.conferences')
        ->with('conferences', $conferences);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Conference $conference)
    {
        return view('pages.conferences.show')->with('conference', $conference);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
