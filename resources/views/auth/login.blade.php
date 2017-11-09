@extends('layouts.page')

@section('content')
     
    <div class="container-fluid login_register header_area deximJobs_tabs">
    	<div class="row">
            <div class="container main-container-home">
                    <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-pills ">
                            <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                           
                        </ul>

                    <div class="tab-content">
                        
                        <div id="login" class="tab-pane fade in active  white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<p>Login to your Recruiter account.</p>
                                {!! Form::open(['route' => 'login', 'method'=>'POST', 'class'=>'contact_us']) !!}
                        	<div class="form-group">
                            	 {!! Form::label('email', 'Email:') !!}
                                 {!! Form::text('email', null, ['class'=>'form-control']) !!}                                                
                            </div>
                           
                            <div class="form-group">
                            	 {!! Form::label('password', 'Password:') !!}
                                 {!! Form::password('password', null, ['class'=>'form-control']) !!}
                            </div>
                                                        
                            <div class="form-group submit">
                            	<label>Submit</label>
                            	<div class="cbox">
                                	<input type="checkbox" name="checkbox"/>
                                	<span>Remember me</span>
                               </div>
                            </div>                                                            
                            <div class="form-group submit">                                                    
                                {!! Form::label('login', 'Login') !!}
                                {!! Form::submit('Login', array('class' => 'login')) !!}
                                <a href="lost-password.html" class="lost_password">Lost Password?</a>
                            </div>
                           
                            
                            {!! Form::close() !!}
                            
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Don't have an account?</h3>
                                    <ul>
                                    	<li>
                                        <p> If you'd like to find out more about how Jobsite can help you with your recruitment needs, please complete this enquiry form.</p></li>
										<li><p>A member of our Sales team will contact you shortly.</p></li>
										<li>
                                        <a href="" class="label job-type register">Register</a>
                                        
                                        </li>
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