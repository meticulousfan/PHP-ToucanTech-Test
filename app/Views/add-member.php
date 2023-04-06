<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title; ?> - Add Member</title>
   <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
   <h1><?php echo $site_title; ?> - Add Member</h1>

   <!-- Add Member Form -->
   <form action="/add-member" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="school">School:</label>
      <select id="school" name="school_id" required>
         <?php foreach ($schools as $school) { ?>
            <option value="<?php echo $school['id']; ?>"><?php echo $school['name']; ?></option>
         <?php } ?>
      </select><br>

      <input type="submit" value="Add Member">
   </form>
</body>
</html>