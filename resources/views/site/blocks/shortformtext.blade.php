@php
    $gpClass = '';
    if( isset( $block->content['leftposition'] ) ) {
        $gpClass = 'gp' . $block->content['leftposition'];
    }
@endphp

<div class="g g2-12 {{ $gpClass }}">
    {!! $block->content['content'] !!}
</div>

@php
    if( $block->content['endofrow'] ) {
        echo '<div class="cf"></div>';
    }
@endphp