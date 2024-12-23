<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;
class BorrowSeeder extends Seeder
{
    public function run(): void
    {
        $borrows = [
            [
                'reader_id' => 1,
                'book_id' => 1,
                'borrow_date' => '2022-01-01',
                'return_date' => '2022-01-15',
                'status' => 0
            ],
            [
                'reader_id' => 2,
                'book_id' => 2,
                'borrow_date' => '2022-02-01',
                'return_date' => '2022-02-15',
                'status' => 1
            ],
            [
                'reader_id' => 3,
                'book_id' => 3,
                'borrow_date' => '2022-03-01',
                'return_date' => '2022-03-15',
                'status' => 0
            ]
            ];

        foreach ($borrows as $borrow) {
            Borrow::create($borrow);
        }
            
    }
}
