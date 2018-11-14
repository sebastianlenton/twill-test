@extends('site.common.app')

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

                    @php

                        //get the tags
                        $projectTagRelationship = $project->projecttags();
                        $projectTags = $projectTagRelationship->get();

                    @endphp

                    <ul>

                        @foreach( $projectTags as $projectTag )

                            <li>
                                <a href="/tagged/{{ $projectTag->slug }}">{{ $projectTag->title }}</a>
                            </li>

                        @endforeach

                    </ul>

                @endif

                @include('site.partials.formatDateYYYY', [
                    'date' => $project->publication_date
                ])

            </li>

        @endforeach

    </ul>

@endsection