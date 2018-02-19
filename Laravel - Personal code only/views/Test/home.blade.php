
@extends('layouts.master')
@section('content')
	
	<b style="font-size:18px; margin-left:30px; margin-right: 150px">Sudent: {{$_SESSION['name']}}</b><a href="{{route('students.create')}}"><button> Logout </button></a> 
	
	<br><br>
	
	<fieldset style="border:5px #730090 inset; border-radius:20px; width:400px; margin bottom:10px">
	<legend style="border-top:5px maroon solid; border-right:5px maroon solid; border-radius:10px; padding-bottom:5px;padding-top:5px; width:320px;font-size:17px">&nbsp&nbspAlegeti testul pe care doriti sa-l parcurgeti:</legend></br>
	<a style="text-decoration:none" href="{{route('testit.htmltest')}}"><b>Html</b></a> &nbsp&nbsp&nbsp Rezultat anterior Html: {{$_SESSION['htmlresult_old']}}
	<br><br>
	<a style="text-decoration:none" href="{{route('testit.csstest')}}"><b>CSS</b></a> &nbsp&nbsp&nbsp&nbsp Rezultat anterior CSS:&nbsp {{$_SESSION['cssresult_old']}}
	<br><br>
	<a style="text-decoration:none" href="{{route('testit.phptest')}}"><b>PHP</b></a> &nbsp&nbsp&nbsp&nbsp Rezultat anterior PHP:&nbsp {{$_SESSION['phpresult_old']}}
	<br><br>
	</fieldset>
	
@stop