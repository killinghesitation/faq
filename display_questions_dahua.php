<?php
      $con = mysql_connect('localhost','root','rakal7shakal7');
       
      if (!$con)
      {
        die('Could not connect: ' . mysql_error());
      }
       
      mysql_select_db("support", $con);



      $comments = mysql_query("SELECT * FROM `dahua_questions`");


      echo mysql_num_rows($comments);
      while($row = mysql_fetch_assoc($comments))
      {
        $vopros = $row['vopros'];
        $otvet = $row['otvet'];
        echo '<div class="panel panel-default">
            <div class="panel-heading">' . $vopros . '</div>
            <div class="panel-body">' . $otvet . '</div>
          </div>';
      }
?>