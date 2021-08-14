<?php
return [
    'users' => [
        'gender' =>[
            "male" => 1,
            "female" => 0,

        ],
        'role' =>[
            "users" => 1,
            "admin" => 2,
        ],
    ],
    'products' =>[
        'status' =>[
            "Active" => 1,
            "Not Active" => 0,
        ]
    ],
    'invoice' => [
        'status' => [
            'cho_duyet' => 1,
            'dang_xu_ly' => 2,
            'dang_giao_hang' => 3,
            'da_giao_hang' => 4,
            'da_huy' => 5,
            'chuyen_hoan' => 6
        ]
    ],
    'contact'=> [
        'status' =>[
            'da_xem' => 1,
            'chua_xem' => 0,
        ]
    ]
]
?>
