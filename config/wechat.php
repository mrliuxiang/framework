<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

return [
    // 微信开放平台接口
    'service_url' => 'https://framework.thinkadmin.top',
    // 小程序支付参数
    'miniapp'     => [
        'appid'     => 'wx6bb7b70258da09c6',
        'appsecret' => 'd47a7394a7b69c7180bd11ec8d55d234',
        'mch_id'    => '1332187001',
        'mch_key'   => 'A82DC5BD1F3359081049C568D8502BC5',
        'ssl_p12'   => __DIR__ . '/cert/1332187001_20181030_cert.p12',
    ],
];