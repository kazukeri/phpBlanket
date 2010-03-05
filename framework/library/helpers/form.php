<?php 

class FormHelper{
	function start($url,$htmlParams = null){
	//$url tablica 3 elementowa
		$returnString ="<form action=\"";
		//controller
		if(isset($url['controller'])){
			$returnString.=FRAMEWORK.$url['controller'];
		}
		//widok
		if(isset($url['view'])){
			$returnString.="/".$url['view'];
		}
		//parametr
		if(isset($url['param'])){
			$returnString.="/".$url['param'];
		}		
		//zwykly url zewnetrzny np http://google.pl
		if(!isset($url['controller'])&& !isset($url['view'])){
			$returnString.=$url;
		}
		$returnString.="\"";
	// parametry dodatkowe takie jak style klasa etc
		if(isset($htmlParams)){
			foreach($htmlParams as $key -> $param){
				$returnString.=" ".$key."=\"".$param."\"";
			}		
		}

		
		$returnString.=" method=\"post\">";
		return $returnString;
	
	}
	//przycisk potwierdzenia
	function submit($string = "Submit"){//tekst na przycisku
		return "<input type=\"submit\" value=\"".$string."\">";
	}	

	//pole tekstowe
	function text($id,$value = null,$htmlParams = null){
		$returnString = "<input type=\"text\"";
		if(isset($id)){
			$returnString.=" name=\"".$id."\"";
		}	
		if(isset($value)){
			$returnString.=" value=\"".$value."\"";
		}	
		if(isset($htmlParams)){
			foreach($htmlParams as $key -> $param){
				$returnString.=" ".$key."=\"".$param."\"";
			}
		}
		$returnString .= ">";	
		return $returnString;	
	}
	function password($id,$value = null,$htmlParams = null){
		$returnString = "<input type=\"password\"";
		if(isset($id)){
			$returnString.=" name=\"".$id."\"";
		}	
		if(isset($value)){
			$returnString.=" value=\"".$value."\"";
		}	
		if(isset($htmlParams)){
			foreach($htmlParams as $key -> $param){
				$returnString.=" ".$key."=\"".$param."\"";
			}		
		}
		$returnString .= ">";	
		return $returnString;	
	}	
	//koniec formularza
	function end(){
		return "</form>";
	}	
}

