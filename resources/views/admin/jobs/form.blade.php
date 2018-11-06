@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtitle (date, detail etc)',
        'maxlength' => 300
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'type' => 'textarea'
    ])
@stop
