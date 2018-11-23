@extends('site.common.app')

@include('site.common.navigation')

@section('content')

    <div class="gc">
        
        <div class="g g12-12">

            <h1>
                Experiments
            </h1>

            <p>
                This page is yet to be implemented. This is a placeholder Experiments listing.
                <br><br><br><br><br><br><br><br><br><br>
            </p>

            <ul>

                @foreach($items as $item)

                    <li>

                        {{ $item->title }}

                    </li>

                @endforeach

            </ul>

        </div>

    </div>

@endsection