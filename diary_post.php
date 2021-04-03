<?php
$str = '';
$file = fopen('data.csv', 'r');
flock($file,LOCK_EX);
if($file){
  while($line = fgets($file)){
    $str .= "<tr><td>{$line}をしました。</td></tr>";
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
  <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
  <script src="mychart.js"></script>
  <title>今日のやったことを報告（POST）</title>
</head>

<body>
  <h1>積み上げ確認チャンネル</h1>
  <!-- formにはaction, method, nameを設定！ -->
  <div>
  <form action="diary_txt_create.php" method="post">
    <fieldset>
      <legend>今日はどんなことを行いましたか？</legend>
      <div>
      今日やったこと
      </div>
      <span>
        <p>①筋トレを</p>  <input type="number" name="num1" min="1" max="100" step="1"></input><select name="type1"><option value="分">分</option></select><p>をしました。</p>
      </span>
      <div>
        <p>②読書を</p>
        <input type="number" name="num2" min="1" max="100" step="1"></input>
        <select name="type2">
        <option value="分">分</option>
        </select>
        <p>をしました。</p>
      </div>
      
      <div>
        <button>submit</button>
      </div>
    </fieldset>
   
    <fieldset>
    <legend>今日頑張ったこと</legend>
    <table>
      <thead>
        <tr>          
          <th>日付,何を,どのくらい,頑張った</th>
        </tr>
       
      </thead>
      <tbody>
        <tr>
         <th><?=$str?></th>
         
        </tr>
      </tbody>
    </table>
  </fieldset>
  </form>
<div style="width: 100%; height: 100%;">
  <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
</div>
</body>

</html>