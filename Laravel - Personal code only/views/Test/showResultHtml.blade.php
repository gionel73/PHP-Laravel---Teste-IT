@extends('layouts.master')
@section('content')
 <fieldset style="border:5px #730090 inset; border-radius:20px; width:500px; margin bottom:10px">
	<legend style="border-top:5px maroon solid; border-right:5px maroon solid; border-radius:10px; padding-bottom:5px; padding-bottom:10px; width:400px; font-size:19px">
		&nbsp <u>Student: <b style="color:blue">{{$_SESSION['name']}}</b></u> - Final result for HTML test ... </legend><br>
		
		&nbsp The result of the html test: {{$_SESSION['htmlresult']}} from {{$nr_questions+1}} questions<br>
		&nbsp Previous result of html test: {{$_SESSION['htmlresult_old']}}<br><br><br>
		<?php if($_SESSION['htmlresult']>$_SESSION['htmlresult_old']) : ?>
			<p style="color: #1a75ff; text-align: center">&nbsp&nbsp&nbsp&nbsp&nbsp ... The evolution of HTML knowledge is positive ...</p>
		<?php else : ?>
			<p style="color: red; text-align: center">&nbsp&nbsp&nbsp&nbsp&nbsp ... HTML knowledge has not improved ...</p>
		<?php endif; ?>	
		<br><br>
		<div style="text-align:center">
		<a    href="{{route('students.saveTest',['curs'=>'html'])}}"><button style="font-size:17px; color: maroon"> New Test </button></a>
		</div>
		<br>
</fieldset>		
		
@stop