@extends('layouts. main-layout')

@section('content')
    <div class="container">
        <h1>Project</h1>
        <img class="pjImg" src="{{ $project -> main_image }}" alt="">
        <h2>{{ $project -> name }}</h2>
        <div> {{ $project -> description }} </div>
        <div> {{$project -> release_date}}</div>
        <div>Link: <a href="{{$project -> repo_link}}">Github</a></div>
    </div>
    

@endsection