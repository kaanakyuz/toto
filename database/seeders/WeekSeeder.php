<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Week::insert([
            0 => [
                'date' => "2022-06-12",
                'no' => 3,
                'status' => '1'
            ]
        ]);
    }
}
