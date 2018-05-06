<?php

/**
* 
*/
class AngkaModel
{
	
	public function fakRandom()
	{
		$arrFak = array("Fakultas Kedokteran", "Fakultas Kedokteran Gigi", "Fakultas MIPA", "Fakultas Ilmu Komputer", "Fakultas Teknik");
		//$arrFak[rand(0, count($arrFak) - 1)];
		return $arrFak[array_rand($arrFak)];

	}
}
