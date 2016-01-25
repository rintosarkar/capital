@extends('layouts.adminMaster')
	
	@section('style')
		<style type="text/css">
			.make-deposit{
				padding:2.5em 0 4em 0;
				/*background: #00ad5a;*/
				margin-bottom: 300px;
				text-align:center;
			}
		</style>
	@endsection

	@section('body-content')
		@if(Session::get('message'))
			<div class="row">
				<div class="col-sm-12 col-md-12">
					
					@if(Session::get('message') == 'You do not have sufficient balance')
						<div class="alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{ Session::get('message') }}
						</div>
					@elseif(Session::get('message') == 'Successfully Activated')
						<div class="alert alert-success fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{ Session::get('message') }}
						</div>
					@elseif(Session::get('message') == 'Request could not processd')
						<div class="alert alert-info fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{ Session::get('message') }}
						</div>
					@elseif(Session::get('message') == 'Successfully Deposited')
						<div class="alert alert-success fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{ Session::get('message') }}
						</div>		
					@endif
					
				</div> 
			</div>
		@endif

		<div class="row">
		 	<div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
		 		<div class="make-deposit">
		 			{!! Form::open(['url'=>'user/makedeposit', 'class'=>'form-horizontal']) !!}
			 					{{-- {!! Form::select('deposit',['300'=>300,'700'=>700,'1000'=>1000, '2000'=>2000, '4000'=>4000,'10000'=>10000],null) !!} --}}

	 						<div class="form-group">
                              <label class="col-md-3 col-sm-3 control-label">Select Deposit Amount</label>
                              <div class="col-md-7 col-sm-7">
	                              <div class="input-group">
	                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
	                                {!! Form::select('deposit',[
	                                '' => '--Select your amount',
	                                '300'=>300,'700'=>700,
	                                '1000'=>1000, '2000'=>2000,
	                                '4000'=>4000,'10000'=>10000], null, ['id'=>'deposit','class'=>'form-control']) !!}
	                              </div>
	                              <span id="errMsgDeposit" class="error-msg"></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 col-sm-3 control-label">Select Payment Method</label>
                              <div class="col-md-7 col-sm-7">
	                              <div class="input-group">
	                                <div class="input-group-addon"><i class="fa fa-cc-mastercard"></i></div>
	                                {!! Form::select('pmethod',[
	                                '' => '--Select payment method',
	                                'wb'=>'Wallet Balance',
	                                'pm'=>'Perfect Money',
	                                ], null, ['id'=>'pmethod','class'=>'form-control']) !!}
	                              </div>
	                              <span id="errMsgPmethod" class="error-msg"></span>
                              </div>
                            </div>
                            <button class="btn btn-info finish">Make Deposit </button>
	 				{!! Form::close() !!} 
		 		</div>
		 	</div>
		 </div> 
	@endsection

	@section('script')
		<script type="text/javascript">

			/*$(function(){
				var deposit = $('#deposit').val();
				var pmethod = $('#pmethod').val();

				$('.finish').prop('disabled',true);
				
				$('input[type="select"]').keyup(function(){
					if(deposit !='' && pmethod != '')
					{
						$('.finish').prop('disabled',false);
					}
				});
				
			});*/
		</script>
	@endsection
