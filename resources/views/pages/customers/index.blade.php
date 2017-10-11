@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
  			<div class="main-section">
		      	<h1>Create a Deal Alert</h1>
		      	<div class="row model-list">
			      	<div class="col-md-6">
			          	<div class="clearfix">
			         		<img src="{{asset('images/model-s.png')}}">
			         		<a href="{{ URL::to('/alert/1') }}"><h2>Model S</h2></a>
			          	</div>
			        </div>
			        <div class="col-md-6">
			          	<div class="clearfix">
			         		<img src="{{asset('images/model-x.png')}}">
			         		<a href="{{ URL::to('/alert/2') }}"><h2>Model x</h2></a>
			          	</div>
		        	</div>	
		      	</div>
		       	
     		</div>
    	</div>
    </div>
</div>
@endsection