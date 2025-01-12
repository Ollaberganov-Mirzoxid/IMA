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
        return view('pages.conferences.show')->with([
            'conference' => $conference,
            'recent_conferences' => Conference::latest()->get()->except($conference->id)->take(5)
            /* 
            1.recent_conferences - bu oxirgi Anjumanlarni ko'rsatish uchun o'zgaruvchi
            2.Conference - bu Model
            3.latest - bu eng oxirgilari bo'yicha saralash
            4.get - bazadan ma'lumotlarni olib kel
            5.except - dan tashqari ya'ni ($conference->id) shu idli Anjumanni olma
            6.take(5) - 5 tasini olmoq 
            */
        ]);
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
