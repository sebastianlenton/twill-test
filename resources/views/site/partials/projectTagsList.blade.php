@if (!is_null($projectTags) && count($projectTags) > 0)

    @foreach($projectTags as $projectTag)

        @if (!empty($projectTag["tagName"]) && !empty($projectTag["tagSlug"]))

            <ul>
                <li>
                    <a href="{{ $projectTag["tagSlug"] }}">
                        {{ $projectTag["tagName"] }}
                    </a>
                </li>
            </ul>

        @endif

    @endforeach

@endif