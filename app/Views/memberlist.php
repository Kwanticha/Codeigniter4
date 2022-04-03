<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter Crud</title>
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Mali">
         
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
a{
  background: pink;
}
body{
  font-family :Mali;
}
</style><br>
<div class="container mt-4">
<center><h1>Codeigniter Member</h1></center><br>

<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/membername') ?>" class="btn btn-warning ">Add a Information</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     
      ?>
      <div class="mt-3">
         <table class="table table-bordered table-danger" id="users-list">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>FirsName</th>
                 <th>LastName</th>
                 <th>Email</th>
                 <th>Time</th>
                 <th>Time_in</th>
                 <th>Time_out</th>
              </tr>
           </thead>
           <tbody>
            <?php if($users): ?>
              <?php foreach($users as  $user): ?>
              <tr>
                 <td><?php echo $user['Id']; ?></td>
                 <td><?php echo $user['Firsname']; ?></td>
                 <td><?php echo $user['Lastname']; ?></td>
                 <td><?php echo $user['Email']; ?></td>
                 <td><?php echo $user['Time']; ?></td>
                 <td><?php echo $user['Time_in']; ?></td>
                 <td><?php echo $user['Time_out']; ?></td>
                  </tr>
             
                  <?php endforeach; ?>
             <?php endif; ?>
           </tbody>
         </table>
      </div>
    </div>
     
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
          $('#users-list').DataTable();
      } );
    </script>
    </body>
    </html>
  