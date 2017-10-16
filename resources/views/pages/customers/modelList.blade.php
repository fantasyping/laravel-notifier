@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
  			<div class="main-section">
  				<span>Step 1/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		      	<div class="row model-list">
			      	<div class="col-md-6">
			          	<div class="clearfix">
			         		<img src="{{asset('images/model-s.png')}}">
			         		<a href="{{ URL::to('/new/1/create') }}"><h2>Model S</h2></a>
			          	</div>
			        </div>
			        <div class="col-md-6">
			          	<div class="clearfix">
			         		<img src="{{asset('images/model-x.png')}}">
			         		<a href="{{ URL::to('/new/2/create') }}"><h2>Model x</h2></a>
			          	</div>
		        	</div>	
		      	</div>
		       	
     		</div>
    	</div>
    </div>
</div>
@endsection