@formField('medias', [
    'name' => 'imgfullwidth',
    'label' => 'Image',
    'note' => 'TODO img size validation'
])

@formField('medias', [
    'name' => 'imgfullwidth-mobile',
    'label' => 'Image (mobile override)',
    'note' => 'TODO img size validation'
])

@formField('wysiwyg', [
    'name' => 'caption',
    'label' => 'Caption',
    'toolbarOptions' => ['link'],
    'placeholder' => 'Enter caption text...',
    'maxlength' => 400
])

@formField('input', [
    'name' => 'paddingtop',
    'label' => 'Padding Top (in px)',
    'note' => 'Enter a value between 45 and 250. Enter the number only.'
])

@formField('input', [
    'name' => 'paddingbottom',
    'label' => 'Padding Bottom (px)',
    'note' => 'Enter a value between 45 and 250. Enter the number only.'
])