@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'source',
        'label' => 'Source',
        'maxlength' => 300
    ])

    @formField('input', [
        'name' => 'url',
        'label' => 'URL'
    ])
@stop
