@extends('site.common.app')

@section('content')

    <div class="gc">

        <div class="g g4-12">

            <h1>
                {{ $company_name }}
            </h1>

            <p>
                {!! nl2br($office_address) !!}
            </p>


            {{-- TODO this is the same text block as in footer --}}
            <h2>Contact</h2>

            <p>
                {{ $telephone }}<br>
                {{ $email_address }}<br>
                {{ $twitter_handle }}
            </p>

        </div>

        <div class="g g8-12 p0">

            <div class="g g12-12">
                
                <img src="{{ $item[0]->image('main_image', 'default') }}" alt="{{ $item[0]->imageAltText('main_image') }}">

            </div>

            <div class="cf"></div>

            <div class="g g4-12">

              {!! $item[0]->intro !!}  

            </div>

            <div class="g g6-12 gp2">

                <h2 class="italic">
                    Capabilities
                </h2>

                {!! $item[0]->capabilities !!}
              
            </div>

        </div>

        <div class="gc"></div>


        <div class="g g4-12">

            <h2>Team</h2>

        </div>

        <div class="g g8-12 p0">

            @php
                $counter = 0;
            @endphp

            @foreach($staffmembers as $staffmember)

                <div class="g g6-12 p0">
                    
                    <div class="g g12-12">
                        
                        <img src="{{ $staffmember->image('image', 'default') }}" alt="{{ $staffmember->imageAltText('image') }}">

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


        
        <div class="g g4-12">

            <h2>News</h2>

        </div>

        <div class="g g8-12 p0">

            <p>Newslinks TBI Newslinks TBI Newslinks TBI Newslinks TBI Newslinks TBI</p>

            @foreach($newslinks as $newslink)
            
                <p>
                    {{ $newslink->headline }}<br>
                    <a href="{{ $newslink->url }}" target="_blank">{{ $newslink->source }}</a>
                </p>

            @endforeach

        </div>

        <div class="cf"></div>



        <div class="g g4-12">

            <h2>Jobs</h2>

        </div>

        <div class="g g8-12 p0">

            @foreach($jobs as $job)

                <h3>
                    {{ $job->title }}<br>
                    {{ $job->subtitle }}
                </h3>

                <p>
                    {!! $job->description !!}
                </p>

            @endforeach

        </div>

        <div class="cf"></div>



        <div class="g g4-12">

            <h2>Standards Manual</h2>

        </div>

        <div class="g g8-12 p0">

            <div class="g g12-12">
            
                <img src="{{ $item[0]->image('sm_image', 'default') }}" alt="{{ $item[0]->imageAltText('sm_image') }}">

            </div>

            {!! $item[0]->intro_sm !!}

        </div>

        <div class="cf"></div>

        

    </div>

@endsection