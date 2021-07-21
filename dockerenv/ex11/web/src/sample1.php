<?php
print('ただいまの日時は、'.date("Y-m-d H:i:s").'です🐱<br>');

# info of connect
$dbname = 'postgres';
$host = 'ex11_db';
$dbuser = 'postgres';
$dbpass = 'postgres';

try{
    # connect db
    $dbh = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);
    print('正常に接続しました<br>');

    print('sysid, ユーザ名<br>');

    # execute query and disp all users
    $sql = 'select * from pg_user';
    foreach ($dbh->query($sql) as $row){
        print($row['usesysid'] . ', ');
        print($row['usename'] . '<br>');

    }
}catch (PDOException $e){
    print('error: ' . $e-> getMessage() );
    exit();

}
?>