@extends('layouts. main-layout')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
        <li>
            <h2>{{ $project -> name  }}</h2>
            <img class="pjImg" src="{{ $project -> main_image }}" alt="">
            <div> {{ $project -> release_date }}</div>
        </li>
            
        @endforeach
    </ul>
@endsection