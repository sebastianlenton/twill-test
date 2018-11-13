@extends('site.common.app')

@section('content')

    <h1>{{ $item->title }}</h1>

    @include('site.partials.projectTagsList', [
        'projectTags' => $item->tagData
    ])

    {{ $item->publication_date }}<br>
    {{ $item->undocumented }}<br>
    {{ $item->video_url }}<br>

    <p>
        Index page image:<br><img src="{{ $item->image('index_page_image','default') }}">
    </p>

    <img src="{{ $item->image('project_page_image','default') }}">

    <img src="{{ $item->image('project_page_image_mobile','default') }}">    
    
    {!! $item->project_page_description !!}

    {!! $item->project_page_collaborators !!}

    {!! $item->renderBlocks() !!}

@endsection