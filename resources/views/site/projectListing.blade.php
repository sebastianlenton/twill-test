{{-- homepage --}}

@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    <h1>Projects:</h1>

    <p>
        This is a placeholder projects listing page. Select a project below to view more details:
    </p>

    @foreach($projects as $project)

    <ul>
        <li>
            <a href="/project/{{ $project->projectPermalink }}">
                {{ $project->title }}
            </a>
        </li>
    </ul>

    @endforeach

@endsection