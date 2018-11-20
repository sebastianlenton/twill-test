@extends('site.common.app')

@section('content')

    @php
    
        //\SebsCounter::inc();
        //\SebsCounter::inc();

    @endphp

    <div class="gc">

        {!! $item[0]->renderBlocks() !!}

    </div>

@endsection