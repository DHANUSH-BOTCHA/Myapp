<?php

$content[5] = array();

class Template{
	private $template; 
	private $content;
	private $hasNext;
	private $noOfResults;

	public function __construct($template,$content){
		$this->load($template,$content);
	}

	public function __get($val){
		if($val=="hasNext"){
			return $this->$val;
		}
		else if($val=="noOfResults"){
			return $this->$val;
		}
		else{
			die("Cannnot access private property Template::$val");
		}
	}
	public function output(){
		$record = $this->content;
		$html = $this->template;
		
		
		foreach ($this->content as $key_ => $value_)
		{	
			//$record = json_decode($value_ ,true);
			
			foreach ($value_ as $key => $val){
			
				$html = str_replace("{".$key."}",$val,$html);
			}
		}
	
		
		if(!next($this->content)){
			$this->hasNext = FALSE;
		}
		return $html;
	}

	public function load($template,$content){
		$this->template = file_get_contents("http://localhost/Myapp/templates/$template", true);
		//$this->template = $html;
		$this->content = $content;
		$this->hasNext =TRUE;
		$this->noOfResults = sizeof($this->content);

	}
}

//$test = new Template("product_thumbnail.html",$content);

/*while($test->hasNext){
	echo $test->output();	
}*/