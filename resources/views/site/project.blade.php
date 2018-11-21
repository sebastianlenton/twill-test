@extends('site.common.app')

@section('content')

    <div class="gc">

        <div class="g g12-12">

            {{ ImageHelper::render(
                $item->image('project_page_image','default'),
                $item->imageAltText('project_page_image')
            ) }}

        </div>

        <div class="g g3-12">

            <h1>{{ $item->title }}</h1>

        </div>

        <div class="g g3-12">

            @php

                //get the tags
                $projectTagRelationship = $item->projecttags();
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

        <div class="g g2-12">

            {!! $item->project_page_description !!}

        </div>

        <div class="g g2-12 gp1">

            @php
                if( gettype($item->project_page_collaborators) === 'string' ) {
                    echo '<h2 class="italic">Collaborator credits</h2>';
                }
            @endphp

            {!! $item->project_page_collaborators !!}

        </div>

        {{--

            {{ $item->publication_date }}<br>
            {{ $item->undocumented }}<br>
            {{ $item->video_url }}<br>

            <p>
                Index page image:<br><img src="{{ $item->image('index_page_image','default') }}"> 
            </p>        

            <img src="{{ $item->image('project_page_image_mobile','default') }}">    

        --}}

        {!! $item->renderBlocks() !!}

    </div>

@endsection