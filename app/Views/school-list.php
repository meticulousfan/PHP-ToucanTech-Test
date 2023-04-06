<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title; ?> - School List</title>
   <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
   <h1><?php echo $site_title; ?> - 
   School List</h1>

   <!-- School List -->
   <table>
      <tr>
         <th>Id</th>
         <th>Name</th>
      </tr>
      <?php foreach ($schools as $school) { ?>
         <tr>
            <td><?php echo $school['id']; ?></td>
            <td><?php echo $school['name']; ?></td>
         </tr>
      <?php } ?>
   </table>
</body>
</html>
