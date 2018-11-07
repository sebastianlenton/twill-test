@extends('twill::layouts.form')

@section('contentFields')

    <a17-fieldset title="Design Page View Fields" id="design-page-view-fields">

        <p>
            Add up to five images, that will be shown on the Design page. Images will rotate on hover. All images must be of the same dimensions, it is up to you to ensure dimensions are correct. Accepted formats: .jpg and .gif (TODO svg). This field is over-ridden if an URL is present in the 'Video' field. Note, when using animated gifs it is recommended that only one be uploaded.
        </p>

        @formField('medias', [
            'name' => 'design_page_images',
            'label' => 'Design page image(s)',
            'note' => 'TODO image size validation.',
            'max' => 5
        ])

        <p>
            Add an image that will over-ride the above on mobile (optional).
        </p>

        @formField('medias', [
            'name' => 'design_page_images_mobile',
            'label' => 'Design page image (mobile, optional)',
            'note' => 'TODO image size validation.',
            'max' => 1
        ])

        <p>
            Add a video URL. This will over-ride the above images. URL must be valid, or else the video embed will be broken on the front-end. Vimeo only at time of writing (7/11/2018)
        </p>

        @formField('input', [
            'name' => 'video_url',
            'label' => 'Video URL (Vimeo only. TODO add support for YT etc)'
        ])

    </a17-fieldset>

    <a17-fieldset title="Index Page View Fields" id="design-page-view-fields">

        <p>
            Optional: add a specific image for the Index page listing.
        </p>

        @formField('medias', [
            'name' => 'index_page_image',
            'label' => 'Index page image (optional)',
            'note' => 'TODO image size validation.',
            'max' => 1
        ])

        <p>
            Check the below to set the project as "undocumented" on the Index page listing.
        </p>

        @formField('checkbox', [
            'name' => 'documented',
            'label' => 'Documented?'
        ])

    </a17-fieldset>

@stop