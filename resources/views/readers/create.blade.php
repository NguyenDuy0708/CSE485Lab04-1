@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Thêm độc giả</h1>
    <form action="{{ route('readers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Học tên </label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Ngày sinh</label>
            <input type="text" class="form-control" id="birthday" name="birthday" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Số Điện Thoại</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm độc giả</button>
    </form>
</div>
@endsection
