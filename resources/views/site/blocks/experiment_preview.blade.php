@php

    //get the experiment IDs from the browser field
    $experimentIDs = $block->browserIds('experiments');
    
    //get the experiment
    $experiments = app(\App\Models\Experiment::class)->find($experimentIDs);

@endphp

@foreach( $experiments as $experiment )

    <h2>{{ $experiment->title }}</h2>

    {{ $experiment->content }}

    @php

        //get the related experimentimages
        $experimentImgRelationship = $experiment->experimentimages();
        $expImgs = $experimentImgRelationship->get();

    @endphp

    @foreach( $expImgs as $expImg )

        <img src="{{ $expImg->image('experiment_image','default') }}">

    @endforeach

@endforeach

Width: {{ $block->input('experiment_preview_width') }}

<br><br><br>