<?php
/***************************************************************************
 *            field.class.php
 *
 *  Wed February 17 11:33:36 2016
 *  Copyright  2016  gmanon
 *  <user@domain.org>
 ****************************************************************************/
class field{
	public $field = '';
	protected $label = '';
	public $field_type;

	public static function setField(
							$name,
							$type='text',
							$value='',
							$width='20',
							$height='6',
							$options = array(),
							$src=''
	)
	{
		switch($type)
		{
			case "text":
			case "submit":
			case "hidden":
            case "file":
            if(($type != "submit") && ($type != "hidden"))
            {
                $field .= '<label class="label" name="'.str_replace(' ','_',$name).'">'.ucwords($name).'</label>';
            }

			$field .= '<input type="'.$type.'" name="'.str_replace(' ','_',$name).'" value="'.
							strtoupper($value).'" /><br/>'."\n";
			break;
			case "image":
			$field .= '<label class="label" name="'.str_replace(' ','_',$name).'">'.ucwords($name).'</label>
							<input type="image" name="'.str_replace(' ','_',$name).'" src="'.$src.'" value='.
							strtoupper($value).'" width="'.$width.'" height="'.$height.'" /><br/>'."\n";
			break;
			case "textarea":
			$field .= '<label class="label" name="'.str_replace(' ','_',$name).'">'.ucwords($name).'</label>
							<textarea name="'.str_replace(' ','_',$name).'" rows="'.$height.'" cols="'.$width.'">'
                            .strtoupper($value).'</textarea><br/>'."\n";
			break;
			case "select":
			$field .= '<label class="label" name="'.str_replace(' ','_',$name).'">'.ucwords($name).'</label>
							<select name="'.str_replace(' ','_',$name).'" value="'.
							strtoupper($value).'" />';
                    foreach($options as $optionname=>$optionvalue)
                    {
                        $field .= '<option name="'.$optionname.'">'.$optionvalue.'</option>'."\n";
                    }
            $field .= '</select><br/>'."\n";
			break;
			case "radio":
            case "checkbox";
			$field .= '<label class="label" name="'.str_replace(' ','_',$name).'">'
                        .ucwords($name).'</label>'."<br/>\n";
                    foreach($options as $radioname=>$radiovalue)
							$field .= '<input type="'.$type.'" name="'.str_replace(' ','_',$name).'" value="'.
							strtoupper($radioname).'" />'.$radiovalue.'<br/>'."\n";

			break;

			case "date":
			$field .= '<input type="text"';
			break;

			case "edit":
			$field .= '<input type="text"';
			break;
			default:
			break;
		}
	    return $field;
	}

}
/* testing class field
*/
$options = array('NJ'=>'New Jersey','NY'=>'New York','PA'=>'Philadelphia');
$field = new field();
echo $field->setField("name","text",'NAME');
echo $field->setField("contributions","image",'NAME','200','200','','../images/contributions.jpg');
echo $field->setField("Edit this page","textarea",'NAME','40','8');
echo $field->setField("cities","select",'NAME','','',$options);
echo $field->setField("name","submit",'NAME');
echo $field->setField("states","radio",'NAME','','',$options);
echo $field->setField("name","checkbox",'NAME','','',$options);

print_r($field);
