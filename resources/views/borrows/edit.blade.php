@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Chỉnh Sửa Giao Dịch Mượn Sách</h1>
    <form action="{{ route('borrows.update', $borrow->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Method PUT để cập nhật -->
        
        <div class="mb-3">
            <label for="reader_id" class="form-label">Độc Giả</label>
            <select class="form-control" id="reader_id" name="reader_id" required>
                <option value="">-- Chọn Độc Giả --</option>
                @foreach($readers as $reader)
                <option value="{{ $reader->id }}" {{ $borrow->reader_id == $reader->id ? 'selected' : '' }}>
                    {{ $reader->name }}
                </option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="book_id" class="form-label">Sách</label>
            <select class="form-control" id="book_id" name="book_id" required>
                <option value="">-- Chọn Sách --</option>
                @foreach($books as $book)
                <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>
                    {{ $book->name }}
                </option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="borrow_date" class="form-label">Ngày Mượn</label>
            <input type="date" class="form-control" id="borrow_date" name="borrow_date" value="{{ $borrow->borrow_date }}" required>
        </div>
        
        <div class="mb-3">
            <label for="return_date" class="form-label">Ngày Trả</label>
            <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $borrow->return_date }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('borrows.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
