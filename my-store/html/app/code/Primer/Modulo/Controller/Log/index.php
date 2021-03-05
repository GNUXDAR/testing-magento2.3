<?php
/*
    desde este controlador podemos hacer controlador para escribir mis log customizados

    http://localhost:8002/log/log/index/
*/
namespace Primer\Modulo\Controller\Log;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Psr\Log\LoggerInterface;

class index extends Action
{
	//salida json
	private $jsonResultFactory;

	public function __construct(Context $context, LoggerInterface $logger)
	{
		parent::__construct($context);
        $this->logger = $logger;
	}
	

    public function execute()
    {
        $this->logger->debug("Mensaje de debug desde el controlador");
        $this->logger->critical("Mensaje de critical desde el controlador");
        $this->logger->error("Mensaje de error desde el controlador");
        $this->logger->info("Mensaje de info desde el controlador");

        echo "log success";
    }
}
