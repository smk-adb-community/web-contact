<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('./config/web_contact.db');
      }
   }

   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }
?>