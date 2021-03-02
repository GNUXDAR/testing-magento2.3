<?php
/*
	desde este controlador podemos hacer una salida en formato json
	como uno de los: tipos de salidas de un controlador

	http://localhost:8002/salida-json/json/index
*/
namespace Primer\Modulo\Controller\Json;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class index extends Action
{
	private $jsonResultFactory;

	public function __construct(Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory)
	{
		parent::__construct($context);
		$this->jsonResultFactory = $jsonResultFactory;
	}
	
    public function execute()
    {
        $persona = ['Nombre' => 'Arturo', 'Apellido' => 'Cabrera', 'Edad' => 30, 'Profesion' => 'Software Developer fullStack'];
        $result = $this->jsonResultFactory->create();
        $result->setData($persona);

        return $result;    }
}