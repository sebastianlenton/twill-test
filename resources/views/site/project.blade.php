@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    {{ $item }}

    <h1>{{ $item->title }}</h1>

    <img src="{{ $item->image('top','default') }}">

    {{-- I think this will return null if there's no img, due to the true at the end --}}
    {{ $item->image('norole','nocrop', false, true) }}

    <img width="400" height="400" src="{{ $item->lowQualityImagePlaceholder('top','default') }}">


    
    <p>{{ $item->description }}</p>

    {!! $item->renderBlocks(false) !!}

    <pre>
    <?php
        //print_r( $item->testFunction() );

        //print_r( $item->attributes );
        //print_r( $item->attributes['description'] );
        //print_r( $item );

        //print_r( $item );
        //print_r( $item['attributes'] );
        //print_r( $item['original'] );
        //print_r( $item->original );
    ?>
    </pre>

@endsection