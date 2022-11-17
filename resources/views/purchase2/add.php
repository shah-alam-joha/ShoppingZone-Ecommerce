<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Purchase</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="action.php" method="POST">
				<div class="apsection">
				Name: <input type="text" name="name[]" class="form-control">
				Age: <input type="text" name="age[]" class="form-control"> <br>
				</div>
				<button class="btn btn-info">Submit</button>
				<button id="btn" class="btn btn-warning">Add more</button>
			</form>
		</div>
	</div>
</div>

<script>
	$('document').ready(function(){
		$('#btn').click(function(e){
			e.preventDefault();
			$('.apsection').append('Name: <input type="text" name="name[]" class="form-control"> Age: <input type="text" name="age[]" class="form-control"> <br>');
		});
	});
</script>

{{-- <script type="text/javascript">
      var items = 0;

      function addPurchase() {
        items++;

        var html = "<tr>";
        html += "<td>" + items + "</td>";
        html += "<td><input name='purchaseId[]'></td>";
        html += "<td><input name='code[]'></td>";
        html += "<td><input name='image[]'></td>";
        html += "<td><input name='total_yards[]'></td>";
        html += "<td><input name='per_yard_price[]'></td>";
      
        document.getElementById("tbody").insertRow().innerHTML = html;
      }
    </script> --}}

</body>
</html>