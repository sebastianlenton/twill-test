@php

    //get the experiment IDs from the browser field
    $experimentIDs = $block->browserIds('experiments');
    
    //get the experiment
    $experiments = app(\App\Models\Experiment::class)->find($experimentIDs);

@endphp

@foreach( $experiments as $experiment )

    <div class="g g{{ $block->input('experiment_preview_width') }}-12">

        {{-- TODO experiment links --}}
        <h2>
            {{ $experiment->title }}
        </h2>

        {{ $experiment->content }}

        @php

        //get the related experimentimages
        $experimentImgRelationship = $experiment->experimentimages();
        $expImgs = $experimentImgRelationship->get();

        @endphp

        {{ ImageHelper::render(
            $expImgs[0]->image('experiment_image','default'),
            $expImgs[0]->imageAltText('experiment_image')
        ) }}

    </div>

@endforeach