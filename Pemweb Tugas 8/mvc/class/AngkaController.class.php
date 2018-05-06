<?php

/**
* 
*/
class AngkaController
{
	private $modelAngka;
	private $uiAngka;
	private $modelForm;
	private $uiForm;

	public function gettampilForm()
	{
		$this->uiForm = new VisualView();
		$this->uiForm->tampilForm();
	}
	public function gettampilHasil()
	{
		$this->modelForm = new AngkaModel();
		$hasil = $this->modelForm->fakRandom();

		$this->uiForm = new VisualView();
		$this->uiForm->tampilHasil($hasil);

		
	}
}