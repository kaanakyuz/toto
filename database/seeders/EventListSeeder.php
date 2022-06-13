<?php

namespace Database\Seeders;

use App\Models\EventList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventList::insert([
            0 => [
                'week_id' => 3,
                'event_name' => 'HJK Helsinki-Oulu',
                'event_id' => 1,
                'event_date' => '2022-06-18 17:00:00',
                'score' => '2-1',
                'result' => 1
            ] ,
            1 => [
                'week_id' => 3,
                'event_name' => 'Seinöjoen-Inter Turku',
                'event_id' => 2,
                'event_date' => '2022-06-18 17:00:00',
                'score' => '1-1',
                'result' => 0
            ],
            2 => [
                'week_id' => 3,
                'event_name' => 'Goianiense-Juventude',
                'event_id' => 3,
                'event_date' => '2022-06-18 22:30:00',
                'score' => '1-1',
                'result' => 0
            ],
            3 => [
                'week_id' => 3,
                'event_name' => 'Cuiaba-Ceara CE',
                'event_id' => 4,
                'event_date' => '2022-06-19 01:00:00',
                'score' => '1-2',
                'result' => 2
            ],
            4 => [
                'week_id' => 3,
                'event_name' => 'Santos SP-Bragantino SP',
                'event_id' => 5,
                'event_date' => '2022-06-19 03:00:00',
                'score' => '1-3',
                'result' => 2
            ],
            5 => [
                'week_id' => 3,
                'event_name' => 'Atletico Mineiro-Flamengo',
                'event_id' => 6,
                'event_date' => '2022-06-19 22:00:00',
                'score' => '3-2',
                'result' => 1
            ],
            6 => [
                'week_id' => 3,
                'event_name' => 'Corinthians-Goias GO',
                'event_id' => 7,
                'event_date' => '2022-06-19 22:00:00',
                'score' => '2-2',
                'result' => 0
            ],
            7 => [
                'week_id' => 3,
                'event_name' => 'Coritiba-Paranaense',
                'event_id' => 8,
                'event_date' => '2022-06-19 22:00:00',
                'score' => '2-1',
                'result' => 1
            ],
            8 => [
                'week_id' => 3,
                'event_name' => 'CA Tigre-Banfield',
                'event_id' => 9,
                'event_date' => '2022-06-19 21:30:00',
                'score' => '2-4',
                'result' => 2
            ],
            9 => [
                'week_id' => 3,
                'event_name' => 'Ath Lanus-Colon De Santa Fe',
                'event_id' => 10,
                'event_date' => '2022-06-19 21:30:00',
                'score' => '2-0',
                'result' => 0
            ],
            10 => [
                'week_id' => 3,
                'event_name' => 'CA Huracan-Atl. Tucuman',
                'event_id' => 11,
                'event_date' => '2022-06-19 21:30:00',
                'score' => '0-1',
                'result' => 2
            ],
            11 => [
                'week_id' => 3,
                'event_name' => 'Jerv-H.kameratene',
                'event_id' => 12,
                'event_date' => '2022-06-19 19:00:00',
                'score' => '1-1',
                'result' => 0
            ],
            12 => [
                'week_id' => 3,
                'event_name' => 'Lillestrom-Rosenborg',
                'event_id' => 13,
                'event_date' => '2022-06-19 19:00:00',
                'score' => '2-1',
                'result' => 1
            ],
            13 => [
                'week_id' => 3,
                'event_name' => 'Odds BK-Molde',
                'event_id' => 14,
                'event_date' => '2022-06-19 19:00:00',
                'score' => '2-3',
                'result' => 2
            ],
            14 => [
                'week_id' => 3,
                'event_name' => 'Tromso IL-Haugesund',
                'event_id' => 15,
                'event_date' => '2022-06-19 19:00:00',
                'score' => '0-3',
                'result' => 2
            ],
        ]);


    }
}
