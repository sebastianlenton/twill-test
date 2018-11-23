@extends('site.common.app')

@section('content')

    <div class="gc">

            @foreach($projects as $project)

                    <div class="g g6-12 gBreakTablet">

                        <h2>
                            <a href="/project/{{ $project->projectPermalink }}">
                                {{ $project->title }}
                            </a>
                        </h2>

                        {{-- get and output tags --}}
                        @php

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

                    </div>

                    <div class="g g5-12 gBreakTablet">

                        @if ($project->undocumented === 0)

                            {{ ImageHelper::render(
                                $project->image('index_page_image','default'),
                                $project->imageAltText('index_page_image')
                            ) }}

                        @endif

                    </div>

                    <div class="g g1-12 alignRight gBreakTablet">

                        @include('site.partials.formatDateYYYY', [
                            'date' => $project->publication_date
                        ])

                    </div>

                    <div class="cf"></div>

            @endforeach

    </div>

@endsection