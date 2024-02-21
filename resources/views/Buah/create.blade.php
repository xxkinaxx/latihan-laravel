@extends('admin.parent')
@section('content')

<div class="card p-4">
    <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <h1>Create Buah</h1>

        <div class="form-floating mb-3">
            <input type="" class="form-control" id="floatingInput" placeholder="Taruh nama" name="name">
            <label for="floatingInput">Name Buah</label>
        </div>
        <div class="form-floating mb-3">
            <input type="" class="form-control" id="floatingInput" placeholder="Taruh Harga" name="harga">
            <label for="floatingInput">Harga</label>
        </div>
        <div class="form-floating mb-3">
            <input type="" class="form-control" id="floatingInput" placeholder="Taruh Warna" name="warna">
            <label for="floatingInput">Warna</label>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


@endsection