<?php
namespace Inchoo\Stripe\Block;

class Form extends \Magento\Payment\Block\Form\Cc
{
	protected $_template = 'form.phtml';
	//protected $_template = 'Inchoo_Stripe::form.phtml'; ?!
	
	public function hasSsCardType()
	{
		return false;
	}
		
}