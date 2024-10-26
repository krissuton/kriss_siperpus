<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bookshelfseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB ::table('bookshelves')->insert([
            [
                'code'=> 'RAK01',
                'name'=>'informatika',

            ],
            [
                'code'=> 'RAK02',
                'name'=>'sipil',
            ],
            [
                'code'=> 'RAK03',
                'name'=>'industri',
            ],
        ]);
    }
}
