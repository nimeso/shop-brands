<?php


class ProductBrandDecorator extends DataObjectDecorator {

	/**
	 * standard SS method
	 *
	 */
	function extraStatics(){
		return array(
			"has_one" => array(
				'Brand' => 'Brand'
			)
		);
	}

	/**
	 * standard SS method
	 *
	 */
	function updateCMSFields(FieldSet &$fields) {
		if($brands = Dataobject::get("Brand")){
			$fields->removeFieldFromTab("Root.Content.Main", "Model");
			$fields->addFieldToTab('Root.Content.Main',
				new DropdownField(
				    'BrandID',
				    'Please choose an brand',
				    $brands->map("ID", "Title", "Please Select")
				),"FeaturedProduct"
			);
		}
	}
}
