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
	      	<div class="col-xs-6 col-md-offset-3 alert-itemlist">
		        <div class="col-md-12">
		          	<span>Step 2/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>

		          	<h3>Desired Trim(s)</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>75D</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>90D</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>D90D</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>100D</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>P100D</span>
			            </label>
		          	</div>

		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" id="next1" disabled>Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-2">
	      	<div class="col-xs-6 col-md-offset-3 alert-itemlist">
		        <div class="col-md-12">
		          	<span>Step 3/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	<h3>Desired Seats</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>5 Seat Configuration</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>6 Seat Configuration</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>7 Seat Configuration</span>
			            </label>
		          	</div>
		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" id="next2" disabled>Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-3">
	      	<div class="col-xs-6 col-md-offset-3 alert-itemlist">
		        <div class="col-md-12">
		          	<span>Step 4/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	<h3>Required Package(s)</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Premium Upgrades Package</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Subzero Weather Package</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Ultra High Fidelity Sound</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Smart Air Suspension</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>High Amperage Charger</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Towing Package</span>
			            </label>
		          	</div>
		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" id="next3" disabled>Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-4">
	      	<div class="col-xs-6 col-md-offset-3 alert-itemlist">
		        <div class="col-md-12">
		          	<span>Step 5/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	<h3>Desired Color(s)</h3>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Blue</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Black</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>White</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Silver</span>
			            </label>
		          	</div>
		          	<div class="form-check">
			            <label class="form-check-label">
			            	<input type="checkbox" class="form-checkbox-input" name="" value="">
			            	<span>Red</span>
			            </label>
		          	</div>
		          	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" id="next4" disabled>Next</button>
		        </div>
	      	</div>
	    </div>
	    <div class="row setup-content" id="step-5">
	      	<div class="col-xs-6 col-md-offset-3 alert-itemlist">
		        <div class="col-md-12">
		          	<span>Step 6/6 
		          		<span style="font-size: 30px; padding-left: 25px;"><strong>Create a Deal Alert</strong></span>
		          	</span>
		          	
		          	<input type="hidden" autofocus="true" name="">
		          	<div class="form-check row" style="margin-top: 100px;">
		          		<div class="col-md-6">
		          			<span>Minimum Price Adjustment:</span>
		          		</div>
		          		<div class="col-md-6">
		          			<div class="col-md-4">
		          				<span style="position: absolute; left: 0;">$</span>
		          				<output id="rangeSuccess1" for="priceA" style="padding-top: 0;">15000</output>
		          			</div>
				            <div class="col-md-8">
				            	<input type="range" id="priceA" name="range" min="000" max="200000" value="15000"  onchange="rangeSuccess1.value=value">
				            </div>
				            	
		          		</div>
		          	</div>
		          	
		          	<div class="form-check row">
		          		<div class="col-md-6">
		          			<span>Minimum Price(before tax credit):</span>
		          		</div>
		          		<div class="col-md-6">
			          		<div class="col-md-4">
			          			<span style="position: absolute; left: 0;">$</span>
		          				<output id="rangeSuccess2" for="priceB" style="padding-top: 0;">100000</output>
		          			</div>
				            <div class="col-md-8">
				            	<input type="range" id="priceB" name="range" min="" max="200000" value="100000"  onchange="rangeSuccess2.value=value">
				            </div>	
		          		</div>
			            
			            
		          	</div>
		          	<a href="/" class="btn btn-success submitBtn btn-lg pull-right" type="submit">Submit</a>
		        </div>
	      	</div>
	    </div>
  	</form>
  
</div>

@endsection