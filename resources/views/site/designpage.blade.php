{{-- homepage --}}

@extends('site.common.app')

@section('content')

    design.blade.php

    <h1>{{ $item[0]->title }}</h1>

    {{-- $item->getData() --}}

    <p>
        {{ $item[0]->description }}
    </p>

@endsection