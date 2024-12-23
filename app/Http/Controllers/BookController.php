<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category' => 'required',
            'year' => 'required',
            'quantity' => 'required',
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Tạo sách thành công');
    }
    public function edit(Book $book) {
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book) {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category' => 'required',
            'year' => 'required',
            'quantity' => 'required',
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Câp nhật sách thành công.');
    }
    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Xóa sách thành công.');
    }
}
