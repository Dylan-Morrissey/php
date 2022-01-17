<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grades</title>
  </head>
  <body>
    <h1>Student Grades</h1> <br>
    <p>Please enter your name to recieve your grade:</p>
    <form action="grades.php" method="post">
      names: <input type="text" name="studentsName">
      <input type="submit">
    </form>

    <?php
      $name = $_POST["studentsName
      $grades = array('John' => "A" , 'Shane' => "F", 'Sean' => "C" );
      echo $grades[$name];
     ?>

  </body>
</html>
