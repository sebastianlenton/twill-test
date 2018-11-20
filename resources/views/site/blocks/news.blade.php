@php

    //get the project ID from the browser field
    $newsIDs = $block->browserIds('newsitems');
    
    //get the news item
    $newsItems = app(\App\Models\Newsitem::class)->find($newsIDs);

@endphp

@foreach( $newsItems as $newsItem )

    <div class="g g{{ $block->input('news_width') }}-12 p0">

        <div class="g g12-12">

            {{-- TODO add news filter tag --}}
            <h2>
                {{ \Carbon\Carbon::parse($newsItem->published_date)->format('d F, Y')}}
            </h2>

            <img src="{{ $newsItem->image('img_standard','default') }}">

        </div>

        {{-- TODO this is a problem- in a dynamic context, these grids aren't nestable without further calculations. maybe do a completely vw-based grid? --}}
        <div class="g g12-12">

            {!! $newsItem->content !!}

        </div>

    </div>

@endforeach