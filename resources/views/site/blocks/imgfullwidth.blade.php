<div style="background:limegreen;margin-bottom:2rem;">

    <img src="{{ $block->image('imgfullwidth', 'desktop') }}">

    <img src="{{ $block->image('imgfullwidth-mobile', 'mobile') }}">

    {!! $block->content['caption'] !!}
    {{ $block->content['paddingtop'] }}
    {{ $block->content['paddingbottom'] }}

</div>