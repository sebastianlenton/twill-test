@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Copy',
    'toolbarOptions' => ['link'],
    'placeholder' => 'Enter copy...'
])


@formField('input', [
    'name' => 'leftposition',                   //note this is actually a grid push- had to change it
    'label' => 'Left margin (cols)',
    'note' => 'Enter a value between 1 and 10.',
])

@formField('checkbox', [
    'name' => 'endofrow',
    'label' => 'End of row?'
])