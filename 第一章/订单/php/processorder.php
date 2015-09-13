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
?>

<html>
<head>
        <meta charset = "utf-8" />
        <title>订单处理结果</title>
</head>
<body>
        <h1>请确认你的订单</h1>
   			<?php

	        if (true) {
	        	echo 'hello';

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

       		 ?>
</body>
</html>
              