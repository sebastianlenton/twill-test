@php

    //get the project ID from the browser field
    $projectsIDs = $block->browserIds('projects');
    
    //get the project
    $projects = app(\App\Models\Project::class)->find($projectsIDs);

@endphp

@foreach( $projects as $project )

    <h2>{{ $project->title }}</h2>
    <img src="{{ $project->image('design_page_images','default') }}">

@endforeach

Width: {{ $block->input('project_preview_width') }}

<br><br><br>