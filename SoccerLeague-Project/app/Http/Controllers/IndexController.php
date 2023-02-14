<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    public function index()
    {
        $games = Game::paginate();

        return view('index', compact('games'))
            ->with('i', (request()->input('page', 1) - 1) * $games->perPage());
    }
}
