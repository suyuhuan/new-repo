<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title>百度糯米-订单页</title>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/buy.css" />
	<script src="/nuomi/Public/home/js/jquery.js"></script>
</head>
<body>
	<div id="header">
		<div class="containter">
			<div class="user-info">
				<a href="/nuomi/index.php/order">我的订单</a>
				<span class="separate">|</span>
				<a href="">收藏夹</a>
				<span class="separate">|</span>
				<span class="car"><a href="">购物车</a></span>
				(<span class="car-num">1</span>)
			</div>
			<div class="login-info">
				用户名，您好
				<span class="separate">|</span>
				<a href="">退出</a>
			</div>			
		</div>	
		<div class="imgs"></div>
	</div>

	<div class="containter">
		<div id="tracking-progress">
			<div class="logo-wrap">
				<a href=""><img src="/nuomi/Public/home/images/index-logo.jpg" /></a>
			</div>
			<div class="progress">
				<a href=""><img src="/nuomi/Public/home/images/2015-11-16_212344.jpg" /></a>
			</div>
		</div>
	</div>
<form action="/nuomi/index.php/Getorder/getorder" method="POST" id="form">
<div class="table">
	<div class="table-wrap">
	  	<input type="hidden" name="goods_id" value="<?php echo ($_POST['id']); ?>">
	  	<input type="hidden" name="price" value="<?php echo ($_POST['price']); ?>">
	  	<input type="hidden" name="img" value="<?php echo ($_POST['img']); ?>">
	  	<input type="hidden" name="name" value="<?php echo ($_POST['name']); ?>">
		<table class="table-goods" cellspacing=0 cellpadding=0>
			<tr>
				<th class="first">商品</th>
				<th width="120">单价</th>
				<th width="190">数量</th>
				<th width="140">优惠</th>
				<th class="last" width="140">小计</th>
			</tr>	
			
			<tr>
				<td class="vtop">
					<div class="title-area">
						<div class="img-wrap">
							<a href=""><img src="/nuomi/Public/<?php echo ($_POST['img']); ?>"></a>
						</div>
						<div class="title-wrap">
							<div class="title">
								<a class="link" href="">【<?php echo ($_POST['name']); ?>】<?php echo ($_POST['descr']); ?>
								</a>
							</div>
						</div>
					</div>

				</td>
				<td class="font14"><?php echo ($_POST['price']); ?></td>
				<td class="j-cell">
					<div class="buycount">
						<a onclick="decr(this)">-</a>
						<input class="num" name="number" value="<?php echo ($_POST['num']); ?>" >
						<a onclick="incr(this)">+</a>
					</div>
				</td>
				<td>-&yen;0.00</td>
				<td class="price font14">
					&yen;
					<span class="sumPrice"><?php echo ($_POST['price']*$_POST['num']); ?></span>
				</td>
			</tr>
		  </foreach>
		</table>
	 
		<div class="voucher-row">
			<div class="voucher">
				<span class="checkbox"></span>
				<label>使用抵用券</label>
				<span class="price">-&yen;
					<span>0.00</span>
				</span>
			</div>
			<div class="available">
				(可用
				<span>0</span>
				张)
			</div>
		</div>
		<div class="final-price-area">
			应付总额:
			<span class="sum">
				&yen;
				<span class="price" id="price"><?php echo ($_POST['price']*$_POST['num']); ?></span>
			</span>
		</div>
		<div class="page-button-wrap">
			<a class="link" href="">返回上一步</a>
			<a class="btn btn-primary" href="javascript:sub()">确认</a>
		</div>
	</div>
</form>
</div>

<div id="footer">
	<div class="w">
		<div class="links">
			<a class="link" href="">关于百度糯米</a>
			<span>|</span>
			<a class="link" href="">常见问题</a>
			<span>|</span>
			<a class="link" href="">违规投诉&廉政举报</a>
			<span>|</span>
			<a class="link" href="">开放平台</a>
			<span>|</span>
			<a class="link" href="">用户协议</a>
			<span>|</span>
			客服电话:
			<span class="tel">4006-888-887</span>
			(每天9:00-22:00)
		</div>

		<div class="site-info">
			©2015 nuomi.com 
			<a class="link" target="_blank" href="">京ICP证030173号</a> 京公网安备11010802014106号  <a class="link" href="" target="_blank">互联网药品信息服务资格证编号（京-经营性-2011-0009）</a> </div>
	</div>
</div>
</body>
<script>
	
		
		/*计算 数量 * 单价*/

		function sumprice(){

		var number = $(".num").val();	
		var oneprice = $(".font14").html();
		var sumprice = (number * oneprice);	
		$(".sumPrice").text(sumprice);
		$("#price").text(sumprice);
	}

	/*减 */
		function decr(obj){
			
			num=$(obj).next().val();
			
			if(num!=1){
				num--;
				$(obj).next().val(num);
			}	
			return sumprice();
		}

		/*加*/
		function incr(obj){
			num=$(obj).prev().val();

			num++;

			$(obj).prev().val(num);	

			return sumprice();
		}

		$(".num").keyup(function(){

			return sumprice();
		})

		function sub(){
			$('#form').submit();
	}

 	
</script>






		
</script>
</html>