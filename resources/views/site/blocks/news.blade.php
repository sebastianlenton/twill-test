@php

    //get the project ID from the browser field
    $newsIDs = $block->browserIds('newsitems');
    
    //get the news item
    $newsItems = app(\App\Models\Newsitem::class)->find($newsIDs);

@endphp

@if( count( $newsItems ) >= 1 )

    @foreach( $newsItems as $newsItem )

        @php

            $classAlign = '';

            if(\LeftRight::get() == 'left') {
                echo '<div class="cf"></div>';
            } else {
                $classAlign = 'floatRight';
            }

            \LeftRight::step();
            
        @endphp

        <div class="g g{{ $block->input('news_width') }}-12 p0 {{ $classAlign }} gBreakTablet">

            <div class="g g12-12">

                {{-- TODO add news filter tag --}}
                <h2>
                    {{ \Carbon\Carbon::parse($newsItem->published_date)->format('d F, Y')}}
                </h2>

                @if( $newsItem->link )
                    <a href="{{ $newsItem->link }}">
                @endif

                    {{ ImageHelper::render(
                        $newsItem->image('img_standard','default'),
                        $newsItem->imageAltText('experiment_image')
                    ) }}

                @if( $newsItem->link )
                    </a>
                @endif

            </div>

            {{-- TODO this is a problem- in a dynamic context, these grids aren't nestable without further calculations. maybe do a completely vw-based grid? --}}
            <div class="g g12-12">

                {!! $newsItem->content !!}

            </div>

        </div>

    @endforeach

@endif