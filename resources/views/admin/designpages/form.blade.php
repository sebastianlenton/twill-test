@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'seo_attribs', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    
    @formField('block_editor', [
        'blocks' => ['project_preview', 'experiment_preview', 'news']
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