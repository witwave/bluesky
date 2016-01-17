<?php

return [
	'brand' => ['BD', '其他'],
	'type' => ['花盒', '花束', '手捧花', '相框花', '盆栽', '其他'],
	'color' => ['红', '黄', '紫', '蓝', '粉', '绿', '金', '白', '其他'],
	'types'=>[
		0=>'普通会员',
		1=>'合作伙伴',
		2=>'内部人员',
		3=>'管理员',
	],
	'aplipay'=>[
		'pid'=>env('ALIPAY_PID', 'SomeRandomString'),
		'key'=>env('ALIPAY_KEY', 'SomeRandomString'),
		'seller_email'=>env('ALIPAY_KEY', 'SomeRandomString'),
		'return_url'=>env('ALIPAY_RETRUN', 'SomeRandomString'),
		'notify_url'=>env('ALIPAY_NOTIFY', 'SomeRandomString')
	]
];
