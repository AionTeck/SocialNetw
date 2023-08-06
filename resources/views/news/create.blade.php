@extends('layouts.layout')

@section('title')
    News page
@endsection

@section('content')
    <h2>Add your new news</h2>

    <form action="{{ route('news.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Your title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="content" class="form-label">Enter text of your news</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            @error('content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <select class="form-select" id="tags" multiple aria-label="Multiple select example" name="tags[]">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Add!</button>
    </form>

@endsection
