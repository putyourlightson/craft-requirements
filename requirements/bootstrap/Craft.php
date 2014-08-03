<?php
namespace Craft;

class Craft
{
	public $db;

	function __construct()
	{
		$this->db = new DB;
	}

	public static function t($s, $vars = array())
	{
		$replace = array();

		foreach ($vars as $key => $value)
		{
			$replace[] = '{'.$key.'}';
		}

		return str_replace($replace, $vars, $s);
	}
}
