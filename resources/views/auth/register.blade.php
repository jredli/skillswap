@extends('layouts.page')

@section('content')
     
    <div class="container-fluid login_register header_area deximJobs_tabs">
    	<div class="row">
            <div class="container main-container-home">
                    <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-pills ">
                            <li class="active"><a data-toggle="tab" href="#register-account">Register</a></li>
                           
                        </ul>

                    <div class="tab-content">

<div id="register-account" class="tab-pane fade white-text active in">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<p>Login to your Recruiter account.</p>
                                
                               {{ !! Form::open(['url' => 'register', 'method' => 'POST']) !! }}
                                
                                        <form name="contact_us" class="contact_us" method="POST" action="{{ route('register') }}">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" id="password">
                                            </div>
                                             <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="cpassword" id="cpassword">
                                            </div>
                                   
                                             <div class="form-group">
                                                <label>I'm looking</label>
                                                <div class="dropdown">
                                                        <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Category
                                                        <span class="glyphicon glyphicon-menu-down"></span>
                                                        </button>
                                                    
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                     <ul class="tiny_scrolling" id="style-3">
                                                            <li><a href="#">Web Developer</a></li>
                                                            <li><a href="#">Graphic designer</a></li>
                                                            <li><a href="#">Developer</a></li>
                                                            <li><a href="#">UX Designer</a></li>
                                                             <li><a href="#">Web Developer</a></li>
                                                            <li><a href="#">Graphic designer</a></li>
                                                            <li><a href="#">Developer</a></li>
                                                            <li><a href="#">UX Designer</a></li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="form-group submit">
                                                <label>Submit</label>
                                                <input type="submit" name="submit" value="Register" class="register">
                                                <a href="lost-password.html" class="lost_password">Lost Password?</a>
                                            </div>
                                 </form>
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Why to have  an account in dexjobs? </h3>
                                    <ul>
                                    	<li><p><i class="fa fa-clock-o"></i>Fast applying for offers
the necessary documents are always at hand</p></li>
										<li><p><i class="fa fa-child"></i>Effectively target employers
You can share your profile and CV recruiters</p></li>

										<li><p><i class="fa fa-check-circle-o"></i>Matching jobs
We will suggest you offer to fit your needs on e-mail</p></li>
                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>




                        <div id="register-account" class="tab-pane fade in active white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<p>Login to your Recruiter account.</p>
                                      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                             
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Why to have  an account in dexjobs? </h3>
                                    <ul>
                                    	<li><p><i class="fa fa-clock-o"></i>Fast applying for offers
the necessary documents are always at hand</p></li>
										<li><p><i class="fa fa-child"></i>Effectively target employers
You can share your profile and CV recruiters</p></li>

										<li><p><i class="fa fa-check-circle-o"></i>Matching jobs
We will suggest you offer to fit your needs on e-mail</p></li>
                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>
                        
                       
                    </div>
                        
                        
                    </div>
                    
			</div>
       </div>
    </div> 
@endsection