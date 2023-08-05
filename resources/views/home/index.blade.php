@extends('layouts.layout')

@section('title')
    Main page
@endsection

@section('content')
    <h2>Home</h2>

    <p>Hello, {{ Auth::user()->name }}</p>
@endsection
