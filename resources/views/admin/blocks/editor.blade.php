{{--
@formField('input', [
    'name' => 'editor',
    'type' => 'textarea',
    'label' => 'Editor text',
    'maxlength' => 250,
    'rows' => 4
])
--}}

@formField('wysiwyg', [
    'name' => 'editor',
    'label' => 'WYSIWYG Editor',
    'toolbarOptions' => ['list-ordered', 'list-unordered'],
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'note' => 'Test note',
])