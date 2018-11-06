{{-- homepage --}}

@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    <!--info.blade.php-->



    <h1>{{ $company_name }}</h1>

    <p>{!! nl2br($office_address) !!}</p>

    <h2>Contact</h2>
    <p>
        {{ $telephone }}<br>
        {{ $email_address }}<br>
        {{ $twitter_handle }}
    </p>


    <img src="{{ $item[0]->image('main_image','default') }}" alt="{{ $item[0]->imageAltText('main_image') }}">

    {!! $item[0]->intro !!}

    {!! $item[0]->capabilities !!}

    <h2>Standards Manual</h2>

    <img src="{{ $item[0]->image('sm_image','default') }}" alt="{{ $item[0]->imageAltText('sm_image') }}">

    {!! $item[0]->intro_sm !!}

@endsection