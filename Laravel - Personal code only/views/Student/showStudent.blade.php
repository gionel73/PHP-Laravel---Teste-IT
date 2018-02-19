
@extends('layouts.master')
@section('content')
 <fieldset style="border:5px #730090 inset; border-radius:20px; width:300px; margin bottom:10px">
	<legend style="border-top:5px maroon solid; border-right:5px maroon solid; border-radius:10px; padding-bottom:5px; padding-bottom:10px; width:250px">
		&nbspPanel administrator to delete users ... </legend><br>
		<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0">
		<thead>
			<tr>
				<th align="left"><b>ID</b></th>
				<th align="left"><b>Name</b></th>
				<th align="left"><b>Options</b></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($studentsList as $id1=>$name1) : ?>
				<tr>
					<td align="left"> {{$id1}}  </td>
					<td align="left"> {{$name1}} </td>
					<td align="left"> <a style="text-decoration:none" onclick="return confirm('Are you sure you want to delete the user?')" href="{{route('students.deleteStudent',['id'=>$id1])}}"> Delete </a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
		<br>
		<div style="text-align:center">
		<a    href="{{route('testit.home')}}"><button style="font-size:18px; color: maroon">Site access </button></a>
		</div>
	</fieldset>
	
@stop

