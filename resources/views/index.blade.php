@extends('layouts.master')
@include('components.footer')

@section('title', '宝贝计划')
@section('style')
	<style type="text/css">
		.goods{
			width: 100%;
			height: 70px;
			background: #d9d9d9;
			color: gold;
			text-align: center;
			padding-top: 10px;
			font-size: 2em;
			margin-top: 3px;
			border-radius: 5px;
			border: solid 0.5px gold;
		}
		.backimg1{
			background: url(http://s.amazeui.org/media/i/demos/bing-1.jpg);
			background-size: 100%;
		}
		.backimg2{
			background: url(http://s.amazeui.org/media/i/demos/bing-2.jpg);
			background-size: 100%;
		}
		.backimg3{
			background: url(http://s.amazeui.org/media/i/demos/bing-3.jpg);
			background-size: 100%;
		}
	</style>
@endsection

@section('content')
     <div data-am-widget="slider" class="am-slider am-slider-a5" data-am-slider='{&quot;directionNav&quot;:true}' >
	  <ul class="am-slides">
	      <li>
	        	<img src="http://s.amazeui.org/media/i/demos/bing-1.jpg">
	         
	      </li>
	      <li>
	        	<img src="http://s.amazeui.org/media/i/demos/bing-2.jpg">
	         
	      </li>
	      <li>
	        	<img src="http://s.amazeui.org/media/i/demos/bing-3.jpg">
	         
	      </li>
	      <li>
	        	<img src="http://s.amazeui.org/media/i/demos/bing-4.jpg">
	         
	      </li>
	  </ul>
	</div>
	<div class="goods backimg1">
		一盒（马上发货）
	</div>
	<div class="goods backimg2">
		一个季度（预约）
	</div>
	<div class="goods backimg3">
		一年（预约）
	</div>
@endsection
