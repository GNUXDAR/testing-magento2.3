<?php
/*
	plugin creado con el methodo before
	agrega 10 productos cuando se elija un producto de la tienda
*/

namespace Primer\Modulo\Plugin;

class CartPlugin
{
	public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo = null)
	{
		$requestInfo['qty'] = $requestInfo['qty'] * 2;
		return [$productInfo, $requestInfo];
	}
}