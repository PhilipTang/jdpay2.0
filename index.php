<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>京东支付</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>
	<body>
		
		
		<div class="container">
			<div class="main clearfix">
				<div class="column">
					<p>京东支付Demo--SHOW<br>
                  （1）模拟提交订单<br>
                  （2）模拟申请退款<br>
                  （3）查询信息入口<br>
                  （4）扫码创建订单<br>
                  （5）交易号查退款<br>
                    </p>
				</div>
				<div class="column">
					<button class="md-trigger" id="modal-1">模拟提交订单</button>
					<button class="md-trigger" id="modal-2">模拟申请退款</button>
					<button class="md-trigger" id="modal-3">查询入口</button>
					<br>
	                <button class="md-trigger" id="modal-4">扫码创建订单</button>
	                <button class="md-trigger" id="modal-5">交易号查退款</button>
				</div>
			</div>
		</div><!-- /container -->
<script>
	document.getElementById("modal-1").onclick= function(){
	    window.open("com/jdjr/pay/demo/page/payStart.php");  
	}
	document.getElementById("modal-2").onclick= function(){
	    window.open("com/jdjr/pay/demo/page/refundIndex.php");  
	}
	document.getElementById("modal-3").onclick= function(){
	    window.open("com/jdjr/pay/demo/page/queryIndex.php");  
	}
	document.getElementById("modal-4").onclick= function(){
	    window.open("com/jdjr/pay/demo/page/showCreateOrder.php");  
	}
	document.getElementById("modal-5").onclick= function(){
	    window.open("com/jdjr/pay/demo/page/queryRefundIndex.php");  
	}
 </script>
		

	

</body>

</html>