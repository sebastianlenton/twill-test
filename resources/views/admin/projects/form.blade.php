@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'project-page-view-fields', 'label' => 'Project Page View Fields'],
        ['fieldset' => 'index-page-view-fields', 'label' => 'Index Page View Fields'],
    ]
])

@section('contentFields')

    @formField('browser', [
        'label' => 'Project tags',
        'max' => 3,
        'name' => 'projecttags',
        'moduleName' => 'projecttags'
    ])

    @formField('date_picker', [
        'name' => 'publication_date',
        'label' => 'Publication date',
        'minDate' => '2018-12-01 12:00'
    ])

    {{-- <p>
        Add up to five images, that will be shown on the Design page. Images will rotate on hover. All images must be of the same dimensions, it is up to you to ensure dimensions are correct. Accepted formats: .jpg and .gif (TODO svg). This field is over-ridden if an URL is present in the 'Video' field. Note, when using animated gifs it is recommended that only one be uploaded.
    </p> --}}


    @formField('medias', [
        'name' => 'design_page_images',
        'label' => 'Design page image(s)',
        'note' => 'TODO image size validation.',
        'max' => 5
    ])


    {{-- <p>
        Add an image that will over-ride the above on mobile (optional).
    </p> --}}

    @formField('medias', [
        'name' => 'design_page_image_mobile',
        'label' => 'Design page image (mobile, optional)',
        'note' => 'TODO image size validation.',
        'max' => 1
    ])


    {{-- <p>
        Add a video URL. This will over-ride the above images. URL must be valid, or else the video embed will be broken on the front-end. Vimeo only at time of writing (7/11/2018)
    </p> --}}

    @formField('input', [
        'name' => 'video_url',
        'label' => 'Video URL (Vimeo only. TODO add support for YT etc)'
    ])

@stop



@section('fieldsets')

    <a17-fieldset title="Project Page View Fields" id="project-page-view-fields">

        @formField('medias', [
            'name' => 'project_page_image',
            'label' => 'Project page image',
            'note' => 'TODO image size validation.',
            'max' => 1
        ])

        @formField('medias', [
            'name' => 'project_page_image_mobile',
            'label' => 'Project page image (mobile, optional)',
            'note' => 'TODO image size validation.',
            'max' => 1
        ])

        @formField('wysiwyg', [
            'name' => 'project_page_description',
            'label' => 'Project page description text',
            'toolbarOptions' => ['list-unordered', 'link'],
            'placeholder' => 'Enter description...'
        ])

        @formField('wysiwyg', [
            'name' => 'project_page_collaborators',
            'label' => 'Project page collaborators',
            'toolbarOptions' => ['list-unordered', 'link'],
            'placeholder' => 'Enter collaborators...'
        ])

    </a17-fieldset>

@stop



@section('fieldsets')

    <a17-fieldset title="Index Page View Fields" id="index-page-view-fields">

        {{-- <p>
            Check the below to set the project as "undocumented" on the Index page listing.
        </p> --}}

        @formField('checkbox', [
            'name' => 'undocumented',
            'label' => 'Undocumented?'
        ])

        {{-- <p>
            Optional: add a specific image for the Index page listing.
        </p> --}}

        @formField('medias', [
            'name' => 'index_page_image',
            'label' => 'Index page image (optional)',
            'note' => 'TODO image size validation.',
            'max' => 1
        ])

        


    </a17-fieldset>

@stop
