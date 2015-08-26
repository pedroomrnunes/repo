<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>


<body>


<h1> Export as a Formated Word 2007 file </h1>
<!-- TUTORIAL 
     https://msdn.microsoft.com/en-us/library/ee840137(v=office.12).aspx 
     
    1. Create XML Data, Word Templat .docx
    2. Create a template Word 2007 .docx e rename to .zip
    3. Open document.xml in directory word in the zip file
    4. Put document.xml with the XLS Expressions and put the xls tags in the header and rename to .xslt
    5. Configure php.ini : enable php_xls.dll
    6. Use the php code of openXML.php for create the new updated word docx
-->

<div id=contenter">
    <form action="openXml.php" method="post">
   
    <button name="exportword" type="submit"> Export File Word</button>
   </form><br>
  
</div>



</body>
</html>