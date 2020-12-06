<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Etape;
use App\Models\Voyage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Voyage & Etape N°1
        $voyage1 = Voyage::create([
            "name" => "Voyage n°1",
        ]);

        $data = [
            [
                "type" => "plane",
                "number" => "SK22",
                "departure" => "Stockholm",
                "arrival" => "New York JFK",
                "departure_date" => "2020-05-10 15:30",
                "arrival_date" => "2020-05-10 17:00",
                "seat" => "7B",
                "gate" => "22",
            ],
            [
                "type" => "bus",
                "number" => "airport",
                "departure" => "Barcelona",
                "arrival" => "Gerona Airport",
                "departure_date" => "2020-05-10 10:30",
                "arrival_date" => "2020-05-10 12:00",
            ],
            [
                "type" => "plane",
                "number" => "SK455",
                "departure" => "Gerona Airport",
                "arrival" => "Stockholm",
                "departure_date" => "2020-05-10 12:30",
                "arrival_date" => "2020-05-10 15:00",
                "seat" => "3A",
                "gate" => "54B",
                "baggage_drop" => "344",
            ],
            [
                "type" => "train",
                "number" => "78A",
                "departure" => "Madrid",
                "arrival" => "Barcelona",
                "departure_date" => "2020-05-10 08:00",
                "arrival_date" => "2020-05-10 10:00",
                "seat" => "45B",
            ],
        ];

        foreach($data as $eta) {
            $eta["voyage_id"] = $voyage1->id;
            Etape::create($eta);
        }

        // Voyage & Etape N°2
        $voyage2 = Voyage::create([
            "name" => "Voyage n°2",
        ]);

        $data = [
            [
                "type" => "bus",
                "number" => "B1",
                "departure" => "Grasse",
                "arrival" => "Cannes",
                "departure_date" => "2020-05-10 08:30",
                "arrival_date" => "2020-05-10 09:30",
            ],
            [
                "type" => "train",
                "number" => "TER-A",
                "departure" => "Cannes",
                "arrival" => "Nice Riquier",
                "departure_date" => "2020-05-10 10:00",
                "arrival_date" => "2020-05-10 10:30",
            ],
            [
                "type" => "bus",
                "number" => "B2",
                "departure" => "Nice Riquier",
                "arrival" => "Nice",
                "departure_date" => "2020-05-10 11:00",
                "arrival_date" => "2020-05-10 12:00",
            ],
            [
                "type" => "plane",
                "number" => "P455",
                "departure" => "Nice",
                "arrival" => "Paris",
                "departure_date" => "2020-05-10 12:30",
                "arrival_date" => "2020-05-10 14:00",
                "seat" => "3A",
                "gate" => "45B",
            ],
            [
                "type" => "plane",
                "number" => "P42",
                "departure" => "Paris",
                "arrival" => "Londre",
                "departure_date" => "2020-05-10 14:20",
                "arrival_date" => "2020-05-10 16:40",
                "seat" => "96B",
                "gate" => "12",
                "baggage_drop" => "123",
            ],
            [
                "type" => "train",
                "number" => "T9 3/4",
                "departure" => "Londre",
                "arrival" => "Hogwarts Castle",
                "departure_date" => "2020-05-10 17:00",
                "arrival_date" => "2020-05-10 19:19",
                "seat" => "6",
            ],
        ];

        foreach($data as $eta) {
            $eta["voyage_id"] = $voyage2->id;
            Etape::create($eta);
        }

        // Voyage & Etape N°3
        $voyage3 = Voyage::create([
            "name" => "Voyage Los Angeles",
        ]);

        $data = [
            [
                "type" => "train",
                "number" => "TGV-7856",
                "departure" => "Rennes",
                "arrival" => "Paris",
                "departure_date" => "2020-05-10 06:00",
                "arrival_date" => "2020-05-10 08:01",
                "seat" => "148",
            ],
            [
                "type" => "plane",
                "number" => "P66",
                "departure" => "Paris",
                "arrival" => "New York",
                "departure_date" => "2020-05-10 09:45",
                "arrival_date" => "2020-05-10 18:12",
                "seat" => "48A",
                "gate" => "24",
                "baggage_drop" => "456",
            ],
            [
                "type" => "bus",
                "number" => "B2",
                "departure" => "New York",
                "arrival" => "Los Angeles",
                "departure_date" => "2020-05-10 18:25",
                "arrival_date" => "2020-05-10 21:00",
            ],
        ];

        foreach($data as $eta) {
            $eta["voyage_id"] = $voyage3->id;
            Etape::create($eta);
        }

        // Voyage & Etape N°4
        $voyage4 = Voyage::create([
            "name" => "Voyage Annecy",
        ]);

        $data = [
            [
                "type" => "plane",
                "number" => "P12",
                "departure" => "Rennes",
                "arrival" => "Marseille",
                "departure_date" => "2020-05-10 10:12",
                "arrival_date" => "2020-05-10 11:35",
                "seat" => "24B",
                "gate" => "6",
                "baggage_drop" => "546",
            ],
            [
                "type" => "train",
                "number" => "TGV-1546",
                "departure" => "Marseille",
                "arrival" => "Lyon",
                "departure_date" => "2020-05-10 12:12",
                "arrival_date" => "2020-05-10 14:58",
                "seat" => "24",
            ],
            [
                "type" => "train",
                "number" => "TER-C",
                "departure" => "Lyon",
                "arrival" => "Annecy",
                "departure_date" => "2020-05-10 15:25",
                "arrival_date" => "2020-05-10 16:48",
            ],
        ];

        foreach($data as $eta) {
            $eta["voyage_id"] = $voyage4->id;
            Etape::create($eta);
        }
    }
}
