<?php
// 最初に必ずやること <?php
// var_dump($_POST);
// exit();
// データの受信
$done1 = $_POST['done1']; // 送信元ファイルのname属性を指定 
$num1 = $_POST['num1'];
$type1 = $_POST['type1'];
$d = date("Y年m月d日");


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo表示画面（POST）</title>
</head>

<body>
  <fieldset>
    <legend>todo表示画面（POST）</legend>
    <table>
      <thead>
        <tr>
          <th>日付</th>
          <th>何を</th>
          <th>どのくらい</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?=$d?></td>
          <td><?=$done1?></td>
          <td><?=$num1?></td>
          <td><?=$type1?></td>
          <td>やりました！！頑張りました！</td>

        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>