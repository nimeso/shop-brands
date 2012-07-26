<?php
class BrandHolder extends Page {

	public static $db = array(
	);

	public static $has_one = array(
	);
	
	public static $has_many = array(
		"Brands" => "Brand"
	);
	
	static $allowed_children = array('Brand');
    static $default_child = "Brand";
    
    public static $icon = 'shop-brands/images/brandholder';
    
	public function ChildrenWithLogos(){
		return $this->Brands("LogoID != 0");
	}

}
class BrandHolder_Controller extends Page_Controller {

	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();
	}
	
}