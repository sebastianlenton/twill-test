<div class="cf"></div>

</div>      {{-- break the outer gc --}}

{{ ImageHelper::render(
    $block->image('imgfullwidth', 'desktop'),
    $block->imageAltText('imgfullwidth')
) }}

{{-- <img src="{{ $block->image('imgfullwidth-mobile', 'mobile') }}"> --}}

@if( $block->content['caption'] )

    <div class="gc">

        <div class="g g2-12">

            {!! $block->content['caption'] !!}

        </div>

        <div class="cf"></div>

    </div>

@endif

{{--
    TODO implement padding top and bottom
    {{ $block->content['paddingtop'] }}
    {{ $block->content['paddingbottom'] }}
--}}

<div class="cf"></div>

<div class="gc">