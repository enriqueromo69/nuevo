<?php 
class ItemForm extends CActiveRecord
{
    public $picture;
    // ... other attributes
  
    public function rules()
    {
        return array(
            array('picture', 'file', 'types'=>'jpg, gif, png'),
        );
    }
}

 ?>