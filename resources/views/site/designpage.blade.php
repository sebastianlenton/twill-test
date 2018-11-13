@extends('site.common.app')

@section('content')

    <h1>{{ $item[0]->title }}</h1>

    {{-- $item->getData() --}}

    <p>
        {{ $item[0]->description }}
    </p>

    {!! $item[0]->renderBlocks() !!}

@endsection