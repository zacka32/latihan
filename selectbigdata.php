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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="plugin/select2/select2.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body >
  <h2>Dropdown 1 juta data</h2>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Nama</label>
            <div style="background:#fff;" class="input-group col-md-6">
              <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
              <select name="nama" class="form-control" required="required" id='testing'>
                
              </select>
                
            </div>
          </div>

  
  <script type="text/javascript">
    $(document).ready(function() {
         $('#testing').select2({
             minimumInputLength: 3,  // bebas semau kita, tapi w saranin 3 angka lebih biar lebih cepat
             allowClear: true,
             placeholder: 'Input nama',
             ajax: {
                dataType: 'json',
                url: 'loaddata.php',  // ini data yang akan kita ambil untuk di load
                delay: 5,  // ini bebas mau di pake atau tidak
                data: function(params) {
                  return {
                    search: params.term
                  }
                },
                processResults: function (data, page) {
                return {
                  results: data
                };
              },
            }
        }).on('select2:select', function (evt) {
           var data = $("#testing option:selected").text();
          alert("data yang anda pilih"+data+"");
        });
   });
  </script>
<script src="plugin/select2/select2.full.min.js"></script>


</body>
</html>
