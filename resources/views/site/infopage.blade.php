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


    <img src="{{ $item[0]->image('main_image', 'default') }}" alt="{{ $item[0]->imageAltText('main_image') }}">

    {!! $item[0]->intro !!}

    {!! $item[0]->capabilities !!}


    <h2>Team</h2>

    @foreach($staffmembers as $staffmember)

        <img src="{{ $staffmember->image('image', 'default') }}" alt="{{ $staffmember->imageAltText('image') }}">
        
        <p>
            {{ $staffmember->first_name }}
            {{ $staffmember->last_name }}
            <br>
            {{ $staffmember->company_role }}
        </p>

        {!! $staffmember->bio !!}

    @endforeach


    <h2>News</h2>

    @foreach($newslinks as $newslink)
        
        <p>
            {{ $newslink->headline }}<br>
            <a href="{{ $newslink->url }}" target="_blank">{{ $newslink->source }}</a>
        </p>

    @endforeach


    <h2>Jobs</h2>

    @foreach($jobs as $job)

        <h3>
            {{ $job->title }}<br>
            {{ $job->subtitle }}
        </h3>

        <p>
            {!! $job->description !!}
        </p>

    @endforeach

    <h2>Standards Manual</h2>

    <img src="{{ $item[0]->image('sm_image', 'default') }}" alt="{{ $item[0]->imageAltText('sm_image') }}">

    {!! $item[0]->intro_sm !!}

@endsection