@extends('twill::layouts.form')

@section('contentFields')

    @formField('repeater', ['type' => 'experimentimages'])

    @formField('wysiwyg', [
        'name' => 'caption',
        'label' => 'Caption',
        'toolbarOptions' => ['link']
    ])
@stop