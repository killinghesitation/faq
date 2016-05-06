<!DOCTYPE html> 
  <head> 
    <title>Другие вопросы</title>
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
      <!--NAVBAR-->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="http://viatec.com.ua" target="_blank">Viatec.com.ua <span class="glyphicon glyphicon-home"></span></a>
          </div>
          <ul id="top" class="nav navbar-nav">
            <li><a href="index.html">FAQ</a></li>
            <li><a href="zashita.html">Степень защиты</a></li>
            <li><a href="resolutions.html">Таблица разрешений</a></li>
            <li><a href="guides.html">Видео-гайд|Обзор</a></li>
            <li><a href="hikvision.php">Hikvision</a></li>
            <li><a href="dahua.php">Dahua</a></li>
            <li class="active"><a href="other.php">Другие вопросы</a></li>
          </ul>
        </div>
      </nav>
      <!--END NAVBAR-->
      <div>
        <h2>Другие вопросы</h2>          
        <?php 
        include("display_questions_other.php"); 
        ?>

        <?php 
        include("formcode_other.php");
        ?>
        <div id="bot"></div>
        <div class="draqon"> 
          <div class="draq"><a href="#top"><span class="glyphicon glyphicon-arrow-up"></span></a></div>
          <div class="draq1"><a href="#bot"><span class="glyphicon glyphicon-arrow-down"></span></a></div>
        </div>
      </div>
    </div>
  </body>
</html>