<?php
  namespace FormBuilder;
  include 'Input.php';
  include 'Select.php';
  class Form
  {
    private $action;
  	private $method;
  	private $submit = "Ok";
    private $elements = [];

    function __construct($action, $method = "POST")
    {
      $this->action = $action;
  		$this->method = $method;
    }

    public function addInput($label, $name, $required = true, $type = "text")
    {
      $input = new Input($label, $name, $required, $type);
  		$this->addElement($input);
  		return $this;
    }

    public function addTextarea($label, $name, $required = true)
    {
      $textarea = new Textarea($label, $name, $required);
  		$this->addElement($textarea);
  		return $this;
    }

    public function addSelect($label, $name, $options)
    {
      $select = new Select($label, $name, $options);
  		$this->addElement($select);
  		return $this;
    }

    public function setSubmit($name)
    {
      $this->submit = $name;
		  return $this;
    }

    public function getElements()
    {
		return $this->elements;
	  }

    public function addElement($element)
    {
  		$this->elements[] = $element;
  		$element->setForm($this);
	  }

    public function display()
    {
  		echo "<form method=\"$this->method\" action=\"$this->action\">";
  		echo "<div>";
  		foreach($this->getElements() as $element)
      {
  			echo "<div>";
  			$element->display();
  			echo "</div>";
  		}
  		echo "<button type=\"submit\">$this->submit</button>";
  		echo "</div>";
  		echo "</form>";
	  }
  }

 ?>
