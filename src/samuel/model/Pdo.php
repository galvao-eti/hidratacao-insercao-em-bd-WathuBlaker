<?php
namespace model;
/**
 * Created by IntelliJ IDEA.
 * User: Samuel
 * Date: 26/06/2017
 * Time: 10:53
 */
class Pdo
{
    function __construct($sql)
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=trabalho_pos_2017';
        try {
            $dbh = new \PDO($dsn, 'root', '123');
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }


        $stmt = $dbh->prepare($sql);
        $stmt->execute();
    }
}
$dbh = NULL;