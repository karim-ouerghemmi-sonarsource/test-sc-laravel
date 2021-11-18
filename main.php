<?php

Route::get('test-secu/{evil_variable}', function ($evil_variable) {
    echo print_r(DB::table('users')->whereRaw('first_name = ' . $evil_variable . "'"), true);
});


$join->on('users.id', '=', 'role_user.user_id')
    ->whereRaw("role_user.active = true and role_user.instance_id = " . InstanceHelper::getInstanceId()
    . " AND role_user.role_id = '" . $_GET[1] . "'");

echo $_GET[1];