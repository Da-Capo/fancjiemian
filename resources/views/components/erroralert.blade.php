{{-- 用于显示服务器返回的错误 直接在模板中include--}}
@if($errors->first('message'))
<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
	<div class="am-modal-dialog">
		<div class="am-modal-hd">
			温馨提示
		</div>
		<div class="am-modal-bd">
			<span id="errorlog"> {{{$errors->first('message')}}}</span>
		</div>
		<div class="am-modal-footer">
			<span class="am-modal-btn">确定</span>
		</div>
	</div>
</div>
@section('script')
<script type="text/javascript">
    $('#my-alert').modal('open');
</script>
@endsection
@endif
