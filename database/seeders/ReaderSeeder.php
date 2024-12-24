<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reader = [
            [
              'name' => 'Nguyen Van A',
              'birthday' => '2000-01-01',
              'address' => 'Ha Noi',
              'phone' => '0123456789'
            ],
            [
              'name' => 'Nguyen Van B',
              'birthday' => '2001-01-01',
              'address' => 'Ha Noi',
              'phone' => '0123456789'
            ],
            [
              'name' => 'Nguyen Van C',
              'birthday' => '2002-01-01',
              'address' => 'Ha Noi',
              'phone' => '0123456789'
            ]
          ];

          foreach ($reader as $reader) {
              Reader::create($reader);
          }

    }
}
