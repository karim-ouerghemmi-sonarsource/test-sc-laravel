<?php

Route::get('test-secu/{evil_variable}', function ($evil_variable) {
    echo print_r(DB::table('users')->whereRaw('first_name = ' . $evil_variable . "'"), true);
});