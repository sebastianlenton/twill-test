@extends('site.common.app')

@section('content')

    @php
    
        //\SebsCounter::inc();
        //\SebsCounter::inc();

//        \SebsCounter::inc( 45 );

//      echo \SebsCounter::get();

    @endphp

    <div class="gc">

        {!! $item[0]->renderBlocks() !!}

    </div>

@endsection