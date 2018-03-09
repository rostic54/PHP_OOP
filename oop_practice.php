<?php
class Form{

	public $open;
	private $close;
	private $input;
	private $attr;
	static $count = 2 ; 

	private function strMaker( $collection ){
		$this->attr = '';

		foreach ($collection as $key => $value) {
			
			$this->attr .= ' ' . $key ."='" . $collection[$key] . '\'';
			echo "<br>" . $count++;
			print_r($this->attr);
		}
		
		return $this->attr;
	}

	public function open($arr){		
		
		$this->open = "<form " . $this->strMaker($arr) . ">";
		return $this;

	}
	public function input( $arr ){
		$this->input = "<input " . $this->strMaker($arr) . ">";
		return $this;
	}
	public function close(){
		$this->close = '</form>';
		return $this;
	}
	public function show(){
	    echo "$this->open <br> $this->input <br> $this->close";
	}
	public function getInput(){
		return $this->input;
	}
	
}

$form = new Form;
echo "<pre>";
print_r($form);
$arrAtr = ['action'=>'index.php', 'method'=>'POST'];
echo count($arrAtr) . "<br>";
$form->open($arrAtr)->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name'])->close()->show();


echo "<pre>";
 print_r($form->getInput());





?>
