@formField('browser', [
    'routePrefix' => 'designpages',
    'moduleName' => 'newsitems',
    'name' => 'newsitems',
    'label' => 'News story'
])

@formField('input', [
    'name' => 'news_width',
    'label' => 'Column width (1-12)',
    'type' => 'number',
    'maxlength' => 2
])

@formField('checkbox', [
    'name' => 'row_end',
    'label' => 'Force row end?'
])