@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Category </label>
        <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
</div>
@endsection
