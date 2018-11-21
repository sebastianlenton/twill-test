@php
    
    $classAlign = '';

    if( $block->content['aligntoright'] ) {
        $classAlign = 'floatRight';
    }

@endphp

<div class="g g{{ $block->content['width'] }}-12 {{ $classAlign }}">

    @php
        if( $block->content['link'] ) {
            echo '<a href="' . $block->content['link'] . '">';
        }
    @endphp

        {{ ImageHelper::render(
            $block->image('imgfullwidth', 'desktop'),
            $block->imageAltText('imgfullwidth')
        ) }}

    @php
        if( $block->content['link'] ) {
            echo '</a>';
        }
    @endphp

    {{-- TODO mobile img override
        <img src="{{ $block->image('imgfullwidth-mobile', 'mobile') }}">
    --}}

    @if( isset( $block->content['caption'] ) )

        {!! $block->content['caption'] !!}

    @endif
    
</div>

@if( $block->content['endofrow'] || $block->content['aligntoright'] )

    <div class="cf"></div>

@endif



{{-- TODO implement padding top and bottom

    <p>
        {{ $block->content['paddingbottom'] }}<br>
    </p>

--}}