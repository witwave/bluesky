<?php
return [
    //合作身份者id，以2088开头的16位纯数字。
    'partner_id' => env('ALIPAY_PID', 'SomeRandomString'),
    //卖家支付宝帐户。
    'seller_id' => env('ALIPAY_SELLER', 'SomeRandomString')
];
