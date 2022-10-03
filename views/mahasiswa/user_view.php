<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title></title>

   <!-- jQuery library -->
   <script src="<?= base_url() ?>assets/jquery-3.4.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   <style>
    body
    {
      margin:0;
      padding:0;
      background-color:#f1f1f1;
    }
    .box
    {
      width:900px;
      padding:20px;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:5px;
      margin-top:10px;
    }
   </style>
</head>
<body>
    <div class="container box">
    <h3 align="center">Data Mahasiswa</h3><br />
     <div class="table-responsive">
      <br/>
    <table  class="table table-striped table-bordered">
        <thead>
          <tr>
            <th width="20" >ID</th>
            <th width="20" >Nama</th>
            <th width="20" >NRP</th>
            <th width="20" >IPK</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        // User List
        foreach($dta as $user){
            $id = $user['id'];
            $nama = $user['nama'];
            $nrp = $user['nrp'];
            $ipk = $user['ipk'];

            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>
               
                <input type='text' class='txtedit' data-id='".$id."' data-field='nama' id='nametxt_".$id."' value='".$nama."' >
            </td>";
            echo "<td>
                
                <input type='text' class='txtedit' data-id='".$id."' data-field='nrp' id='nrptxt_".$id."' value='".$nrp."' >
            </td>";
             echo "<td contenteditable class=table_data >
               
                <input type='text' class='txtedit' data-id='".$id."' data-field='ipk' id='ipktxt_".$id."' value='".$ipk."' >
            </td>";
            echo "</tr>";
        }
        ?>
         </tbody>
    </table>

    <!-- Script -->
    <script type="text/javascript">
    $(document).ready(function(){

        // On text click
        $('.edit').click(function(){

          // Hide input element
          $('.txtedit').hide();

          // Show next input element
          $(this).next('.txtedit').show();

          // Hide clicked element
          $(this).hide();
        });

        // Focus out from a textbox
        $('.txtedit').focusout(function(){
            // Get edit id, field name and value
            var edit_id = $(this).data('id');
            var fieldname = $(this).data('field');
            var value = $(this).val();

            // Hide Input element
            //$(this).hide();

            // Update viewing value and display it
            $(this).prev('.edit').show();
            $(this).prev('.edit').text(value);

            // Send AJAX request
            $.ajax({
              url: '<?= base_url() ?>index.php/Mahasiswa/updateuser',
              type: 'post',
              data: { field:fieldname, value:value, id:edit_id },
              success:function(response){
                console.log(response);
                
              }
            });
        });
    });
    </script>
   
</body>
</html>