<?php
    //  var_dump($_POST);
    //  exit();
    $d = date("Y年m月d日");
    $num1 = $_POST['num1'];
    $type1 = $_POST['type1'];
    $num2 = $_POST['num2'];
    $type2 = $_POST['type2'];
    $array = array("$d", "筋トレを", "$num1", "$type1", "読書を","$num2", "$type2");// データ受け取り// スペース区切りで最後に改行
    $file = fopen('data.csv', 'a'); // ファイルを開く 引数はa
    fputcsv($file, $array);
    // flock($file, LOCK_EX);
    // fwrite($file, $array);// データに書き込み，
    // flock($file, LOCK_UN);// ロック解除

    fclose($file);// ファイルを閉じる
    header("Location:diary_post.php"); // 入力画面に移動


