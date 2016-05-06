<!DOCTYPE html> 
  <head> 
      <title>Вопрос отпрален!</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

      <link rel="stylesheet" type="text/css" href="add_style.css">
  </head>
  <body>
    <div class="container-fluid">
    <?php
    if(!empty($_POST) )
    {
      $con = mysql_connect('localhost','root','rakal7shakal7');

      if (!$con)
      {
        die('Could not connect: ' . mysql_error());
      }

      mysql_select_db('support', $con);

     
      $vopros = mysql_real_escape_string($_POST['vopros']);
      $otvet = mysql_real_escape_string($_POST['otvet']);
      


      $query = "
      INSERT INTO `support`.`hikvision_questions` (`Vopros`, `Otvet`) VALUES ('$vopros', '$otvet')";
      mysql_query($query);

      
      echo '<h1>Вопрос отправлен в базу данных! </h1>';
      echo '<h2><a href="hikvision.php"><span class="glyphicon glyphicon-circle-arrow-left"></span>Написать еще</a></h2>';
    }
    ?>
    </div>
  </body>
</html>