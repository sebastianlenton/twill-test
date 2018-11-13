@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'seo_meta_description',
        'label' => 'Meta Description',
        'type' => 'textarea',
        'maxlength' => 160
    ])

@stop