@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'seo_attribs', 'label' => 'SEO'],
    ]
])

@section('contentFields')

    @formField('medias', [
        'name' => 'main_image',
        'label' => 'Main Image',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])

    @formField('wysiwyg', [
        'name' => 'intro',
        'label' => 'Agency Introduction',
        'toolbarOptions' => ['list-unordered', 'link'],
    ])

    @formField('wysiwyg', [
        'name' => 'capabilities',
        'label' => 'Agency Capabilities',
        'toolbarOptions' => ['list-unordered', 'link'],
    ])

    @formField('medias', [
        'name' => 'sm_image',
        'label' => 'Standards Manual Image',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])

    @formField('wysiwyg', [
        'name' => 'intro_sm',
        'label' => 'Standards Manual Introduction',
        'toolbarOptions' => ['list-unordered', 'link'],
    ])

@stop

@section('fieldsets')
    
    <a17-fieldset title="SEO" id="seo_attribs">
        
        @formField('input', [
            'name' => 'seo_meta_description',
            'label' => 'Meta Description',
            'type' => 'textarea',
            'maxlength' => 160
        ])

    </a17-fieldset>

@stop