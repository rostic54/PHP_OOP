<?php
class Cookie{

	private $cookie;


	public function setCookie($name, $txt, $time){
		  setcookie($name, $txt, $time );
	

	}
	public function deletCookie( $name ){
		setcookie($name, '', time() );
	}
	public function getCookie( $name ){
		return $_COOKIE[$name];
	}
	


}

$cook = new Cookie;



$cook->setCookie('test', 'just text', (time() + 3600) );
echo $_COOKIE['test'];

$cook->setCookie('exemp', 'In addition', (time() + 3600));

$value = $cook->getCookie('test');
echo "$value";

$cook->getCookie('exemp');
echo "<pre>";
print_r( $_COOKIE );

//$cook->deletCookie('test');

/*foreach ($_COOKIE as $key => $value) {
	echo "<br>";
	print_r("$key ___ $value");
}*/

/*echo "<pre>";
 print_r($form->getInput());
*/




 ?>
