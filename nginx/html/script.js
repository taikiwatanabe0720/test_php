// データベースへの書き込み関数
function writeToDatabase() {
    var inputData = document.getElementById("data-input").value;

    // PHPファイルにデータを送信
    fetch('write.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'data=' + inputData,
    })
    .then(response => response.text())
    .then(data => {
        // データベースへの書き込みが成功した場合の処理
        console.log(data);
        readFromDatabase(); // データベースからデータを読み込み
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}

// データベースからの読み込み関数
function readFromDatabase() {
    // PHPファイルからデータを取得
    fetch('read.php')
    .then(response => response.text())
    .then(data => {
        // データを表示するエリアに取得したデータを表示
        document.getElementById("data-display").innerHTML = data;
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}

// ページ読み込み時にデータベースからデータを読み込む
document.addEventListener('DOMContentLoaded', function () {
    readFromDatabase();
});
