<?php

function widgetInput($grid,$nb,$mandatory,$label,$rgxp,$value)
{		
	$mand1 = '<span class="invisible">Pflichtfeld</span> ';
	$mand2 = '<span class="mandatory">*</span>';
	
	$str = '';
	$str .= '<div class="widget '.$grid.' '.$rgxp.'">';
	$str .= '<label for="ctrl_'.$nb.'">';
	
	if($mandatory)
	{
		$str .= $mand1.$GLOBALS['TL_LANG']['tl_member'][$label][0].$mand2;
		$setMandatory = 'mandatory';
	}
	else
	{
		$str .= $GLOBALS['TL_LANG']['tl_member'][$label][0];
	}
	$str .= '</label>';
	$str .= '<input type="text" name="'.$label.'" id="ctrl_'.$nb.'" class="text '.$rgxp.' '.$setMandatory.'" value="'.$value.'" />';
	$str .= '<p class="tl_help tl_tip" title="">'.$GLOBALS['TL_LANG']['tl_member'][$label][1].'</p>';
	$str .= '</div>';
	
	return $str;
}

?>
