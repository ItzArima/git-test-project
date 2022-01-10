@extends('layouts.app')

@section('page-title', 'Homepage')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="jumbo">
            <img src="https://picsum.photos/id/1067/1920/1080" alt="jumbo">
            <h1>Git Test Home</h1>
        </div>
    </div>
@endsection