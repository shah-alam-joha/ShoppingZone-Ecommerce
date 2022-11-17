
<?php 
if (isset($_POST["submit"])) {

       $conn = mysqli_connect("localhost", "root", "", "shoppingzone");
       $supplier_name = $_POST['supplier_name'];
       $sql = "INSERT INTO `managepurchases` (`id`, `supplier_name`, `created_at`, `updated_at`) VALUES (NULL, '{$_POST['supplier_name']}', NULL, NULL)";

       $conn->query($sql);
       $purchaseId = mysqli_insert_id($conn);

       $data = $_POST;
       echo "<pre>";
       var_dump($data);

       $count = count($_POST['code']);
       $purchaseId = mysqli_insert_id($conn);

       for ($i = 0; $i < $count; $i++){

              $sql = "INSERT INTO `purchases` (`id`, `purchaseId`, `code`, `image`, `total_yards`, `per_yard_price`, `subtotal`, `created_at`, `updated_at`) VALUES (NULL, '$purchaseId', '{$_POST['code'][$i]}', NULL, '{$_POST['total_yards'][$i]}', '{$_POST['per_yard_price'][$i]}', '{$_POST['total_yards'][$i]} * {$_POST['per_yard_price'][$i]}', NULL, NULL)";
              $conn->query($sql);
      }
      echo "<p>Purchase has been added</p>";
}
?>


<form action="test.blade.php" method="POST">
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
        <input type="submit" name="submit">
</p>
</form>



<script type="text/javascript">
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
</script>
