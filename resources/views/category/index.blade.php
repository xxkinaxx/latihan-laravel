@extends('admin.parent')

@section('content')

<div class="card">
    <h1 class="m-2">Category Index</h1>
    <hr>
    <div class="d-flex justify-content-end">
        <a href="{{ route('category.create') }}" class="btn btn-success m-2">Create Category</a>
    </div>
</div>

@endsection