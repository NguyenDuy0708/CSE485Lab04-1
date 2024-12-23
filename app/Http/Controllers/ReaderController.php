<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reader;
class ReaderController extends Controller
{
    public function index() {
        $readers = Reader::all();
        return view('readers.index', compact('readers'));
    }
    public function create() {
        return view('readers.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        Reader::create($request->all());
        return redirect()->route('readers.index')->with('success', 'Reader created successfully.');
    }
    public function edit(Reader $reader) {
        return view('readers.edit', compact('reader'));
    }
    public function update(Request $request, Reader $reader) {
        $request->validate([
            'name' => 'required',
            'birtday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $reader->update($request->all());
        return redirect()->route('readers.index')->with('success', 'Thêm thành công.');
    }
    public function destroy(Reader $reader) {
        $reader->delete();
        return redirect()->route('readers.index')->with('success', 'Xóa thành công');
    }
}
