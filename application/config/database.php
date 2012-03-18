<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'benchmark'  => TRUE,
		'persistent' => TRUE,
		'type'       => 'postgresql',
		'connection' => array(
			'type'       => 'postgresql',
			'hostname'   => 'localhost',
			'port'       => 5432,
			'database'   => 'kohana',
			'username'   => 'kohana',
			'password'   => 'kohana',
			'socket'     => FALSE,
		),
		'primary_key'  => 'id',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
		'escape'       => TRUE,
	),
);