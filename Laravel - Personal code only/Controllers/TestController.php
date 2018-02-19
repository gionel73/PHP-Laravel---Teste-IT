<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
		
		return view('Test.home');
	}
	
	public function htmltest(){
		
		return view('Test.html')->with('nr',0);
	}
	
	public function csstest(){
		
		return view('Test.css')->with('nr',0);
	}
	
	public function phptest(){
		
		return view('Test.php')->with('nr',0);
	}
// addResult HTML	
	public function addResultHtml($val, $nr){
		
		$html_OK=array('a','c','a','b','c');
		$nr_questions=4;
		$_SESSION['answers'].=$val;
		if($html_OK[$nr]==$val){
			$_SESSION['htmlresult']++;
		}
		if($nr>=$nr_questions){
			return view('Test.showResultHtml')->with('nr_questions',$nr_questions);
		}
		return view('Test.html')->with('nr',++$nr);
		
	}
// addResult CSS	
	public function addResultCss($val, $nr){
		
		$css_OK=array('b','a','b','c','b','c');
		$nr_questions=5;
		$_SESSION['answers'].=$val;
		if($css_OK[$nr]==$val){
			$_SESSION['cssresult']++;
		}
		if($nr>=$nr_questions){
			return view('Test.showResultCss')->with('nr_questions',$nr_questions); 
		}
		return view('Test.css')->with('nr',++$nr);
		
	}
// addResult PHP	
	public function addResultPhp($val, $nr){
		
		$php_OK=array('a','c','b','c','c','b','a','b');
		$nr_questions=7;
		$_SESSION['answers'].=$val;
		if($php_OK[$nr]==$val){
			$_SESSION['phpresult']++;
		}
		if($nr>=$nr_questions){
			return view('Test.showResultPhp')->with('nr_questions',$nr_questions); 
		}
		return view('Test.php')->with('nr',++$nr);
		
	}
	
}
