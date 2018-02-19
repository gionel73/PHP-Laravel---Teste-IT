
@extends('layouts.master')
@section('content')
	
	<form method='POST' action='/students' autocomplete='off'>
	{{csrf_field()}}
	<fieldset style="border:5px #730090 inset; border-radius:20px; width:400px; margin-bottom:10px">
		<legend style="border-top:5px maroon solid; border-right:5px maroon solid; border-radius:10px; padding-bottom:5px; width:250px;font-size:20px">&nbsp&nbspIntroduceti user si parola:</legend></br>
		<input type='text' name='student' placeholder='User : Only letters and white space allowed' size="33" autofocus><br><br>
		<input type='password' name='password' placeholder='Password' size="33"><br><br>
		<input style="margin-left:20px" type='submit' value='Login'> 
	</fieldset>
	</form>
	<div style="width:80%">
	
	@if(count($errors)>0)
		<ul>
			@foreach($errors->all() as $err)
				<li>{{$err}}</li>
			@endforeach
		</ul>
	@endif
	</div>
@stop
