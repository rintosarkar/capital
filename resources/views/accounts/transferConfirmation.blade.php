@extends('layouts.adminMaster')

@section('style')
<link href="/css/custom.css" rel="stylesheet">
<style type="text/css">
	#r2w, #r2r, #w2w {
		text-align: center;
	}
</style>
@endsection

@section('page-heading')
{{-- <div class="page-heading">
	<h3>
		Internal Transfer
	</h3>
	<ul class="breadcrumb">
		<li>
			<a href="#">User Dashboard</a>
		</li>
		<li class="active"> internal transfer </li>
	</ul>
</div> --}}
@endsection

@section('body-content')

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-md-offset-1">
					
					@if($confirmVar)
						@foreach($confirmVar as $confirm)
							
						<div class="confirm-head">
							<p> <span class="cicon pull-left"><i class="fa fa-check-circle-o fa-2x"></i></span> Your Balance Transfer was processed Successfully</p>
						</div>
						<div class="confirm-body">
							<div class="confirm-field">
								<p class="confirm-title">Balance Transfer Information</p>
							</div> 

							<div class="confirm-field">
								<p>Date</p>
								<p class="pull-right"><strong>{{ $confirm->date }} </strong></p>
							</div>
							<div class="confirm-field">
								<p>Transaction ID</p>
								<p class="pull-right"><strong>{{ $confirm->tnx_id }} </strong></p>
							</div>
							<div class="confirm-field">
								<p>Amount</p>
								<p class="pull-right"><strong>{{ '$' .number_format($confirm->amount, 2, '.', ',') }} </strong></p>
							</div>
							@if( $confirm->proce_fee == 0)
							   @if($receiver)
							   <div class="confirm-field">
							   	<p>Receiver</p>
							   	<p class="pull-right"><strong>{{ $receiver }} </strong></p>
							   </div>
							   @endif
							@endif   
							
							<div class="confirm-field">
								<p>Processing Fee</p>
								@if( $confirm->proce_fee != 0 )
									<p class="pull-right"><strong>{{ $confirm->proce_fee }} </strong></p>
								@else
									<p class="pull-right"><strong>{{ 'Free' }} </strong></p>
								@endif		
							</div> 
							<div class="confirm-field">
								<p>Total Charge</p>
								@if( $confirm->proce_fee != 0 )
									<p class="pull-right"><strong> {{ '$' . ($confirm->amount + $confirm->proce_fee) }} </strong></p>
								@else
									<p class="pull-right"><strong>{{ '$' . number_format($confirm->amount, 2, '.', ',') }} </strong></p>
								@endif
								</p>
							</div> 
						</div>
							
						@endforeach
					@endif
				</div>
			</div>
		    

		</div>
	</div> 
@endsection

	@section('script')
	
	{!! Html::script('js/custom/balanceTransfer.js') !!}
	@endsection
