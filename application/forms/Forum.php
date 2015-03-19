<?php

class Application_Form_Forum extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod("post");
        $this->setAttrib("class","form-group");
        
        $title = new Zend_Form_Element_Text("name");
        $title->setAttrib("class", "form-control");
        $title->setLabel("Title: ");
        $title->setRequired();
        //$username->addValidator(new Zend_Validate_EmailAddress());
        $title->addFilter(new Zend_Filter_StripTags);
        
       
         $image = new Zend_Form_Element_Image("image");
         $image->setAttrib("class", "form-control");
         $image->setLabel("Choose Image");
                         
         $id = new Zend_Form_Element_Hidden("id");
        // $submit = new Zend_Form_Element_Submit("submit");
         $this->addElements(array($id,$title,$image));
    }


}

