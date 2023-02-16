<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Team;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Teams
        $team1 = new Team();
        $team1->name = "Barcelona";
        $team1->score = 13;
        $team1->save();

        $team2 = new Team();
        $team2->name = "Madrid";
        $team2->score = 110;
        $team2->save();

        $team3 = new Team();
        $team3->name = "Girona";
        $team3->score = 123;
        $team3->save();

        $team5 = new Team();
        $team5->name = "Mallorca";
        $team5->score = 22;
        $team5->save();

        //Games
        $game1 = new Game();
        $game1->team_local_id = 1;
        $game1->team_visitor_id = 2;
        $game1->date_time = "2023-01-02 16:00:00";
        $game1->goals_local = 5;
        $game1->goals_visitor = 0;
        $game1->save();

        $game2 = new Game();
        $game2->team_local_id = 2;
        $game2->team_visitor_id = 3;
        $game2->date_time = "2023-02-04 11:00:00";
        $game2->goals_local = 1;
        $game2->goals_visitor = 3;
        $game2->save();

        $game3 = new Game();
        $game3->team_local_id = 3;
        $game3->team_visitor_id = 4;
        $game3->date_time = "2022-12-24 20:00:00";
        $game3->goals_local = 2;
        $game3->goals_visitor = 2;
        $game3->save();

        $game4 = new Game();
        $game4->team_local_id = 4;
        $game4->team_visitor_id = 1;
        $game4->date_time = "2022-12-02 21:30:00";
        $game4->goals_local = 1;
        $game4->goals_visitor = 2;
        $game4->save();

        //Players
        $player1 = new Player();
        $player1->name = "Leo";
        $player1->surname1 = "Messi";
        $player1->role = "forward";
        $player1->birthdate = "1990-02-01";
        $player1->team_id = 1;
        $player1->save();

        $player2 = new Player();
        $player2->name = "Iker";
        $player2->surname1 = "Casillas";
        $player2->role = "goalkeeper";
        $player2->birthdate = "1987-05-15";
        $player2->team_id = 2;
        $player2->save();

        $player3 = new Player();
        $player3->name = "Carles";
        $player3->surname1 = "Puyol";
        $player3->role = "defender";
        $player3->birthdate = "1980-12-25";
        $player3->team_id = 1;
        $player3->save();

        $player4 = new Player();
        $player4->name = "Carles";
        $player4->surname1 = "Puigdemont";
        $player4->surname2 = "Casamajó";
        $player4->role = "defender";
        $player4->birthdate = "1977-02-12";
        $player4->team_id = 3;
        $player4->save();

    }
}
