@extends('layouts. main-layout')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
        <li>
            <a href="{{ route('project.show', $project)}}">
                <h2>{{ $project -> name  }}</h2> 
            </a>
            <img class="pjImg" src="{{ $project -> main_image }}" alt="">s
            <div> {{ $project -> release_date }}</div>
            
        </li>
            
        @endforeach
    </ul>
@endsection