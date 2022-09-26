<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'name'=>'Crack the Code',
                'category'=>'Education',
                'image'=>'https://www.adobe.com/express/create/cover/media_181e3d2c78f153ae7bf0e19a2faeb9a76e234da30.jpeg?width=400&format=jpeg&optimize=medium',
                'author_name'=>'Pattrick',
                'published_date'=>'2022/02/12',
                'image_path'=>'/storage/app/public'
                ]
                , [
                    'name'=>'The gravity of us ',
                    'category'=>'novel',
                    'image'=>'https://assets.teenvogue.com/photos/5cd4384fac4d9e712fe2ebb0/2:3/w_1852,h_2778,c_limit/The%20Gravity%20of%20Us_.jpg',
                    'author_name'=>'Phil',
                    'publish_date'=>'2022/02/12',
                    'image_path'=>'/storage/app/public'
                    ]
                ]);
    }
}
