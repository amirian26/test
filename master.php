<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 7/8/18
 * Time: 12:03 PM
 */

$client_id = "2051121e4348af52664cf7de0bda";
$config = [
    'business_id' => '414',
    'tree' => [
        'root' => '300',
        'rootName' => 'دسته بندی پیش فرض',

        'business' => '81',
        'product' => '82',
        'collection' => '681',
        'competition' => '165'
    ],
    "full_access_users" => [
        2051,
        5964,
        2191,
	17188,
	6926,
        209,
        186,
        165,
        140,
        277,
        185,
        18070,
        83194
    ],
    "elasticIndex" => "sample7_avand_index",
    "elasticNode" => "sample7_avand_node",
    "service" => "http://sandbox.pod.ir/srv/basic-platform/",
    'core' => 'http://sandbox.pod.ir:8080',
    "sso" => "https://accounts.pod.ir/oauth2/",
    "sso_service" => "https://accounts.pod.ir/",
    "client_id" => $client_id,
    "client_secret" => "6afed34f",
    "api_token" => "ccc21f1fe143424a94cf855c9495a7c1",
    'templates' => [
    "client_id" => $client_id,
    'logo' => '/images/logo/fanap.png',
    'logoLink' => 'https://fanap.ir',
    'supportNumber' => '021-89514142',
    'customCss' => '',
    'title' => 'آوند',
    'description' => 'آوند',
    'keywords' => 'آوند',
    'intro' => '/intro/ifanap.test.json',
    'icons' => [
        'icon1' => [
            'name' => "ارتباطات",
            'icon' => "icon_megaphone",
            'url' => "#",
            'children' =>[
                'icon1' => [
                    'name' => "ایمیل",
                    'icon' => "icon_opened-email-envelope",
                    'url' => "https://accounts.pod.ir/oauth2/authorize/?response_type=code&redirect_uri=https%3A%2F%2Fmail.fanap.ir%2Fpublic%2Fpreauth.jsp&client_id=1d796d4286ac4c84aec7abv0&prompt=none",
                ],
                'icon2' => [
                    'name' => "گفتگو",
                    'icon' => "icon_speech_bubble",
                    'url' => "/chat",
                ],
            ]
        ],
        'icon2' => [
            'name' => "رویداد ها",
            'icon' => "icon_wall-calendar-with-lines",
            'url' => "/events",
        ],
        'icon3' => [
            'name' => "پیشخوان",
            'icon' => "icon_meeting",
            'url' => "/pishkhan",
        ],
        'icon4' => [
            'name' => "پرتال سازمانی",
            'icon' => "icon_four-squares",
            'url' => "#",
            'children' =>[
                'icon2' => [
                    'name' => "سامانه یکپارچه فناپ",
                    'icon' => "icon_fanap_logo",
                    'url' => "https://e.fanap.ir",
                ]
            ]
        ],
    ],
]
];