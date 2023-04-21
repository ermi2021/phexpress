<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Util imports
include "./db/connection.php";
require "./db/initialize.php";
include "./util/phexpress.php";


include "./util/helpers/interface/response.php";
include "./model/models.php";
include "./util/helpers/extra/jsonHelper.php";
include "./util/helpers/CacheHub/Cache.php";
include "./util/helpers/CacheHub/cacheHandler.php";
include "./util/helpers/algo/binarySearch.php";
include "./util/helpers/sql/sqlGenerator.php";
include "./util/setting.php";

global $db;
$db = new connect($settings);

$settings["modelController"] ? include "./configuration/schemaMigration.php" : "";
$settings["modelController"] ? include "./db/initialize.php" : "";

//this will create all the tables if they don't exist


//Route imports
include "./routes/student.php";
include "./routes/tracker.php";
include "./routes/User.php";   
 include "./routes/Glucose.php"; 
 include "./routes/TestModel3.php"; 
 include "./routes/TestModel2.php";