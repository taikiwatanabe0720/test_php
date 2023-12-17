<?php
// データベース接続情報
$servername = "db";
$username = "root";
$password = "test";
$dbname = "test_php";

// POSTデータから入力データを取得
$data = $_POST['data'];

// データベースへの接続
$link = mysqli_connect($servername, $username, $password, $dbname);

if (!$link) {
    echo "データベース接続失敗" . PHP_EOL;
    echo "errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo 'データベース接続成功';

// データベースにデータを書き込む
$sql = "INSERT INTO your_table_name (column_name) VALUES ('$data')";
$conn->query($sql);

// 接続を閉じる
$conn->close();

echo "データが書き込まれました";
?>