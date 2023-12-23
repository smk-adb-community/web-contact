<?php
class DBConnection extends SQLite3
{
   public function __construct()
   {
      $this->open(__DIR__ . '/../web_contact.db');
   }
}

$db = new DBConnection();
if (!$db) {
   echo $db->lastErrorMsg();
   exit();
}

// Setelah tabel dibuat, silahkan komentar lagi baris kode berikut:

// $sql =<<<SQL
// CREATE TABLE "contacts" (
// 	"id"	INTEGER NOT NULL,
//    "fullName" TEXT NOT NULL,
//    "phoneNumber" TEXT NOT NULL,
//    "email" TEXT,
//    "address" TEXT,
//    "organization" TEXT,
// 	PRIMARY KEY("id" AUTOINCREMENT)
// );
// SQL;

// $res = $db->exec($sql);

// if ($res) {
//    echo "Table contact is created!";
//    die();
// }