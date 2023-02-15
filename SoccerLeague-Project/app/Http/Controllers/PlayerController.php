<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

/**
 * Class PlayerController
 * @package App\Http\Controllers
 */
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::paginate();

        return view('player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $player = new Player();

        //Getting information of the Team this Player belongs to
        $teams = Team::pluck('name', 'id');

        return view('player.create', compact('player', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Player::$rules);

        $player = Player::create($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Player created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);

        return view('player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);

        //Getting information of the Team this Player belongs to
        $teams = Team::pluck('name', 'id');

        return view('player.edit', compact('player', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Player $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        request()->validate(Player::$rules);

        $player->update($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Player updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $player = Player::find($id)->delete();

        return redirect()->route('players.index')
            ->with('success', 'Player deleted successfully');
    }
}
