<?php
class Brand extends Page {

	public static $db = array(
	);

	public static $has_one = array(
		"Logo" => "Image",
		"MainImage" => "Image",
	);
	
	public static $has_many = array(
		"BrandImages" => "BrandImage",
		"Products" => "Products"
	);
	
	static $allowed_children = array('none');
	
	public static $icon = 'shop-brands/images/brand';
	
	function getCMSFields() {
      $fields = parent::getCMSFields();
      $fields->addFieldToTab("Root.Content.Main", new ImageField('Logo'),"Content");
      //$fields->addFieldToTab("Root.Content.Main", new ImageField("MainImage"),"Content");
	  $fields->addFieldToTab("Root.Content.BrandImages", new ImageDataObjectManager(
			$this,
			'BrandImages',
			'BrandImage'
	  ));
		
      return $fields;
   }

}
class Brand_Controller extends Page_Controller {

	public static $allowed_actions = array (
		"viewproducts"
	);

	public function init() {
		parent::init();
		Requirements::javascript("shop-brands/javascript/cycle.js");
		Requirements::javascript("shop-brands/javascript/brands.js");
	}
	
	public function Products(){
		$offSet = 0;
		if(isset($_GET['start']))$offSet = $_GET['start'];
		if($products = DataObject::get("Product","BrandID = ".$this->ID." AND AllowPurchase = 1","ParentID DESC",'',$offSet.",20")){
			return $products;
		}
	}

	public function getFeaturedProducts(){
		$prods = $this->BrandImages("","SortOrder ASC");
		return $prods;
	}
	
	public function getProductsLink(){
		if($this->Products()){
			return $this->URLSegment."/viewproducts";
		}
	}
	
}