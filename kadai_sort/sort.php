<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array,$order){

        if($order == TRUE){
        sort($array);

        $arraylength = count($array);

        echo '昇順にソートします。<br>';

        for($i=0;$i < $arraylength; $i++){
          echo $array[$i];
          echo '<br>';
        }
      }

      else{
        rsort($array);
        echo '降順にソートします。<br>';
        $arraylength = count($array);

        for($i=0;$i < $arraylength; $i++){
          echo $array[$i];
          echo '<br>';
        }
      }
    }

        sort_2way($nums,TRUE);
        sort_2way($nums,FALSE);
        
        ?>
    </p>
</body>

</html>
