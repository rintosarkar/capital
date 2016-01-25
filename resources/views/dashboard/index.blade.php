
@if(Auth::user()->roles()->first()->name == 'admin')  
    @include('dashboard.adminContent')
    {{-- <h1>	{{Auth::user()->name}} </h1> --}}
	
@elseif(Auth::user()->roles()->first()->name == 'user') 
	@include('dashboard.userContent')
	{{-- {{Auth::user()->name}} --}}
@endif