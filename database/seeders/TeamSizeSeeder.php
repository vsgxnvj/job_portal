<?php

namespace Database\Seeders;

use App\Models\TeamSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamSize::insert([
            [
                'name' => 'Only Me',
                'slug' => 'only-me',
            ],
            [
                'name' => '1-5 Members',
                'slug' => '1-5-members',
            ],
            [
                'name' => '5-10 Members',
                'slug' => '5-10-members',
            ],
            [
                'name' => '100-200 Members',
                'slug' => '100-200-members',
            ],
            [
                'name' => '200-300 Members',
                'slug' => '200-300-members',
            ],
            [
                'name' => '300-400 Members',
                'slug' => '300-400-members',
            ],
            [
                'name' => '500+ Members',
                'slug' => '500-members',
            ],
        ]);
    }
}
