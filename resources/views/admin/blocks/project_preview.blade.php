@formField('browser', [
    'routePrefix' => 'designpages',
    'moduleName' => 'projects',
    'name' => 'projects',
    'label' => 'Project preview'
])

@formField('input', [
    'name' => 'project_preview_width',
    'label' => 'Column width (1-12)',
    'type' => 'number',
    'maxlength' => 2
])

@formField('checkbox', [
    'name' => 'row_end',
    'label' => 'Force row end?'
])