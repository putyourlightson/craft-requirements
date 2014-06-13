<?php
namespace Craft;

class Craft
{
	public $db;

	function __construct()
	{
		$this->db = new DB;
	}

	public static function t($s)
	{
		return $s;
	}
}
