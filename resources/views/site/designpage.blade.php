@extends('site.common.app')

@section('content')
    
    @include('test.grid')

    @php
    
        \SebsCounter::inc();
        \SebsCounter::inc();

    @endphp

    <h1>{{ $item[0]->title }}</h1>

    <p>
        {{ $item[0]->description }}
    </p>

    {!! $item[0]->renderBlocks() !!}

@endsection