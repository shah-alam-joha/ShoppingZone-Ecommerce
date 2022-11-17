@extends('layouts.main')
@section('content')
<div class="card">
	<div class="card-header">
		Add Cutting
		<hr>
	</div>
	<div class="card-body">
		<form action="{{ route('cutting.add') }}" method="post" enctype="multipart/form-data">
			@csrf

<table>
	<tr>
		<th>#</th>
		<th>Febric Id</th>
		<th>Febric Colour</th>
		<th>Febric Image</th>
		<th>Febric Quantity</th>
	</tr>
	<tbody id="tbody"></tbody>
</table>

<p>
<button type="button" onclick="addCutting();">Add Cutting</button>
</p>

<p>
	<button type="submit" class="btn btn-success">Submit</button>
</p>		
	</form>
	</div>
</div>
@endsection

<script type="text/javascript">
	 var items=0;
	 function addCutting(){
	 	items++;
	 	var html = "<tr>";
	 	html += "<td>" + items + "</td>";
	 	html += "<td><input name='febricId[]'></td>";
	 	html += "<td><input name='febric_colour[]'></td>";
	 	html += "<td><input type='file' name='image[]'></td>";
	 	html += "<td><input name='febric_quantity[]'></td>";

	 	document.getElementById("tbody").insertRow().innerHTML = html;
	 }
</script>