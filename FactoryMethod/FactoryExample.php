<?php
/**
 * Created by PhpStorm.
 * User: lcg
 * Date: 2020/10/21
 * Time: 16:54
 */

/**
 * 工厂模式
 * Interface IUser
 */
interface IUser
{
	function getName ();
}

class User implements IUser
{
	public function __construct ($id)
	{
	}

	public function getName ()
	{
		return "Luo";
	}
}

class UserFactory
{
	public static function Create ($id)
	{
		return new User($id);
	}
}

$test = UserFactory::Create(1);
echo($test->getName() . "\n");
