<?php
// データベース接続情報
$servername = "db";
$username = "test_user";
$password = "test_pass";
$dbname = "test_php";

$pdo = new PDO("mysql:host=db;dbname=test_php", $username, $password);
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$unbufferedResult = $pdo->query("SELECT Name FROM City");
foreach ($unbufferedResult as $row) {
    echo $row['Name'] . PHP_EOL;
}

// 取得したデータを表示
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "データ: " . $row["column_name"] . "<br>";
    }
} else {
    echo "データがありません";
}

// 接続を閉じる
$conn->close();
?>