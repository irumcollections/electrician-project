<?php
$routes = [
    'home' => 'JobController@index',
    'login' => 'UserController@login',
    'register' => 'UserController@register',
    'dashboard' => 'UserController@dashboard',
    'job_post' => 'JobController@create',
    'assign_technician' => 'JobController@assignTechnician',
    'complete_job' => 'JobController@complete',
];

return $routes;
