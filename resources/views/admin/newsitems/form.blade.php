@extends('twill::layouts.form')

@section('contentFields')

    @formField('date_picker', [
        'name' => 'published_date',
        'label' => 'Publication date',
        'note' => 'Will be shown on the front-end.',
        'required' => true
    ])


    @formField('medias', [
        'name' => 'img_standard',
        'label' => 'News Story Image',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])


    @formField('medias', [
        'name' => 'img_mobile',
        'label' => 'News Story Image Mobile Override (optional)',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])


    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'News Story Content',
        'toolbarOptions' => [ 'link' ],
        'placeholder' => 'Enter news story content...',
        'editSource' => true,
    ])

    @formField('input', [
        'name' => 'width',
        'label' => 'Element Column Width',
        'type' => 'number',
        'note' => 'Enter element column width (between 1 & 12)',
        'min' => 12
    ])

@stop
