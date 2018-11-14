

@php

    //get the project ID from the browser field
    $newsIDs = $block->browserIds('newsitems');
    
    //get the news item
    $newsItems = app(\App\Models\Newsitem::class)->find($newsIDs);

@endphp

@foreach( $newsItems as $newsItem )

    <h2>{{ $newsItem->title }}</h2>

    {!! $newsItem->content !!}

    <img src="{{ $newsItem->image('img_standard','default') }}">

@endforeach

Width: {{ $block->input('news_width') }}

<br><br><br>