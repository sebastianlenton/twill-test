@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtitle (date, detail etc)',
        'maxlength' => 300
    ])

    @formField('WYSIWYG', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => ['link']
    ])
@stop
