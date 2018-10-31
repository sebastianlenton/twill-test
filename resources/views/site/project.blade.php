@extends('site.common.app')

@include('site.common.navigation')

@section('content')

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