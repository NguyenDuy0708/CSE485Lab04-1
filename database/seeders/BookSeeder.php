<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'name' => 'Tôi thấy hoa vàng trên cỏ đất',
                'author' => 'Chương Dương',
                'category' => 'Tiểu thuyết',
                'year' => 2022,
                'quantity' => 8
            ],
            [
                'name' => 'Nhà giả kim',
                'author' => 'Paulo Coelho',
                'category' => 'Tiểu thuyết',
                'year' => 2018,
                'quantity' => 19
            ],
            [
                'name' => 'Đắc nhân tâm',
                'author' => 'Dale Carnegie',
                'category' => 'Kỹ năng sống',
                'year' => 2019,
                'quantity' => 10
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
