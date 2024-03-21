<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->get();

        return Inertia::render('Games', [
            'games' => $games,
        ]);
    }
    public function show($id)
    {
        // // Récupérer le cours donné avec ses aptitudes, critères et proficiencies
        // $course = Course::with('aptitudes.criterias', 'proficiencies')
        // ->findOrFail($courseId);

        // // Récupérer les étudiants inscrits à ce cours
        // $students = CourseStudent::join('students', 'students.id', "=", "course_students.student_id")
        // ->join('section_students', 'section_students.student_id', '=', 'students.id')
        // ->where('course_students.course_id', $courseId)->where('section_students.section_id', $sectionId)->select('students.*')->orderBy('students.id')
        // ->get();

        // $dateEval = CourseStudent::where('course_id', $courseId)->pluck('date_eval', 'student_id')->toArray();

        // $sectionData = Section::where('id', $sectionId)->first();

        $coaches=User:://->role("Coach");

        return Inertia::render('games/show', [
            'coaches' => $coaches,
        ]);
    }
}
