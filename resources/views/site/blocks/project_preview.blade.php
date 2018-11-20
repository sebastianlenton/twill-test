@php

    //get the project ID from the browser field
    $projectsIDs = $block->browserIds('projects');
    //get the project
    $projects = app(\App\Models\Project::class)->find($projectsIDs);

@endphp

@foreach( $projects as $project )

    <div class="g g{{ $block->input('project_preview_width') }}-12">

        <h2>
            <a href="/project/{{ $project->slug }}">
                {{ $project->title }}
            </a>
        </h2>


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


        <div class="cf"></div>

        <a href="/project/{{ $project->slug }}">
            {{ ImageHelper::render(
                $project->image('design_page_images','default'),
                $project->imageAltText('design_page_images')
            ) }}
        </a>

    </div>

@endforeach