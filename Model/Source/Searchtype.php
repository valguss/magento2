<?php

namespace Craftyclicks\Clicktoaddress\Model\Source;

class Searchtype implements \Magento\Framework\Option\ArrayInterface
{
	/**
	* @return array
	*/
	public function toOptionArray()
	{
		return [
			['value' => 'searchbar_text', 'label' => __('SearchBar')],
			['value' => 'traditional', 'label' => __('Traditional')]
		];
	}
}
