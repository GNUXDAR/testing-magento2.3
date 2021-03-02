<?php
/*
	desde este controlador podemos hacer una salida de un mensjae y con parametros
	como uno de los: tipos de salidas de un controlador

	http://localhost:8002/hola-mundo/hola/index/
	http://localhost:8002/hola-mundo/hola/index/param1/valor1/parem2/valor2
*/
//namespace Primer\Modulo\Modulo;
namespace Primer\Modulo\Controller\Hola;

use Magento\Framework\App\Action\Action;

class index extends Action
{
    public function execute()
    {

    	//se muestra en la Ruta /{host}/hola-mundo/hola/index
        echo 'HolaMundo <br>Controlador de magento 2.3.1 por arturocabrera.com <br>';

        //se muestra en la Ruta /{host}/hola-mundo/hola/index/param1/valor1/param2/valor2...
    	$parametros = $this->getRequest()->getParams();
    	print_r($parametros);

    }
}
