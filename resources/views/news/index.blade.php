@extends('layouts.layout')

@section('title')
    News page
@endsection

@section('content')
    <h2>News</h2>

    <a class="btn btn-primary" href="{{ route('news.create') }}" role="button">Add new news</a>


    @foreach($data as $el)
        <div class="alert alert-dark mt-3">
            {{ $el-> content }}
            <br>
            {{ $el-> created_at }}
        </div>
    @endforeach

@endsection
