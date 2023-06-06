<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use Conf\connectionString;
    $obj = new connectionString();
    $db = new Database ($obj->db);
    $conn = $db->getConnection('mysql');

?>