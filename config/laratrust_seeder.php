<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',         
            'students' => 'c,r,u,d',      
            'payments' => 'c,r,u,d',      
            'fees' => 'c,r,u,d',
            'reports' => 'c,r,u,d',       // Generate and manage reports
        ],
        'parent' => [
            'students' => 'r',            // View student records
            'payments' => 'c,r',          // Make and view payments
        ],
        'teacher' => [
            'students' => 'r,u',          // View and update student records
                      ],
    ],

    /**
     * Map of permission abbreviations to their full names.
     */
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
