@extends('layouts.master')
@include('components.footer')

@section('title', '个人中心')
@section('style')
	<style type="text/css">
		a{
		color: #000000;
		}
		.profile-top{
		position: relative;
		width: 100%;
		}
		.profile-top-background{
		width: 100%;
		}
		.profile-top-avatar{
		position: absolute;
		right: 11.4%;
		top: 24.2%;
		border-radius: 50%;
		width: 22.3%;
		}
		.profile-top-username{
		position: absolute;
		color: #FFFFFF;
		font-size: 1em;
		left: 15px;
		bottom: 9%;
		}
		.profile-top-userno{
		position: absolute;
		color: #FFFFFF;
		font-size: 14px;
		right: 120px;
		bottom: 0;
		}
		.profile-top-shl{
		position: absolute;
		color: #FFFFFF;
		font-size: 14px;
		right: 20px;
		bottom: 0;
		}
	</style>
@endsection

@section('content')
	<div class="profile-top">
		<img class="profile-top-background" src="http://s.amazeui.org/media/i/demos/bing-3.jpg"/>
		<img class="profile-top-avatar" src="{{{$user->headimgurl}}}"/>
		<span class="profile-top-username">
			{{{ $user->nickname or $user->name }}}
		</span>
		<span class="profile-info">
		</span>
	</div>
	<ul class="am-list am-list-border">
		<li>
			<a href="/refereenote"><i class="am-icon-users am-icon-fw"></i>
				门下弟子<span class="am-fr am-danger">{{{ $user->refernum }}}<i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a href="/showproductreferee"><i class="am-icon-users am-icon-fw"></i>
				两蛋一鸡弟子<span class="am-fr am-danger">{{{ $user->product_referee_num(); }}}<i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a href="/wxcharge"><i class="am-icon-rmb am-icon-fw"></i>
				充值<span class="am-fr"><i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a><i class="am-icon-credit-card am-icon-fw"></i>
				余额<span class="am-fr am-danger">{{{ $user->balance }}}</span>
			</a>
		</li>
		<li>
			<a href="/showmyqrcode"><i class="am-icon-qrcode am-icon-fw"></i>
				我的二维码<span class="am-fr am-danger"><i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
	</ul>
	<ul class="am-list am-list-border">
		<li>
			<a href="/referee"><i class="am-icon-group am-icon-fw"></i>
				师傅番号<i class="am-icon-star am-text-danger am-icon-fw"></i><span class="am-fr">{{{ $user->referee; }}}<i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a><i class="am-icon-group am-icon-fw"></i>
				两蛋一鸡师傅番号<i class="am-icon-star am-text-danger am-icon-fw"></i><span class="am-fr">{{{ $user->product_referee?$user->product_referee:"暂无"; }}}<i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a href="/phone"><i class="am-icon-phone-square am-icon-fw"></i>
				手机号码<i class="am-icon-star am-text-danger am-icon-fw"></i><span class="am-fr">{{{ $user->phone; }}}<i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a href="/orders"><i class="am-icon-reorder am-icon-fw"></i>
				我的订单<span class="am-fr"><i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
		<li>
			<a href="/email"><i class="am-icon-envelope am-icon-fw"></i>
				电子邮箱<span class="am-fr">{{{ $user->email; }}}<i class="am-icon-chevron-right am-icon-fw"></i></span>
			</a>
		</li>
	</ul>

	<ul class="am-list am-list-static am-list-border">
		<li>
			<i class="am-icon-truck am-icon-fw"></i>
			收货地址
			<span class="am-fr">
				<a href="address?redirect_to=/profile"><i class="am-icon-plus am-icon-fw"></i></a>
			</span>
		</li>
		@foreach($addressees as $addressee)
		<li>
			<span class="am-text-sm">
				{{{ $addressee->address }}}<br>
				收件人：{{{ $addressee->name }}}<br>
				电话：{{{ $addressee->phone }}}
			</span>
			<span class="am-fr">
				<a href="/address/{{{ $addressee->id;}}}/delete"><i class="am-icon-trash am-icon-fw"></i></a>
			</span>
		</li>
    @endforeach
	</ul>
@endsection
