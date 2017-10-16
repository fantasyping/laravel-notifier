@extends('layouts.default')

@section('content')
<div class="container">
	<div class="stepwizard col-md-offset-3" style="display: none;">
	    <div class="stepwizard-row setup-panel">
	      	<div class="stepwizard-step">
		        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
		        <p>Step 1</p>
	      	</div>
	      	<div class="stepwizard-step">
		        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
		        <p>Step 2</p>
	      	</div>
	      	<div class="stepwizard-step">
		        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
		        <p>Step 3</p>
	      	</div>
	      	<div class="stepwizard-step">
		        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
		        <p>Step 4</p>
	      	</div>

	      	<div class="stepwizard-step">
		        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
		        <p>Step 5</p>
	      	</div>
	    </div>
  	</div>
  
  	<form role="form" action="" method="post" style="text-align: center;">
	    <div class="row setup-content" id="step-1">
	      	<div class="col-xs-6 col-md-offset-3">
		        <div class="col-md-12">
		          	<span>Step 2/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>

		          	<h3>Desired Trim(s)</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	75D
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	90D
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	P90D
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	100D
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	P100D
			            </label>
		          	</div>

		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-2">
	      	<div class="col-xs-6 col-md-offset-3">
		        <div class="col-md-12">
		          	<span>Step 3/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	<h3>Desired Seats</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	5 Seat Configuration
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	6 Seat Configuration
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	7 Seat Configuration
			            </label>
		          	</div>
		          	<button class="btn btn-primary backBtn btn-lg pull-left" type="button" >Back</button>
		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-3">
	      	<div class="col-xs-6 col-md-offset-3">
		        <div class="col-md-12">
		          	<span>Step 4/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	<h3>Required Package(s)</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Premium Upgrades Package
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Subzero Weather Package
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Ultra High Fidelity Sound
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Smart Air Suspension
			            </label>
		          	</div>
		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-4">
	      	<div class="col-xs-6 col-md-offset-3">
		        <div class="col-md-12">
		          	<span>Step 5/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	<h3>Desired Color(s)</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Blue
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Black
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	White
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Silver
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Red
			            </label>
		          	</div>
		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-5">
	      	<div class="col-xs-6 col-md-offset-3">
		        <div class="col-md-12">
		          	<span>Step 6/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>

		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Item 5
			            </label>
		          	</div>
		          	
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	Item 5
			            </label><br />
			            
		          	</div>
		          	<a href="/" class="btn btn-success submitBtn btn-lg pull-right" type="submit">Submit</a>
		        </div>
	      	</div>
	    </div>
  	</form>
  
</div>

@endsection