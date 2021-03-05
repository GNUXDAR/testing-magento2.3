<?php
/*
	plugin creado con el methodo after
	cuandos e loguee en el admin manda un mensaje
*/

namespace Primer\Modulo\Plugin;

class AuthPlugin
{
	public function afterLogin(\Magento\Backend\Model\Auth $subject, $result, $username, $password)
	{

		//echo '<script>alert("Tu usario es: '.$username.' \n Tu contraseña es: '.$password.'");</script>';
		echo "Tu usario es: $username <br> Tu contraseña es: $password <br>";
		echo "custom plugin output";
		//die();
	}
}