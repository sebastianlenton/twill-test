@extends('site.common.app')

@section('content')

    <div class="gc">

        <div class="g g3-12">
            
            <h1>
                {{ $item->title }}
            </h1>

        </div>

        

            @php
                $counter = 0;
            @endphp
            
            @foreach( $projects as $project )

                {{--
                    every odd item from 3 onwards gets a gp3
                    every second item gets a gp1.
                --}}
                @php

                    $gpClass = '';

                    if( $counter % 2 === 1 ) {
                        $gpClass = 'gp1';
                    } else {
                        if( $counter >= 2 ) {
                            if( $counter % 2 === 0 ) {
                                $gpClass = 'gp3';
                            }
                        }
                    }

                @endphp

                <div class="g g4-12 {{ $gpClass }}">

                    <h2>
                        <a href="/project/{{ $project->slug }}">
                            {{ $project->title }}
                        </a>
                    </h2>

                    <a href="/project/{{ $project->slug }}">
                        {{ ImageHelper::render(
                            $project->image('design_page_images','default'),
                            $project->imageAltText('design_page_images')
                        ) }}
                    </a>

                    @php
                        $counter++;
                    @endphp

                </div>

                @if( $counter % 2 === 0 )

                    <div class="cf"></div>

                @endif

            @endforeach

    </div>

@endsection