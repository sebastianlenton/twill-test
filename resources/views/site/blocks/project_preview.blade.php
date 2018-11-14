@php

    //get the project ID from the browser field
    $projectsIDs = $block->browserIds('projects');
    
    //get the project
    $projects = app(\App\Models\Project::class)->find($projectsIDs);

@endphp

@foreach( $projects as $project )

    <h2><a href="/project/{{ $project->slug }}">{{ $project->title }}</a></h2>

    @php

        //get the tags
        $projectTagRelationship = $project->projecttags();
        $projectTags = $projectTagRelationship->get();

    @endphp

    <ul>

        @foreach( $projectTags as $projectTag )

            <li>
                <a href="/tagged/{{ $projectTag->slug }}">{{ $projectTag->title }}</a>
            </li>

        @endforeach

    </ul>

    <img src="{{ $project->image('design_page_images','default') }}">

@endforeach

Width: {{ $block->input('project_preview_width') }}

<br><br><br>