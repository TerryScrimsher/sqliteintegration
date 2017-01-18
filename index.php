<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('example.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }

   $sql =<<<EOF
      SELECT * from COMPANY;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "<br>";
      echo "NAME = ". $row['NAME'] ."<br>";
      echo "ADDRESS = ". $row['ADDRESS'] ."<br>";
      echo "SALARY =  ".$row['SALARY'] ."<br><br>";
   }
   echo "Operation done successfully\n";
   $db->close();

?>

<div>
	<a href="https://www.tutorialspoint.com/sqlite/sqlite_php.htm">tutorialspoint.com/sqlite</a>
</div>