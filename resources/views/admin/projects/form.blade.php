@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100,
        'required' => true,
    ])

    @formField('medias', [
        'name' => 'top',
        'label' => 'Top image',
        'note' => 'Minimum image width 1300px',
        'max' => 2
    ])

    {{-- Updated reference to repeater type in form --}}
    @formField('repeater', ['type' => 'accordion_items'])

    {{--@formField('repeater', [
      'name' => 'myRepeater',
      'type' => 'accordion_item']
    )--}}

    @formField('color', [
      'name' => 'main-color',
      'label' => 'Main color'
    ])

    @formField('block_editor')

    {{-- can't get this to work...
      @formField('repeater', ['type' => 'editor'])
    --}}

@stop

@section('fieldsets')

    <a17-fieldset title="Media" id="media">

        @formField('medias', [
            'name' => 'cover',
            'label' => 'Cover image',
            'note' => 'Minimum image width 1300px',
            'max' => 2
        ])

        @formField('medias', [
            'name' => 'testImages',
            'label' => 'Test images',
            'note' => 'These are test images',
        ])

    </a17-fieldset>

    @formField('input', [
      'name' => 'additionalRemark',
      'label' => 'Additional Remark',
      'maxlength' => 100
    ])

  {{-- can't get this to work...

    <a17-fieldset title="Videos" id="videos" :open="true">
        @formField('repeater', ['type' => 'quote'])
    </a17-fieldset>

  --}}

@stop