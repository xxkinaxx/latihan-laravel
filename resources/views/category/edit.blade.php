@extends('admin.parent')

@section('content')

<div class="card p-5">

    <form action="{{route('category.update', $category->id)}}" method="post">
        @csrf
        @method('PUT')

        {{-- METHOD POST = CREATE --}}
        {{-- METHOD DELETE = DELETE --}}
        {{-- METHOD PUT = UPDATE --}}
        {{-- METHOD PATCH = UPDATE --}}

        <label for="">Name Category</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control">

        <button type="submit" class="btn btn-info mt-2">Update</button>
    </form>

    

</div>

@endsection