<?php
class Form{

	public $open;
	private $close;
	private $input;
	private $password;
	private $submit;
	private $attr;
	//private $saveContent = ['value' => ""];
	

	private function strMaker( $collection ){
		$this->attr = '';

		foreach ($collection as $key => $value) {
			

			$this->attr .= ' ' . $key ."='" . $collection[$key] . '\'';
			
			if( $collection[$key] == 'text'){
			
				$text = '';
				if(isset ($_REQUEST['name']) ) $text = $_REQUEST[$collection['name']];
				$this->attr .= ' ' . 'value' . "=" . '\'' . "$text" . '\'';
			}
			print_r($this->attr);
			echo "<br>";
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
	    echo "$this->open <br> 
	          $this->input <br>
	          $this->password <br>
	          $this->submit <br>
	          $this->close";
	}
	public function password( $arr ){
		$this->password = "<input " . $this->strMaker( $arr ) . ">";
		return $this;
	}
	public function submit( $arr ){
	    $this->submit = "<input " . $this->strMaker( $arr ) . ">";
		return $this;		
	}
	
}

$form = new Form;
echo "<pre>";
print_r($form);
$arrAtr = ['action'=>'oop_practice.php', 'method'=>'GET'];
echo count($arrAtr) . "<br>";
$form->open($arrAtr)->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name'])->password(['type'=>'text','placeholder'=>'Ваш пароль', 'name'=>'pass'])->submit(['type' => 'submit','value'=>'Отправить'])->close()->show();


/*echo "<pre>";
 print_r($form->getInput());
*/




?>
