{{-- 显示错误 --}}
@section('style')
	@parent
	<style type="text/css">
		footer{
			position: fixed;bottom: 0;left: 0;
			background: #d9d9d9;
			width: 100%;
			height: 49px;
		}
		footer ul {
		  	margin: 0;padding: 0;
		  	border-top: 1px solid #c0c0c0;
		  	font-size: 16px;
		}
		footer ul li {
			line-height: 49px;
			text-align: center;
		}
		footer ul li:hover {
		  	background: #d9d9d9;
		}
		footer ul li:active {
			background: #d9d9d9;
		}
		footer ul li a:visited {
			color: #353535;
		}
		footer ul li a {
		  	color: #353535;
		}
		footer ul li + li {
		  	border-left: 1px solid #c0c0c0;
		}
	</style>
@endsection

@section('footer')
<footer>
	<ul class="am-avg-sm-3">
		<li class=""><a href="/">立即购买</a></li>
		<li class=""><a href="/qrcode">二维码</a></li>
		<li class=""><a href="/profile">个人中心</a></li>
	</ul>
</footer>
@endsection
