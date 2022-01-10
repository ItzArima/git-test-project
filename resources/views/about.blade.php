@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
    <div class="about-container">
        <div class="jumbo">
            <img src="https://picsum.photos/id/1079/1920/1080" alt="jumbo">
            <h1>About Page</h1>
        </div>
    </div>
@endsection