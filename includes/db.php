
<?php

//heroku new workbench db login info


 ob_start();

$db['db_host'] = 'us-cdbr-east-03.cleardb.com';
$db['db_user'] = 'be39eaf3c75d71';
$db['db_pass'] = '1899deee';
$db['db_name'] = 'heroku_7ab2c3ff5662d91';

foreach ($db as $key => $value) {
    # code...
    define(strtoupper($key), $value);
}

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/////////////////////////////////////

// ob_start();
//
//$db['db_host'] = 'localhost';
//$db['db_user'] = 'root';
//$db['db_pass'] = '';
//$db['db_name'] = 'Cms';
//
//foreach ($db as $key => $value) {
//	# code...
//	define(strtoupper($key), $value);
//}
//
//  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//
// if($connection){
//
// 	echo "connected";
// }


//Get Heroku ClearDB connection information
//$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$cleardb_server = $cleardb_url["host"];
//$cleardb_username = $cleardb_url["user"];
//$cleardb_password = $cleardb_url["pass"];
//$cleardb_db = substr($cleardb_url["path"],1);
//$active_group = 'default';
//$query_builder = TRUE;
//// Connect to DB
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
// if(!$conn){
//
// 	die("failed connection".mysqli_error($conn));
// }

?>