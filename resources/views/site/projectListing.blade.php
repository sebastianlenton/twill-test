{{-- homepage --}}

@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    <h1>Projects:</h1>

    <p>
        This is a placeholder Index project listing page. Select a project below to view more details:
    </p>

    @foreach($projects as $project)

        @if ($project->undocumented === 1)

            <p>Project is undocumented</p>

        @else

            <ul>
                <li>
                    <a href="/project/{{ $project->projectPermalink }}">
                        {{ $project->title }}
                    </a>
                </li>
            </ul>

        @endif

        @if( !is_null( $project->publication_date ) )

            <?php
                $projectDate = \Carbon\Carbon::parse($project->publication_date);
            ?>

            {{ date_format($projectDate, 'Y') }}<br>

        @endif

    @endforeach

@endsection