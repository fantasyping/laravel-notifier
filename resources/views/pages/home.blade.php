@extends('layouts.default')

@section('content')
<div class="container main-content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <a href="{{ URL::to('/new/model') }}" class="btn btn-sq-lg content-btns">
                    <img src="{{asset('images/deal-alert.png')}}" class="first-img"><br/><br/>
                    Create a Deal Alert
                </a>
                <a href="#" class="btn btn-sq-lg content-btns">
                    <img src="{{asset('images/ic_notifications.png')}}" class="first-img"><br/><br/>
                    Manage Alert
                  
                </a>
                <a href="#" class="btn btn-sq-lg content-btns">
                    <img src="{{asset('images/account_box.png')}}" class="first-img"><br/><br/>
                    Account Details
                </a>
            </div>
                
        </div>
    </div>
</div>
@endsection