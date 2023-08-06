@extends('layouts.layout')

@section('title')
    News page
@endsection

@section('content')
    <h2>News</h2>

    <a class="btn btn-primary" href="{{ route('news.create') }}" role="button">Add new news</a>


    @foreach($data as $el)
        <div class="alert alert-dark mt-3">
            <h5>{{ $el->title }}</h5>
            <br>
            {{ $el-> content }}
            <br>
            Created: {{ $el-> created_at }}
            <br>
            Author: {{ $el-> author }}
            <br>
        </div>
    @endforeach
    <div>
        {{ $data->links() }}
    </div>

@endsection
