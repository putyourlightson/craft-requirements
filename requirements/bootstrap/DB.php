<?php
namespace Craft;

class DB
{
	public function getServerVersion()
	{
		return '5.1.0';
	}

	public function createCommand()
	{
		return $this;
	}

	public function setText()
	{
		return $this;
	}

	public function queryAll()
	{
		return array(
			array(
				'Engine' => 'innodb',
				'Support' => 'yes',
			)
		);
	}
}
