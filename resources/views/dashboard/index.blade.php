
@if(Auth::user()->roles()->first()->name == 'admin')  
    @include('dashboard.adminContent')
    {{Auth::user()->name}}
	
@elseif(Auth::user()->roles()->first()->name == 'user') 
	@include('dashboard.userContent')
	{{Auth::user()->name}}
@endif