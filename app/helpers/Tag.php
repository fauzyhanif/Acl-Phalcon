<?php

/**
* class Tag
*/
class Tag
{

	public static function groupMenu()
	{
   		$header = QodrPmbMenu::find(["conditions" => "actived = 'Y'"]);
		$tag 	= '<option value="">Pilih Group Menu</option>';
   		foreach ($header as $key => $value) {
   			if ($selected == $value->id) {
				$tag .= '<option value="' . $value->id . '" selected>' . $value->menu_group . '</option>';
   			}else{
				$tag .= '<option value="' . $value->id . '">' . $value->menu_group . '</option>';
   			}
   		}
        return $tag;
	}
	
	

}