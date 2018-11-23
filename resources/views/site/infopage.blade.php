@extends('site.common.app')

@section('content')

    <div class="gc">

        <div class="g g4-12 gBreakTablet">

            <h1 class="italic">
                Office
            </h1>

            <p>
                {!! nl2br($office_address) !!}
            </p>


            {{-- TODO this is the same text block as in footer --}}
            <h2 class="italic">
                Contact
            </h2>

            <p>
                {{ $telephone }}<br>
                {{ $email_address }}<br>
                {{ $twitter_handle }}
            </p>

        </div>



        <div class="g g8-12 p0 gBreakTablet">

            <div class="g g12-12">

                {{ ImageHelper::render(
                    $item[0]->image('main_image', 'default'),
                    $item[0]->imageAltText('main_image')
                ) }}

            </div>

            <div class="cf"></div>

            <div class="g g3-12 gBreakTablet">

              {!! $item[0]->intro !!}  

            </div>

            <div class="g g6-12 gp3 gBreakTablet">

                <h2 class="italic">
                    Capabilities
                </h2>

                {!! $item[0]->capabilities !!}
              
            </div>

        </div>

        <div class="gc"></div>



        <div class="g g4-12 gBreakTablet">

            <h2 class="italic">
                Team
            </h2>

        </div>

        <div class="g g8-12 p0 gBreakTablet">

            @php
                $counter = 0;
            @endphp

            @foreach($staffmembers as $staffmember)

                <div class="g g6-12 p0 gBreakTablet">
                    
                    <div class="g g12-12">

                        {{ ImageHelper::render(
                            $staffmember->image('image', 'default'),
                            $staffmember->imageAltText('image')
                        ) }}

                    </div>
                    
                    <div class="g g6-12">
                
                        <h3>
                            {{ $staffmember->title }}
                            <br>
                            {{ $staffmember->company_role }}
                        </h3>

                        {!! $staffmember->bio !!}

                    </div>

                </div>

                @php
                    $counter++;
                @endphp

                @if( $counter % 2 === 0 )

                    <div class="cf"></div>
    
                @endif

            @endforeach

        </div>

        <div class="cf"></div>
        
        <div class="g g4-12 gBreakTablet">

            <h2 class="italic">
                News
            </h2>

        </div>

        <div class="g g8-12 p0 gBreakTablet">

            <ul>

                @php
                    $counter = 0;
                @endphp

                @foreach($newslinks as $newslink)
                
                    {{-- every second item gets a grid push --}}
                    @if( $counter % 2 === 1 )
                        <li class="g g5-12 gp1 gBreakTablet">
                    @else
                        <li class="g g5-12 gBreakTablet">
                    @endif

                        {{ $newslink->title }}<br>
                        <a href="{{ $newslink->url }}" target="_blank">{{ $newslink->source }}</a>
                        
                    </li>

                    @php
                        $counter++;
                    @endphp

                    @if( $counter % 2 === 0 )

                        <div class="cf"></div>
    
                    @endif


                @endforeach

            </ul>

        </div>

        <div class="cf"></div>



        <div class="g g4-12 gBreakTablet">

            <h2 class="italic">
                Jobs
            </h2>

        </div>

        <div class="g g8-12 p0 gBreakTablet">

            @php
                $counter = 0;
            @endphp

            @foreach($jobs as $job)

                {{-- every second item gets a grid push 1 --}}
                    @if( $counter % 2 === 1 )
                        <div class="g g3-12 gp3 gBreakTablet">
                    @else
                        <div class="g g3-12 gBreakTablet">
                    @endif

                    <h3>
                        {{ $job->title }}<br>
                        {{ $job->subtitle }}
                    </h3>

                    <p>
                        {!! $job->description !!}
                    </p>    
                </div>

                @php
                    $counter++;
                @endphp

                @if( $counter % 2 === 0 )

                    <div class="cf"></div>

                @endif

            @endforeach

        </div>

        <div class="cf"></div>



        <div class="g g4-12 gBreakTablet">

            <h2>
                Standards Manual
            </h2>

        </div>

        <div class="g g8-12 p0 gBreakTablet">

            <div class="g g12-12">

                {{ ImageHelper::render(
                    $item[0]->image('sm_image', 'default'),
                    $item[0]->imageAltText('sm_image')
                ) }}

            </div>

            <div class="g g12-12">

                {!! $item[0]->intro_sm !!}

            </div>

        </div>

        <div class="cf"></div>

        

    </div>

@endsection