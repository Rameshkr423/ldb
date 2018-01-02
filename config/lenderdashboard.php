<?php

return [
	'login' => [
		'url' => sprintf('%s/login',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1'))
	],
	'permission' => [
		'url' => [
			'permissionList' => sprintf('%s/permission/list',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'permissionAdd' => sprintf('%s/permission',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'permissionGet' => sprintf('%s/permission/read',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1'))
		]
	],
	'role' => [
		'url' => [
			'roleList' => sprintf('%s/role/list',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'roleGet' => sprintf('%s/role/read',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'roleEdit' => sprintf('%s/role',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
		]
	],
	'executive' => [
		'url' => [
			'executiveList' => sprintf('%s/executive/list',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'roleLender' => sprintf('%s/role/lender',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'executiveAdd' => sprintf('%s/executive',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'executiveEdit' => sprintf('%s/executive/read',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
		]
	],
	'transaction' => [
		'url' => [
			'transactionCount' => sprintf('%s/gettransactioncount',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'transaction' => sprintf('%s/gettransactions',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'statusUpdate' => sprintf('%s/status/update',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'userDetails' => sprintf('%s/getuserdetails',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
			'uploadFile' => sprintf('%s/uploadFile',env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1')),
		]
	],
	'export' => [
		'url' => sprintf('%s/getExportCollections', env('DATA_LAYER_URL', 'http://cg-datalayer.dev/api/v1'))
	],
	'header' => [
		'login' => ['api-version' => 'v1']
	]
];