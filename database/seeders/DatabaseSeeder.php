<?php

namespace Database\Seeders;

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
        $this->call([
            AdminSeeder::class,             // no dependencies
            CitiesSeeder::class,            // no dependencies
            PlayerCategoriesSeeder::class,  // no dependencies
            ClubManagersSeeder::class,      // depends on: player_categories
            UsersSeeder::class,             // depends on: player_categories, club_managers
            GroundsSeeder::class,           // depends on: cities
            TeamsSeeder::class,             // depends on: club_managers
            CoachesSeeder::class,           // depends on: club_managers
            EventsSeeder::class,            // depends on: club_managers
            TeamPlayersSeeder::class,       // depends on: users, teams, club_managers
            MatchRequestsSeeder::class,     // depends on: grounds, teams, club_managers
            MatchDetailsSeeder::class,      // depends on: match_requests, users
        ]);
    }
}
