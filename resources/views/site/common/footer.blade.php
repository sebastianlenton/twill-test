<div class="cf"></div>

<div class="gc">

    {{-- TODO add this to the settings page --}}
    {{-- TODO write this properly so strings don't output as blank if not filled in --}}
    {{-- TODO add link for Google Maps link from footer --}}

    <div class="g g6-12 gBreakTablet">

        <p class="lowercase">
            <a href="/index">
                {{ $tagline }}
            </a>
        </p>

    </div>

    <div class="g g2-12 gBreakTablet">

        <p class="italic lowercase">
            Office
        </p>

        <p class="lowercase">
            <a href="https://goo.gl/maps/wuJJW8huKCL2" target="_blank" rel="noopener">
                {{ $office_address }}
            </a>
        </p>

    </div>

    <div class="g g2-12 gBreakTablet">

        <p class="italic lowercase">
            Contact
        </p>

        <p class="lowercase">
            <a href="tel:{{ $telephone }}">
                {{ $telephone }}
            </a>
            <br>
        
            <a href="mailto:{{ $email_address }}">
                {{ $email_address }}
            </a>
            <br>

            <a href="http://www.twitter.com/{{ $twitter_handle }}" target="_blank" rel="noopener">
                {{ '@' . $twitter_handle }}
            </a>
            <br>
        </p>

    </div>

    <div class="g g2-12 alignRight gBreakTablet">

        <a href="#">
            &uarr;
        </a>

    </div>

</div>
    