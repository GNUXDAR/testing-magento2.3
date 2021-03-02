<?php
/*
	desde este controlador podemos hacer una redireccion a una web
	como uno de los: tipos de salidas de un controlador

	http://localhost:8002/redireccion/redirect/index
*/
//namespace Primer\Modulo\Modulo;
namespace Primer\Modulo\Controller\Redirect;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class index extends Action
{

	//Redirect
	private $redirectFactory;

	public function __construct(Context $context, \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
	{
		parent::__construct($context);
		$this->redirectFactory = $redirectFactory;
	}

    public function execute()
    {

        //Redirect con el constructor
        $result = $this->redirectFactory->create();
        return $result->setUrl('https://arturocabrera.com');

    }
}
