<?php

/**
* Class Menu
*/
class Menu
{

	private static function menuGroup()
	{
		if (!empty($_SESSION['acl']['group'])) {
			$groupMenu = QodrRefMenu::find([
				"conditions" => "actived = 'Y' AND usergroup like '%".'"'.$_SESSION['acl']['group'].'"'."%'"
			]);
			return $groupMenu;
		} else {
			$groupMenu = QodrRefMenu::find([
				"conditions" => "actived = 'Y' AND usergroup like '%".'"999"'."%'"
			]);
			return $groupMenu;
		}
	}

	private static function menuParent($id)
	{
		$menuParent = QodrRefAcl::find([
			"conditions" => "actived = 'Y' AND usergroup like '%,".$_SESSION['acl']['group'].",%' AND (menu_group = '$id' OR parent = '$id')"
		]);
		$tag = '';
		foreach ($menuParent as $key => $value) {
			if (!empty($value->menu_group) and empty($value->parent) and $value->child === 'N') {
				$tag .= '<li><a href="'.URL.$value->url.'"><i class="fa '.$value->icon.'"></i> <span>'.$value->label.'</span></a></li>';
			} else if ($value->child === 'Y') {
				$tag .= "<li class=\"treeview\"><a href=\"#\" ><i class=\"fa ".$value->icon."\"></i> <span>".$value->label."</span> <i class=\"fa fa-angle-left pull-right\"></i></a><ul class=\"treeview-menu\"> ".Menu::menuParent($value->id)."</ul></li> ";	
			} else if(!empty($value->parent)) {
				if (!empty($value->url)) {
					$tag .= '<li><a href="'.URL.$value->url.'"><i class="fa '.$value->icon.'"></i> <span>'.$value->label.'</span></a></li>';
				}
			}
		}
		return $tag;
	}

	public static function menuUmum($id)
	{
		$menuParent = QodrRefAcl::find([
			"conditions" => "actived = 'Y' AND usergroup like '%,999,%' AND (menu_group = '$id' OR parent = '$id')"
		]);
		$tag = '';
		foreach ($menuParent as $key => $value) {
			if (!empty($value->menu_group) and empty($value->parent) and $value->child === 'N') {
				$tag .= '<li><a href="'.URL.$value->url.'"><i class="fa '.$value->icon.'"></i> <span>'.$value->label.'</span></a></li>';
			} else if ($value->child === 'Y') {
				$tag .= "<li class=\"treeview\"><a href=\"#\" ><i class=\"fa ".$value->icon."\"></i> <span>".$value->label."</span> <i class=\"fa fa-angle-left pull-right\"></i></a><ul class=\"treeview-menu\"> ".Menu::menuUmum($value->id)."</ul></li> ";	
			} else if(!empty($value->parent)) {
				if (!empty($value->url)) {
					$tag .= '<li><a href="'.URL.$value->url.'"><i class="fa '.$value->icon.'"></i> <span>'.$value->label.'</span></a></li>';
				}
			}
		}
		return $tag;
	}

	public function menuList()
	{
		$result = '';
		if (!empty($_SESSION['acl']['group'])) {
			foreach ($this->menuGroup() as $key => $value) {
				$result .= '<li class="header">'.$value->menu_group.'</li>';
				$result .= $this->menuParent($value->id);
			}
		} else {
			foreach ($this->menuGroup() as $key => $value) {
				$result .= '<li class="header">'.$value->menu_group.'</li>';
				$result .= $this->menuUmum($value->id);
			}
		}
		return $result;
	}

}