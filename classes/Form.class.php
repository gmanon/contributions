<?php
require_once('./field.class.php');
class Form extends Field{
    public $form;
    public $fields;

    function setFields($name,$action,$form_type,$fields = array())
    {
        $form = '<form>';
		foreach($fields as $field)
		{
			$this->form .= $field;
		}
		$form .= '</form>';

		return $form;

    }
}

/* Testing class */
$form = new Form();
$options = array('NJ'=>'New Jersey','NY'=>'New York','PA'=>'Philadelphia');
$field = new field();
$fields []= $field->setField("name","text",'NAME');
$fields []= $field->setField("contributions","image",'NAME','200','200','','../images/contributions.jpg');
$fields []= $field->setField("Edit this page","textarea",'NAME','40','8');
$fields []= ]$field->setField("cities","select",'NAME','','',$options);
$fields []= $field->setField("name","submit",'NAME');
$fields []= $field->setField("states","radio",'NAME','','',$options);
$fields []= $field->setField("name","checkbox",'NAME','','',$options);
$fields []= $form->setFields("myForm","__self","doc_type",$fields);

echo '<pre>';print_r($form);echo '</pre>';
