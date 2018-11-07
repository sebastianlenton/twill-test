{{-- this was in the admin blocks dir but it now prevents php artisan twill:blocks from running for some reason}}

@formField('browser', [
    //'routePrefix' => 'content',
    'moduleName' => 'projecttags',
    'name' => 'projecttags',
    'label' => 'Project Tags',
    'max' => 10
])