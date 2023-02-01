<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

</head>
<body>
<div style="text-align: right;">
<i class="fa-solid fa-print"></i>
  <button  onclick="printTable()">Print Table</button>
  <button onclick="exportExcel()">Export to Excel</button>
</div>

<script>
function printTable() {
    window.print();
}

function exportExcel() {
    var table = document.getElementById("myTable");
    var html = table.outerHTML;
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
}
</script>
<center>   <img src="img/heading.png" alt="image"> </center>


</body>
</html>