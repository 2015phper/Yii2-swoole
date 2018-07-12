<?php

return [
    //swoole����������Ϣ
    'Server'        => [
        // swoole����ip
        'swoole_server_ip'          => '192.168.1.113',
        // swoole����http�����˿�
        'swoole_http_server_port'   => '9501',
        // swoole����socket�����˿�
        'swoole_socket_server_port' => '9502',
        //redis����ʹ��ip
        'redis_ip'                  => '127.0.0.1',
        //redis��������˿�
        'redis_port'                => '6379',
    ],
    //swoole���ò���
    'SwooleConfig'  => [
        'log_file' => './log/swoole.log',   //ָ��swoole������־�ļ�
        //'daemonize' => 1    //���ý���Ϊ�ػ����̣���ʹ��systemd�����ʱ��һ����Ҫ���ô˲�������������Ϊ0
    ],
    //�����ļ����ͺ�Content-Type��Ӧ��ϵ
    'ContentType'   => [
        'xml'   => 'application/xml,text/xml,application/x-xml',
        'json'  => 'application/json,text/x-json,application/jsonrequest,text/json',
        'js'    => 'text/javascript,application/javascript,application/x-javascript',
        'css'   => 'text/css',
        'rss'   => 'application/rss+xml',
        'yaml'  => 'application/x-yaml,text/yaml',
        'atom'  => 'application/atom+xml',
        'pdf'   => 'application/pdf',
        'text'  => 'text/plain',
        //'image' => 'image/png,image/jpg,image/jpeg,image/pjpeg,image/gif,image/webp,image/*',
        'png'   => 'image/png',
        'jpg'   => 'image/jpg',
        'jpeg'  => 'image/jpeg',
        'pjpeg' => 'image/pjpeg',
        'gif'   => 'image/gif',
        'webp'  => 'image/webp',
        'csv'   => 'text/csv',
        'html'  => 'text/html,application/xhtml+xml,*/*',
    ],
    //����������ļ�
    'DownloadType'  => [
        'xls'   => 'application/x-xls,application/vnd.ms-excel',
        'tgz'   => '',
        'zip'   => '',
    ],
    //��������������������
    'AccessArr'     => [
        'http://localhost:8080',
    ]
];
