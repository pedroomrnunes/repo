<?php
  $filename = "MyMovies.docx";
  header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
  header("Content-Disposition: attachment; filename='$filename'");
  ob_clean();
  readfile("$filename");
  if(file_exists($filename)){
    unlink("MyMovies.docx"); // delete the file
  }

  
  ?>