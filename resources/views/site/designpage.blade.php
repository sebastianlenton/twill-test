{{-- homepage --}}

@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    design.blade.php

    <h1>{{ $item[0]->title }}</h1>

    {{-- $item->getData() --}}

    <p>
        {{ $item[0]->description }}
    </p>

@endsection