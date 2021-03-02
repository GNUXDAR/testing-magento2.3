<?php
/*
	desde este controlador contiene los distintos tipos de salidas de un controlador
	salidas json -> json
	podemos hacer una redireccion a una web -> redirect
	
*/
//namespace Primer\Modulo\Modulo;
namespace Primer\Modulo\Controller\Outputs;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class index extends Action
{
	//salida json
	private $jsonResultFactory;

	public function __construct(Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory)
	{
		parent::__construct($context);
		$this->jsonResultFactory = $jsonResultFactory;
	}
	

	//Redirect
	/*
	private $redirectFactory;

	public function __construct(Context $context, \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
	{
		parent::__construct($context);
		$this->redirectFactory = $redirectFactory;
	}
	*/

    public function execute()
    {
    	//controllers con parametros por GET {host}/ejemplo/control/index/parametro1/5/parametro2/3/{params}/{value}
    	/*
    	$parametro1 = $this->getRequest()->getParam(key, "parametro1");
    	$parametro2 = $this->getRequest()->getParam(key, "parametro2");
    	echo "parametro1 => ($parametro1)";
    	*/

    	/*
    	$parametros = $this->getRequest()->getParams();
    	print_r($parametros);
    	echo "<br>";

    	//se muestra en la Ruta /{host}/ejemplo/control/index
        echo 'Controlador de magento 2.3.1 por arturocabrera.com';
        */

        //salida json con el constructor. {host}/ejemplo/control/index/
        $persona = ['Nombre' => 'Arturo', 'Apellido' => 'Cabrera', 'Edad' => 30, 'Profesion' => 'Software Developer'];
        $result = $this->jsonResultFactory->create();
        $result->setData($persona);

        return $result;
        

        //Redirect con el constructor
        /*
        $result = $this->redirectFactory->create();
        return $result->setUrl('https://arturocabrera.com');
        */
    }
}
