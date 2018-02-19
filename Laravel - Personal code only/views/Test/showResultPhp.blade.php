@extends('layouts.master')
@section('content')
 <fieldset style="border:5px #730090 inset; border-radius:20px; width:500px; margin bottom:10px">
	<legend style="border-top:5px maroon solid; border-right:5px maroon solid; border-radius:10px; padding-bottom:5px; padding-bottom:10px; width:400px; font-size:19px">
		&nbsp <u>Student: <b style="color:blue">{{$_SESSION['name']}}</b></u> - Final result for PHP test ... </legend><br>
		
		&nbsp The result of the PHP test: {{$_SESSION['phpresult']}} from {{$nr_questions+1}} questions<br>
		&nbsp Previous result of PHP test: {{$_SESSION['phpresult_old']}}<br><br><br>
		<?php if($_SESSION['phpresult']>$_SESSION['phpresult_old']) : ?>
			<p style="color: #1a75ff; text-align: center">&nbsp&nbsp&nbsp&nbsp&nbsp ... The evolution of PHP knowledge is positive ...</p>
		<?php else : ?>
			<p style="color: red; text-align: center">&nbsp&nbsp&nbsp&nbsp&nbsp ... PHP knowledge has not improved ...</p>
		<?php endif; ?>	
		<br><br>
		<div style="text-align:center">
		<a    href="{{route('students.saveTest',['curs'=>'php'])}}"><button style="font-size:17px; color: maroon"> New Test </button></a>
		</div>
		<br>
</fieldset>		
		
@stop