@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100,
        'required' => true,
    ])

    @formField('repeater', [
      'name' => 'myRepeater',
      'type' => 'accordion_item']
    )

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