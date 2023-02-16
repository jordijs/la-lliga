<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

/**
 * Class GameController
 * @package App\Http\Controllers
 */
class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::paginate();

        $gamedatetime = Game::get('date_time');
        //Getting information of the Teams the Games refer to
        $teams = Team::pluck('name', 'id');

        return view('game.index', compact('games', 'teams', 'gamedatetime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = new Game();

        $teams = Team::pluck('name', 'id');

        return view('game.create', compact('game', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Game::$rules);

        $game = Game::create($request->all());

        return redirect()->route('games.index')
            ->with('success', "S'ha creat el partit correctament.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);

        return view('game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);

        $teams = Team::pluck('name', 'id');

        return view('game.edit', compact('game', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        request()->validate(Game::$rules);

        $game->update($request->all());

        return redirect()->route('games.index')
            ->with('success', "S'ha editat el partit correctament");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $game = Game::find($id)->delete();

        return redirect()->route('games.index')
            ->with('success', "S'ha esborrat el partit correctament");
    }
}
