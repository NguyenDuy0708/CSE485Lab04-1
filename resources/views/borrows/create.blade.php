@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Thêm Giao Dịch Mượn Sách</h1>
    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="reader_id" class="form-label">Độc Giả</label>
            <select class="form-control" id="reader_id" name="reader_id" required>
                <option value="">-- Chọn Độc Giả --</option>
                @foreach($readers as $reader)
                <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book_id" class="form-label">Sách</label>
            <select class="form-control" id="book_id" name="book_id" required>
                <option value="">-- Chọn Sách --</option>
                @foreach($books as $book)
                <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="borrow_date" class="form-label">Ngày Mượn</label>
            <input type="date" class="form-control" id="borrow_date" name="borrow_date" required>
        </div>
        <div class="mb-3">
            <label for="return_date" class="form-label">Ngày Trả</label>
            <input type="date" class="form-control" id="return_date" name="return_date" required>
        </div>
        <button type="submit" class="btn btn-success">Thêm</button>
    </form>
</div>
@endsection