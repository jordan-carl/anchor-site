<?php

return array(

	'default' => 'mysql',

	'fetch' => PDO::FETCH_OBJ,

	'connections' => array(

		'mysql' => array(
			'driver' => 'mysql',
			'hostname' => 'localhost',
			'post' => 3306,
			'username' => 'root',
			'password' => '',
			'database' => 'anchorsite',
			'charset' => 'utf8'
		)

	)
);