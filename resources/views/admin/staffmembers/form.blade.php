@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'company_role',
        'label' => 'Job Title',
        'maxlength' => 200
    ])

    @formField('medias', [
        'name' => 'image',
        'label' => 'Team Member Image',
        'note' => 'Minimum image width: TODO ENTER WIDTH'
    ])

    @formField('wysiwyg', [
        'name' => 'bio',
        'label' => 'Biography',
        'toolbarOptions' => ['link'],
    ])

@stop