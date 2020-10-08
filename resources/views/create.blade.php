@extends('layouts.main-layout')

@section ('content')
<form action="{{route('store')}}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">TITLE</label>
        <input type="text" name="title" value="{{ old('title')}}" class="form-control @error('title') is-invalid @enderror">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="text">TEXT</label>
        <input type="text" name="text" value="{{ old('text')}}" class="form-control @error('text') is-invalid @enderror" >
        @error('text')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="category">CATEGORY</label>
        <input type="text" name="category" value="{{ old('category')}}" class="form-control @error('cetegory') is-invalid @enderror">
        @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="like" >LIKE</label>
        <input type="number" name="like" value="{{ old('like', 0)}}" class="form-control @error('like') is-invalid @enderror">
        @error('like')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="dislike" >DISLIKE</label>
        <input type="number" name="dislike" value="{{ old('dislike', 0)}}" class="form-control @error('dislike') is-invalid @enderror">
        @error('dislike')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="btn btn-primary">SAVE</button>
</form>
@endsection