<?php

namespace Eway\Rapid\Model\Support;

use Eway\Rapid\Model\Customer;

/**
 * Trait HasCustomerTrait.
 *
 * @property Customer $Customer Customer details (name address token etc)
 */
trait HasCustomerTrait
{
	/**
	 * @param mixed $customer
	 *
	 * @return $this
	 */
	public function setCustomerAttribute($customer)
	{
		$this->validateInstance('Eway\Rapid\Model\Customer', 'Customer', $customer);

		return $this;
	}
}