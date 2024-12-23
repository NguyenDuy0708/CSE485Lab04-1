<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
class BorrowController extends Controller
{
    public function index() {
        $borrows  = Borrow::all();
        return view('borrows.index', compact('borrows'));
    }
    public function create() {
        return view('borrows.create');
    }
    public function store(Request $request) {
        $request->validate([
            'id_reader' => 'required',
            'id_book' => 'required',
            'date_borrow' => 'required',
            'date_return' => 'required',
            'status' => 'required',
        ]);
        Borrow::create($request->all());
        return redirect()->route('borows.index')->with('success', 'Borrow created successfully.');
    }
    public function show(Borrow $borrow) {
        return view('borrows.show', compact('borrow'));
    }
    public function edit(Borrow $borrows) {
        return view('borrows.edit', compact('borrows'));
    }
    public function update(Request $request, Borrow $borrows) {
        $request->validate([
            'id_reader' => 'required',
            'id_book' => 'required',
            'date_borrow' => 'required',
            'date_return' => 'required',
            'status' => 'required',
        ]);
        $borrows->update($request->all());
        return redirect()->route('borows.index')->with('success', 'Borrow updated successfully.');
    }
    public function destroy(Borrow $borrows) {
        $borrows->delete();
        return redirect()->route('borows.index')->with('success', 'Borrow deleted successfully.');
    }
}
