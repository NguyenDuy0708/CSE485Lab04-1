@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Chỉnh sửa Sách</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên Sách</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Tác Giả</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Thể Loại</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $book->category }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Năm Xuất Bản</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $book->year }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Số Lượng</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $book->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
