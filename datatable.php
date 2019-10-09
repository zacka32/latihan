<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>big data select2</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="plugin/datatables/dataTables.bootstrap.css"> 

</head>
<body >
  <section class="content">
    <div class="row">
      <div class="col-md-10">
      <div class="box">
        <div class="box-header">
        <center> <h3 class="box-title">Data table 1 juta lebih</h3>  </center>
        </div>

        <div class="box-body">
          <!-- ini script tablenya gan  -->
          <table id="example1" class="display table table-bordered table-striped " width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Pekerjaan</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
          </table>
          <!-- sampe sini kita kasih id example1 kita liat jsnya -->
        </div>

      </div>
      </div>

    </div>

    <script src="plugin/jquery-2.2.3.min.js"></script>
  <script src="plugin/bootstrap/js/bootstrap.min.js"></script>

<script src="plugin/datatables/jquery.dataTables.min.js"></script>
<script src="plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugin/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script src="plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="plugin/datatables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#example1').DataTable( {
            
            "order": [[ 0, "desc" ]],
            "deferRender": true,
            "processing": true,
            "serverSide": true,
            // "responsive":true,
            "scrollX": true,
            "ajax": "load_data.php", 
            //jadi kita menggunakan ssp.class.php
            //biar loadnya perpage jadi g semua di load , jadi g lama rendernya           
        } );    
    });
          
  </script>
  </section>
 
</body>
</html>
