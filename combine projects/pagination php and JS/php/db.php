<?php
// $dbhost = "localhost";
// $dbname = "pagination";
// $dbuser = "root";
// $dbpass = "";

// try{
// $pdo = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
// }catch(PDOException $e){ $error_message = $e-> getMessage();
//     echo $error_message;
// exit();
// }

// https://generatedata.com/generator

define("DB_HOST", "localhost");
define("DB_NAME", "pagination");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

try {
    $pdo = new PDO (
       "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET."", DB_USER, DB_PASSWORD, [
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
       ]
       );
} catch (Exception $th) {
    exit ($th->getMessage());
}

$perPage = 10;
$stmt = $pdo->prepare("SELECT COUNT(*) FROM `mytable`"); // inverted comma
$stmt->execute();
$entries = $stmt->fetchColumn();
$totalPage = ceil($entries / $perPage);

$paginate = isset($_GET["page"]) ? $_GET["page"] : 1;
$x = ($paginate - 1) * $perPage;
$y = $perPage;

$sql = "SELECT * FROM `mytable` ORDER BY `id` LIMIT $x, $y"; // x=offet and y=rowCount
$stmt = $pdo->prepare($sql);
$stmt->execute();
$username = $stmt->fetchAll();

?>
<ul>
    <?php
        foreach ($username as $u) {
            printf("<li>%u %s</li>", $u["id"], $u["name"]);
        }
    ?>
</ul>

<div id="db">
    <?php
        for($i=1; $i<=$totalPage; $i++){
            printf("<a style='padding: 5px; text-decoration: none' href='db.php?page=%u'>%u</a>",
            $i, $i);
        }
    ?>
</div>