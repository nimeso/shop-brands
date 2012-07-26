<?php

class BrandImage extends DataObject {
	
  static $db = array(
    	'Title' => 'Varchar',
		'Description' => 'Text'
  );

	public static $has_one = array(
		'Image' => 'Image',
		'Brand' => 'Brand'
	);

  public function getCMSFields()
  {
  	
    $fields = new FieldSet(
		new TextField('Title', 'Title'),
		new TextareaField('Description', 'Description'),
		new FileIFrameField('Image', 'Image')
	);
		
	return $fields;
  } 
}

?>