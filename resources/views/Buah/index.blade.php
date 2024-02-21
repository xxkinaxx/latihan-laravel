@extends('admin.parent')
@section('content')

<div class="card">
    <h1 class="m-2">Buah Index</h1>
    <hr>
    <div class="d-flex justify-content-end">
        <a href="{{route('buah.create')}}" class="btn btn-success m-2">Create Buah</a>
    </div>
</div>

@endsection