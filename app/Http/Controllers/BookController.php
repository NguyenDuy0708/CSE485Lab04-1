<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    public function index()
{
$books = Book::all();
return view('books.index', compact('books'));
}
public function create()
{
return view('books.create');
}
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'author' => 'required',
// ... các validation khác
]);
Book::create($request->all());
return redirect()->route('books.index')
->with('success', 'Thêm sách thành công.');
}
}
