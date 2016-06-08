<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/17
 * Time: 下午4:07
 */
return [
    'access_key' => '3RGrMQh5KUseNAC7JzUkADp28fm07nN5Ymz7_19Z',
    'secret_key' => 'Ou2AnQMcGuSFCB_e8rcbd3H3khOI1e9_KmqH8Ecz',
    'url' => [
        'kdt-cloud' => 'http://dl.koudaitong.com/'
    ],
    'bucket' => [
        'kdt_img_test' => [
            'name' => 'kdt_img_test',
            'domain' => 'dn-kdt-img-test.qbox.me',
            'public' => TRUE,
            'save_key' => 'upload_files/$(year)/$(mon)/$(day)/$(etag)$(ext)',
            'fop' => [
                'thumbnails' => '!100x100.jpg',
                '100x100' => '?imageView2/2/w/100/h/100',
                '8k' => '!8k.mp3'
            ],
            'expires' => 60 * 60
        ],
        'kdt-test-private' => [
            'name' => 'kdt-test-private',
            'domain' => 'dn-kdt-test-private.qbox.me',
            'public' => FALSE,
            'save_key' => '$(bucket)-$(year)-$(mon)-$(day)-$(etag)$(ext)',
            'fop' => [
                'thumbnails' => '!100x100.jpg',
                '100x100' => '?imageView2/2/w/100/h/100',
                '8k' => '!8k.mp3'
            ],
            'expires' => 10 * 60
        ],
        'kdt-app-private' => [
            'name' => 'kdt-app-private',
            'domain' => 'dn-kdt-app-private.qbox.me',
            'public' => FALSE,
            'save_key' => '$(bucket)-$(year)-$(mon)-$(day)-$(etag)$(ext)',
            'fop' => [
                'thumbnails' => '!100x100.jpg',
                '100x100' => '?imageView2/2/w/100/h/100',
                '8k' => '!8k.mp3'
            ],
            'expires' => 10 * 60
        ],
    ],
    'callback_url' => 'http://www-test.koudaitong.com/v2/common/qiniu/upload.json',
    'scope' => [
        'public' => 'kdt_img_test',
        'private' => 'kdt-test-private',
    ]
];
