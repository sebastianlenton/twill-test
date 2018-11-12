@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    <h1>Index:</h1>

    <p>
        This is a placeholder Index project listing page. Select a project below to view more details:
    </p>

    <ul>

        @foreach($projects as $project)

            <li>

                @if ($project->undocumented === 1)

                    <p>{{ $project->title }}: Project is undocumented</p>

                @else

                    <a href="/project/{{ $project->projectPermalink }}">
                        {{ $project->title }}
                    </a>

                    <br>

                    @include('site.partials.projectTagsList', [
                        'projectTags' => $project->tagData
                    ])

                @endif

                @include('site.partials.formatDateYYYY', [
                    'date' => $project->publication_date
                ])

            </li>

        @endforeach

    </ul>

@endsection