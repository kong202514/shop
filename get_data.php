 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>User List</title>
     <style>
     body {
         font-family: Arial, sans-serif;
         background-color: #f4f4f9;
         margin: 0;
         padding: 0;
     }

     table {
         width: 90%;
         margin: 20px auto;
         border-collapse: collapse;
         background: #fff;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     th,
     td {
         padding: 10px;
         text-align: center;
         border: 1px solid #ddd;
     }

     th {
         background-color: #4CAF50;
         color: white;
     }

     tr:nth-child(even) {
         background-color: #f9f9f9;
     }

     tr:hover {
         background-color: #f1f1f1;
     }

     button {
         padding: 5px 10px;
         background-color: #4CAF50;
         color: white;
         border: none;
         border-radius: 5px;
         cursor: pointer;
     }

     button a {
         color: white;
         text-decoration: none;
     }

     button:hover {
         background-color: #45a049;
     }
     </style>
     <?php
    include "connect.php";
    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);
    ?>
 </head>

 <body>
     <h1 style="text-align: center; margin-top: 20px;">User List</h1>
     <table>
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Age</th>
                 <th>Email</th>
                 <th>Actions</th>
             </tr>
         </thead>
         <tbody>
             <?php while ($row = $result->fetch_assoc()) { ?>
             <tr>
                 <td><?php echo $row["id"]; ?></td>
                 <td><?php echo $row["name"]; ?></td>
                 <td><?php echo $row["age"]; ?></td>
                 <td><?php echo $row["email"]; ?></td>
                 <td><button><a href="edit.php?id=<?php echo $row['id']; ?>">แก้ไข</a></button></td>
             </tr>
             <?php } ?>
         </tbody>
     </table>
 </body>

 </html>