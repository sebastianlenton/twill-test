<div style="background:pink;margin-bottom:2rem;">

    <img src="{{ $block->image('imgfullwidth', 'desktop') }}">

    <img src="{{ $block->image('imgfullwidth-mobile', 'mobile') }}">

    <p><a href="{{ $block->content['link'] }}">Link</a></p>

    <p>
        {{ $block->content['width'] }}<br>
        {{ $block->content['endofrow'] }}<br>
        {{ $block->content['aligntoright'] }}<br>
        {{ $block->content['paddingbottom'] }}<br>
    </p>

    {!! $block->content['caption'] !!}

</div>