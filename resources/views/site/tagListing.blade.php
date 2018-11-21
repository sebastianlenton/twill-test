@extends('site.common.app')

@section('content')

    <div class="gc">

        <div class="g g3-12">
            
            <h1>
                {{ $item->title }}
            </h1>

        </div>

        <div class="g g9-12 p0">

            @php
                $counter = 0;
            @endphp
            
            @foreach( $projects as $project )

                {{-- every second item gets a grid push --}}
                @php

                    $gpClass = '';

                    if( $counter % 2 === 1 ) {
                        $gpClass = 'gp1';
                    }

                @endphp

                <div class="g g5-12 {{ $gpClass }}">

                    <h2>{{ $project->title }}</h2>

                    {{ ImageHelper::render(
                        $project->image('design_page_images','default'),
                        $project->imageAltText('design_page_images')
                    ) }}

                    @php
                        $counter++;
                    @endphp

                </div>

                @if( $counter % 2 === 0 )

                    <div class="cf"></div>

                @endif

            @endforeach

        </div>

    </div>

@endsection