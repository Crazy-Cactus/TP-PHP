<?php
namespace FormBuilder;
include 'Textarea.php';

class Input extends Textarea{

	private $type;

	public function __construct($label, $name, $required = true, $type = "text")
  {
		parent::__construct($label, $name, $required);
		$this->type = $type;
	}

	public function display()
  {
		echo "<label>" . $this->getLabel() . "</label>" .
		'<input type="' . $this->getType() . '" name="' . $this->getName() . '" placeholder="'. $this->getLabel() .'" '.($this->isRequired()?"required":"").'/>';
	}

	public function setType($type)
  {
		$this->type = $type;
	}

	public function getType()
  {
		return $this->type;
	}

}
