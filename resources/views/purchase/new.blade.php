@extends('layouts.main')

@section('content')

<div class="card" style="padding-left: 20px; width: 100%; margin-right: 10px;">
    <form action="{{ route('purchase.add') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>
     <input type="text" name="supplier_name" placeholder="Enter supplier_name">
 </p>
 <table>
     <tr>
       <th>#</th>
       <th>Code</th>
       <th>Purchase ID</th>
       <th>Image</th>
       <th>Total Yards</th>
       <th>Unit price</th>
   </tr>
   <tbody id="tbody">
   </tbody>
</table>
<p> 
    <button type="button" onclick="addPurchase();">
      Add Purchase
  </button>
</p>
<p>
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
</p>
</form>
</div>


@endsection()

<script type="text/javascript">
  var items = 0;

  function addPurchase() {
    items++;

    var html = "<tr>";
    html += "<td>" + items + "</td>";
    html += "<td><input name='code[]'></td>";
    html += "<td><input name='purchaseId[]'></td>";
    html += "<td><input type='file' name='image[]'></td>";
    html += "<td><input name='total_yards[]'></td>";
    html += "<td><input name='per_yard_price[]'></td>";

    document.getElementById("tbody").insertRow().innerHTML = html;
}
</script>
