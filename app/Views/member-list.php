<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title; ?> - Member List</title>
   <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
   <h1><?php echo $site_title; ?> - Member List</h1>

   <!-- School Selector -->
   <form action="/member-list" method="post">
      <label for="school">Select a school:</label>
      <select name="school" onchange="this.form.submit()">
         <?php foreach ($schools as $school) { ?>
            <option value="<?php echo $school['id']; ?>"
               <?php if ($school['id'] == $selected_school) { echo 'selected'; } ?>>
               <?php echo $school['name']; ?>
            </option>
         <?php } ?>
      </select>
   </form>

   <!-- Member List -->
   <table>
      <tr>
         <th>Name</th>
         <th>Email</th>
      </tr>
      <?php foreach ($members as $member) { ?>
         <tr>
            <td><?php echo $member['name']; ?></td>
            <td><?php echo $member['email']; ?></td>
         </tr>
      <?php } ?>
   </table>
</body>
</html>