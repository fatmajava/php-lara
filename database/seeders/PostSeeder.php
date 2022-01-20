<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert(
            [
            [

            'title'=>'sport',
            'description'=>'The biggest questions for the divisional round of the NFL playoffs',
        ],

        [
            'title'=>'political',
            'description'=>'The biggest questions for the divisional round of the NFL playoffs',
         ],
        [
            'title'=> 'technology',
            'description'=>'Biden nods to Covid missteps, inflation pain as he caps his first year',

        ],
        [
            'title'=> 'media',
            'description'=>'Following Disney Worlds Lead, Another Major Amusement Park Is Offering',

        ]
       
             ] );
        

    }
}
