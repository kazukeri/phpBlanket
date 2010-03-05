<?php 

class HtmlHelper{
	function link($title,$url,$htmlParams = null){
	//$url tablica 3 elementowa
		$returnString ="<a href=\"";
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

		
		$returnString.=" >";
		
		$returnString.=" ".$title." ";
		$returnString.=" </a> ";
		return $returnString;
	
	}
}

