<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                'title' => "FIVE NIGHTS AT FREDDY'S",
                'rating' => "PG13",
                'length' => "1h 49m",
                'director' => "Emma Tammi",
                'stars' => "Josh Hutcherson, Elizabeth Lail, Piper Rubio, Kat Conner Sterling",
                'synopsis' => "Can you survive five nights? The terrifying horror game phenomenon becomes a blood-chilling cinematic event, as Blumhouse brings Five Nights at Freddy's to the big screen. The film follows a troubled security guard as he begins working at Freddy Fazbear's Pizza. While spending his first night on the job, he realizes the night shift at Freddy's won't be so easy to make it through.",
                'poster' => "poster/otcNcy5inBw671MxEl6KiE07ugctk5K5DdTJvFla.jpg",
                'banner' => "banner/XQqgRWEQlE7zgDbSz0qQECfxgehlPxYZmMkdg33b.jpg",
                'trailer' => NULL
            ],

            [
                'title' => "THE MARVELS",
                'rating' => "PG13",
                'length' => "1h 45m",
                'director' => "Nia DaCosta",
                'stars' => "Teyonah Parris, Brie Larson, Zawe Ashton, Iman Vellani",
                'synopsis' => "Carol Danvers AKA Captain Marvel has reclaimed her identity from the tyrannical Kree and taken revenge on the Supreme Intelligence. But unintended consequences see Carol shouldering the burden of a destabilized universe. When her duties send her to an anomalous wormhole linked to a Kree revolutionary, her powers become entangled with that of Jersey City super-fan Kamala Khan, aka Ms. Marvel, and Carol's estranged niece, now S.A.B.E.R. astronaut Captain Monica Rambeau.",
                'poster' => "poster/GhsljHDJ5ovCwY2hXHvDtS6rvesoiZsJJFU7GiNE.jpg",
                'banner' => "banner/ptNZ4rASTtjPY8pJ41oFXeayONQd5BkPr6Urql0z.jpg",
                'trailer' => NULL
            ],

            [
                'title' => "SCOOBY-DOO",
                'rating' => "PG",
                'length' => "1h 26m",
                'director' => "Raja Gosnell",
                'stars' => "Freddie Prinze, Jr., Sarah Michelle Gellar, Matthew Lillard, Linda Cardellini",
                'synopsis' => "After an acrimonious break up, the Mystery Inc. gang are individually brought to an island resort to investigate strange goings on.",
                'poster' => "poster/e8qSogynUO2F4TGmsaF9EdNjRFp89H4mrYcUll70.jpg",
                'banner' => "banner/WjFkzyllES0xNx9LtYJgxoQ27q4iQA0hj87AUflV.jpg",
                'trailer' => NULL
            ]
        ];

        Movies::insert($data);
    }
}
