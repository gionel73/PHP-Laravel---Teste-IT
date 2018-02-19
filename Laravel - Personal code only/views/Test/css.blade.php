<?php require_once('c:\xampp\htdocs\testit\resources\questions\cssquestions.php'); ?>

@extends('layouts.master')
@section('content')
	
	<b style="font-size:20px; margin-left:30px">Teste IT: &nbsp CSS</b>
	<br><br>
	<b style="font-size:18px; margin-left:30px; margin-right: 470px">Sudent: {{$_SESSION['name']}}</b><a href="{{route('students.create')}}"><button> Logout </button></a> 
	<br><br>
	
	<fieldset style="border:5px #730090 inset; border-radius:20px; width:700px; margin bottom:10px">
	<legend style="border-top:5px maroon solid; border-right:5px maroon solid; border-radius:10px; padding-bottom:5px; padding-top:5px; width:650px">&nbspQuestion {{$nr+1}} : {{$questions[$nr][0]}}</legend></br>
		<a href="{{route('testit.addResultCss',['val'=>'a','nr'=>$nr])}}"><button> a. </button></a> &nbsp{{$questions[$nr][1]}}<br><br>
		<a href="{{route('testit.addResultCss',['val'=>'b','nr'=>$nr])}}"><button> b. </button></a> &nbsp{{$questions[$nr][2]}}<br><br>
		<a href="{{route('testit.addResultCss',['val'=>'c','nr'=>$nr])}}"><button> c. </button></a> &nbsp{{$questions[$nr][3]}}<br><br>
	</fieldset>
		
@stop
