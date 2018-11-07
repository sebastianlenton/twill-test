@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'first_name',
        'label' => 'First Name',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'last_name',
        'label' => 'Last Name',
        'maxlength' => 200
    ])

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

    @formField('WYSIWYG', [
        'name' => 'bio',
        'label' => 'Biography',
        'toolbarOptions' => ['link'],
    ])

@stop