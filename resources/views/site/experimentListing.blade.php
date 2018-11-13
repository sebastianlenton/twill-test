@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    <h1>Index:</h1>

    <p>
        This is a placeholder Experiments listing:
    </p>

    <ul>

        @foreach($items as $item)

            <li>

                {{ $item->title }}

            </li>

        @endforeach

    </ul>

@endsection