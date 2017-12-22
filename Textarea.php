<?php
namespace FormBuilder;
include 'Element.php';

class Textarea extends Element
{

	private $required;


	public function __construct($label, $name, $required = true){
		parent::__construct($label, $name);
		$this->required = $required;
	}

	public function display()
  {
		echo '<label>'.$this->getLabel().'</label>';
		echo '<textarea name="' . $this->getName() . '" '.($this->required?"required":"").' placeholder="' .$this->getLabel(). '">';
		echo '</textarea>';
	}

	public function setRequired($required){
		$this->required = $required;
	}

	public function isRequired(){
		return $this->required;
	}

}
