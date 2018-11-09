@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    

    {{ $item }}

    <h1>{{ $item->title }}</h1>
    
    @foreach( $item->tagData as $tag )

        <a href="/project/tag/{{ $tag['tagSlug'] }}">{{ $tag['tagName'] }}</a><br>
        <br>

    @endforeach


    <img src="{{ $item->image('project_page_image','default') }}">

    <img src="{{ $item->image('project_page_image_mobile','default') }}">    
    
    {!! $item->project_page_description !!}

    {!! $item->project_page_collaborators !!}

    {{-- {!! $item->renderBlocks(false) !!} --}}

@endsection