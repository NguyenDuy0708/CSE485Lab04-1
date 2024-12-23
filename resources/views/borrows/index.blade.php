@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Quản lý Mượn Trả Sách</h1>
    <a href="{{ route('borrows.create') }}" class="btn btn-primary mb-3">Thêm Giao Dịch</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Độc Giả</th>
                <th>Sách</th>
                <th>Ngày Mượn</th>
                <th>Ngày Trả</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrows as $borrow)
            <tr>
                <td>{{ $borrow->id }}</td>
                <td>{{ $borrow->reader->name }}</td>
                <td>{{ $borrow->book->name }}</td>
                <td>{{ $borrow->borrow_date }}</td>
                <td>{{ $borrow->return_date }}</td>
                <td>{{ $borrow->status ? 'Đã Trả' : 'Đang Mượn' }}</td>
                <td>
                    <a href="{{ route('borrows.edit', $borrow->id) }}" class="btn btn-warning btn-sm">Chỉnh sửa</a>
                    <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
