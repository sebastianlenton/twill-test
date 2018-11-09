@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Copy',
    'toolbarOptions' => ['link'],
    'placeholder' => 'Enter copy...'
])

@formField('input', [
    'name' => 'leftposition',
    'label' => 'Left Column Position',
    'note' => 'Enter a value between 1 and 11.',
])

@formField('checkbox', [
    'name' => 'endofrow',
    'label' => 'End of row?'
])