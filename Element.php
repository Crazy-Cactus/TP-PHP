<?php
namespace FormBuilder;

abstract class Element
{

	private $label;
	private $name;
	private $form;

	public function __construct($label, $name)
  {
		$this->label = $label;
		$this->name = $name;
	}

	public function getLabel()
  {
		return $this->label;
	}

	public function setLabel($label)
  {
		$this->label = $label;
	}

	public function getName()
  {
		return $this->name;
	}

	public function setName($name)
  {
		$this->name = $name;
	}

	public function getForm()
  {
		return $this->form;
	}

	public function setForm(Form $form)
  {
		$this->form = $form;
	}
}
