@extends('twill::layouts.form')

@section('contentFields')

    @formField('medias', [
        'name' => 'main_image',
        'label' => 'Main Image',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])

    @formField('WYSIWYG', [
        'name' => 'intro',
        'label' => 'Agency Introduction',
        'toolbarOptions' => ['list-unordered', 'link'],
    ])

    @formField('WYSIWYG', [
        'name' => 'capabilities',
        'label' => 'Agency Capabilities',
        'toolbarOptions' => ['list-unordered', 'link'],
    ])

    @formField('medias', [
        'name' => 'sm_image',
        'label' => 'Standards Manual Image',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])

    @formField('WYSIWYG', [
        'name' => 'intro_sm',
        'label' => 'Standards Manual Introduction',
        'toolbarOptions' => ['list-unordered', 'link'],
    ])

@stop