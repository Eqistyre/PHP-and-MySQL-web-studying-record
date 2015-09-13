<?php
        //creat variable name
        define('KAFEI', 5);
        define('JIDING', 10);
        define('HUIGUO', 8);
        $jiaGe = 0.00;
        $kaFei = $_POST['kaFei'];
        $jiDing = $_POST['jiDing'];
        $huiGuo = $_POST['huiGuo'];
        $jiaGe = $kaFei * KAFEI
               + $jiDing * JIDING
               + $huiGuo * HUIGUO;
        $date = date('H:i,jS F Y');

        //获取目录
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>

<html>
<head>
        <meta charset = "utf-8" />
        <title>订单处理结果</title>
</head>
<body>
        <h1>请确认你的订单</h1>
   			<?php

	        if ($jiaGe > 0) {

	                echo '<p> 总计</p>';

	                if ($kaFei > 0) {
         			   	echo $kaFei.'咖啡</br>';
	                }

	                if ($jiDing > 0) {
	                	echo $jiDing.'宫爆鸡丁</br>';
	            	}

	            	if ($huiGuo > 0) {
	                	echo $huiGuo.'回锅肉</br>';
	            	}

	                echo '价格：'.$jiaGe.'元</br>';

	                 echo "<p>订单创建于".date('H:i,jS F Y')."</p>";

	            }
	        	else {
	        		echo '你没有购买任何物品';
	        	}


	        	$outputstring = $date."\t".$kaFei." 咖啡 \t".$jiDing." 鸡丁 \t".$huiGuo." 回锅肉 总计\t".$jiaGe."元\t\n";

       		 	// 打开文件
       		 	@ $fp = fopen("$DOCUMENT_ROOT/orders/orders.txt",'ab');

       		 	flock($fp, LOCK_EX);

       		 	if (!$fp) {
       		 		echo "<p><strong> 您的订单未被提交，请下次尝试。</strong></p></body></html>";

       		 		exit;
       		 	}

       		 	fwrite($fp, $outputstring, strlen($outputstring));
       		 	flock($fp,LOCK_UN);
       		 	fclose($fp);

       		 	echo "<p>订单确认</p>";

       		 ?>
</body>
</html>
              