@extends('site.common.app')

@section('content')

    <h1>Project tag: {{ $item->title }}</h1>

    <p>
        This is a placeholder Project tag page.
    </p>

    @foreach( $projects as $project )

        <h2>{{ $project->title }}</h2>

        <img src="{{ $project->image('design_page_images', 'default') }}">

    @endforeach

@endsection