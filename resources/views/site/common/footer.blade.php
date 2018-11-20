<div class="gc">

    {{-- TODO add this to the settings page --}}
    {{-- TODO write this properly so strings don't output as blank if not filled in --}}

    <div class="g g3-12">

        <p class="lowercase">
            <a herf="/index">
                Everything is in order
            </a>
        </p>

    </div>

    <div class="g g2-12">

        <p class="italic lowercase">
            Office
        </p>

        <p class="lowercase">
            {{ $office_address }}
        </p>

    </div>

    <div class="g g2-12">

        <p class="italic lowercase">
            Contact
        </p>

        <p class="lowercase">
            {{ $telephone }}
            <br>
        
            <a href="mailto:{{ $email_address }}">
                {{ $email_address }}
            </a>
            <br>

            <a href="http://www.twitter.com/{{ $twitter_handle }}">
                {{ '@' . $twitter_handle }}
            </a>
            <br>
        </p>

    </div>

    

</div>
    