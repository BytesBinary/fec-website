<?php

return [
    'main_menu' => [
        // Homepage
        'home' => [
            'title' => 'Home',
            'route' => 'home',
            'isDropdown' => false,
        ],
        // Academics Page
        'academics' => [
            'title' => 'Academics',
            'route' => '',
            'isDropdown' => true,
            'dropdowns' => [
                'notices' => [
                    'title' => 'Notices',
                    'route' => 'notices'
                ],
                'library' => [
                    'title' => 'Library',
                    'route' => 'library'
                ],
                'student-statistics' => [
                    'title' => 'Student Statistics',
                    'route' => 'student-statistics'
                ],
            ]
        ],
        // Administration Page
        'administration' => [
            'title' => 'Administration',
            'route' => '',
            'isDropdown' => true,
            'dropdowns' => [
                'staff' => [
                    'title' => 'Principal',
                    'route' => 'principal'
                ],
                'dept-head-cse' => [
                    'title' => 'Department Head Of CSE',
                    'route' => 'dept-head-cse'
                ],
                'dept-head-eee' => [
                    'title' => 'Department Head Of EEE',
                    'route' => 'dept-head-eee'
                ],
                'dept-head-ce' => [
                    'title' => 'Department Head Of CE',
                    'route' => 'dept-head-ce'
                ],
            ]
        ],
        // Departments Page
        'departments' => [
            'title' => 'Departments',
            'route' => '',
            'isDropdown' => true,
            'dropdowns' => [
                'cse' => [
                    'title' => 'Computer Science & Engineering',
                    'route' => 'cse'
                ],
                'eee' => [
                    'title' => 'Electrical & Electronics Engineering',
                    'route' => 'eee'
                ],
                'ce' => [
                    'title' => 'Civil Engineering',
                    'route' => 'ce'
                ],
            ],
        ],
        // Activities Page
        'activities' => [
            'title' => 'Activities',
            'route' => '',
            'isDropdown' => true,
            'dropdowns' => [
                'publications' => [
                    'title' => 'Publications',
                    'route' => 'publications'
                ],
                'researches' => [
                    'title' => 'Researches',
                    'route' => 'researches'
                ],
                'events' => [
                    'title' => 'Events',
                    'route' => 'events'
                ],
            ]
        ],
        // Campus Life Page
        'campus-life' => [
            'title' => 'Campus Life',
            'route' => '',
            'isDropdown' => true,
            'dropdowns' => [
                'residence-cafeteria' => [
                    'title' => 'Residence & Cafeteria',
                    'route' => 'residence-cafeteria'
                ],
                'clubs' => [
                    'title' => 'Clubs',
                    'route' => 'clubs'
                ],
            ]
        ],
        // Admission Page
        'admission' => [
            'title' => 'Admission',
            'route' => 'admission',
            'isDropdown' => false,
        ],
        // Alumni Page
        'alumni' => [
            'title' => 'Alumni',
            'route' => 'alumni',
            'isDropdown' => false,
        ],
    ],
    'department' => [
        'cse' => [
            'about' => [
                'title' => 'About',
                'route' => 'dept.about',
                'isDropdown' => false,
            ],
            'events' => [
                'title' => 'Events',
                'route' => 'dept.events',
                'isDropdown' => false,
            ],
            'gallery' => [
                'title' => 'Gallery',
                'route' => 'dept.gallery',
                'isDropdown' => false,
            ],
            'academic-calender' => [
                'title' => 'Academic Calender',
                'route' => 'dept.academic-calender',
                'isDropdown' => false,
            ],
            'incourse-routine' => [
                'title' => 'Incourse Routine',
                'route' => 'dept.incourse-routine',
                'isDropdown' => false,
            ],
            'semester-routine' => [
                'title' => 'Semester Routine',
                'route' => 'dept.semester-routine',
                'isDropdown' => false,
            ],
            // 'semester-plan' => [
            //     'title' => 'Semester Plan',
            //     'route' => '',
            //     'isDropdown' => true,
            //     'dropdowns' => [
            //         'academic-calender' => [
            //             'title' => 'Academic Calender',
            //             'route' => 'academic-calender'
            //         ],
            //     ],
            // ],
            // 'routine' => [
            //     'title' => 'Routine',
            //     'route' => '',
            //     'isDropdown' => true,
            //     'dropdowns' => [
            //         'incourse-routine' => [
            //             'title' => 'Incourse Routine',
            //             'route' => 'incourse-routine',
            //         ],
            //         'semester-routine' => [
            //             'title' => 'Semester Routine',
            //             'route' => 'semester-routine',
            //         ]
            //     ]
            // ],
        ],
        'eee' => [
            'about' => [
                'title' => 'About',
                'route' => 'dept.about',
                'isDropdown' => false,
            ],
            'events' => [
                'title' => 'Events',
                'route' => 'dept.events',
                'isDropdown' => false,
            ],
            'gallery' => [
                'title' => 'Gallery',
                'route' => 'dept.gallery',
                'isDropdown' => false,
            ],
            'academic-calender' => [
                'title' => 'Academic Calender',
                'route' => 'dept.academic-calender',
                'isDropdown' => false,
            ],
            'incourse-routine' => [
                'title' => 'Incourse Routine',
                'route' => 'dept.incourse-routine',
                'isDropdown' => false,
            ],
            'semester-routine' => [
                'title' => 'Semester Routine',
                'route' => 'dept.semester-routine',
                'isDropdown' => false,
            ],
        ],
        'ce' => [
            'about' => [
                'title' => 'About',
                'route' => 'dept.about',
                'isDropdown' => false,
            ],
            'events' => [
                'title' => 'Events',
                'route' => 'dept.events',
                'isDropdown' => false,
            ],
            'gallery' => [
                'title' => 'Gallery',
                'route' => 'dept.gallery',
                'isDropdown' => false,
            ],
            'academic-calender' => [
                'title' => 'Academic Calender',
                'route' => 'dept.academic-calender',
                'isDropdown' => false,
            ],
            'incourse-routine' => [
                'title' => 'Incourse Routine',
                'route' => 'dept.incourse-routine',
                'isDropdown' => false,
            ],
            'semester-routine' => [
                'title' => 'Semester Routine',
                'route' => 'dept.semester-routine',
                'isDropdown' => false,
            ],
        ],
    ]
];
