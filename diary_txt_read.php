<?php
$str = '';
$file = fopen('data.csv', 'r');
flock($file,LOCK_EX);

if($file){
  while($line = fgets($file)){
    $str .= "<tr><td>{$line}しました。</td></tr>";
  }
}

flock($file, LOCK_UN);
fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今日頑張ったこと（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>今日頑張ったこと（一覧画面）</legend>
    <a href="diary_post.php">入力画面</a>
    <table>
      <thead>
        <tr>          
          <th>日付</th>
          <th>何を</th>
          <th>どのくらい</th>
          <th>頑張った</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         <th><?=$str?></th>

        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>