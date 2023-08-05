@extends('layouts.layout')

@section('title')
    News page
@endsection

@section('content')
    <h2>Add your new news</h2>

    <form action="{{ route('news.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="content" class="form-label">Enter text of your news</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add!</button>
    </form>

@endsection
