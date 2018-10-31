<div style="background: grey;overflow:hidden;">

    @foreach($block->children as $child)

        <div style="background:lightGrey;margin-bottom: 2rem;overflow:hidden;">

            <h2>{!! $child->content['header'] !!}</h2>

            <p>{!! $child->content['description'] !!}</p>

        </div>

    @endforeach

</div>