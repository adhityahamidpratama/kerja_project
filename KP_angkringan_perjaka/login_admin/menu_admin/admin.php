<?php include("../../koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admin Feedback</title>

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
   <link rel="stylesheet" href="admin.css">
</head>

<body>
   <div class="wrapper">
      <nav class="navbar navbar-default">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle Navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin.php">ADMIN</a>
         </div>
      </nav>
      <aside class="sidebar">
         <menu>
            <ul class="menu-content">
               <li><a href="admin.php"><i class="fa fa-home"></i> Home</a></li>
               <li><a href="logout.php"  onclick="return confirm('Apakah anda ingin keluar?')">Logout</a></li>
            </ul>
         </menu>
      </aside>
      <section class="content">
         <div class="inner">
            <p>
               FEEDBACK
            </p>
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">No</th>
                     <th scope="col">Date</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Email</th>
                     <th scope="col">Message</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody class="table-group-divider">
                  <?php
                  $result = mysqli_query($conn, "SELECT * FROM feedback");
                  $i = 1;
                  while ($data = mysqli_fetch_assoc($result)):
                     ?>
                     <tr>
                        <th scope="row">
                           <?= $i ?>
                        </th>
                        <td>
                           <?= $data['timestamp'] ?>
                        </td>
                        <td>
                           <?= $data['nama'] ?>
                        </td>
                        <td>
                           <?= $data['email'] ?>
                        </td>
                        <td>
                           <?= $data['message'] ?>
                        </td>
                        <td>
                           <a href="delete.php?id=<?= $data['id'] ?>"
                              onclick="return confirm('Apakah Anda yakin ingin menghapus feedback ini?')">Delete</a>
                        </td>
                     </tr>
                     <?php
                     $i++;
                  endwhile; ?>
               </tbody>
            </table>
         </div>
      </section>
   </div>
</body>

</html>