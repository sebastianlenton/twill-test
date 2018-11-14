@extends('site.common.app')

@section('content')

    @php

        die('count: ' . \SebsCounter::get());
        
        \SebsCounter::inc();
        \SebsCounter::inc();

        die('count: ' . \SebsCounter::get());
    @endphp

    <h1>{{ $item[0]->title }}</h1>

    <p>
        {{ $item[0]->description }}
    </p>

    {!! $item[0]->renderBlocks() !!}

@endsection