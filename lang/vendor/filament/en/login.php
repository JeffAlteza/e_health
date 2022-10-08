<?php

return [

    'title' => 'Login',

    'heading' => 'Sign in to your account',

    'buttons' => [

        'submit' => [
            'label' => 'Sign in',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Email address',
        ],

        'password' => [
            'label' => 'Password',
        ],

        'remember' => [
            'label' => 'Remember me',
        ],

    ],

    'messages' => [
        'failed' => 'Email or Password is incorrect',
        'throttled' => 'Too many login attempts. Please try again in :seconds seconds.',
    ],

];