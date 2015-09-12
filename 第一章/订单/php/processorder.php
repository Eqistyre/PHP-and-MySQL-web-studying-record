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
?>
<html>
<head>
	<meta charset = "utf-8" />
	<title>订单处理结果</title>
</head>
<body>
	<h1>请确认你的订单</h1>
	<?php
		echo '<p> 总计</p>';
		echo $kaFei.'咖啡</br>';
		echo $jiDing.'宫爆鸡丁</br>';
		echo $huiGuo.'回锅肉</br>';
		echo '价格：'.$jiaGe.'元</br>' ；
	?>
</body>
</html>
