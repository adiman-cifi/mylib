<?php 
namespace jipajipa\mylib;
use jipajipa\mylib\Helper;
class Mylib {
	
	function run()
	{
		echo "JIPAJIPA MYLIB<br>";
		$object = new Helper();
		$object->run(); 
	}
}