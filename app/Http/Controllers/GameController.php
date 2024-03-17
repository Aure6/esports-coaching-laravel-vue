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
}
