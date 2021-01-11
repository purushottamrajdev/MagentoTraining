<?php
namespace Espl\EsplPayment\Model\PaymentMethod;
/**
 * Pay In Store payment method model
 **/


 class EsplPayment extends \Magento\Payment\Model\Method\AbstractMethod
{
/**
* Payment code
*
* @var string
*/
protected $_code = 'EsplPayment';
/**
* Availability option
*
* @var bool
*/
protected $_isOffline = true;
}

?>