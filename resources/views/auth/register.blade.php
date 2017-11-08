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
                                
                              
                                 {!! Form::open(['route' => 'register', 'files'=>true, 'method'=>'POST', 'class'=>'contact_us']) !!}
                           
                                <div class="form-group">
  
                                            <div class="form-group">
                                              {!! Form::label('name', 'Name:') !!}
                                                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                                
                                            </div>                                          
                                          
                                            <div class="form-group">
                                                 {!! Form::label('email', 'Email:') !!}
                                                {!! Form::text('email', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                            
                                                {!! Form::label('cat_id', 'Category:') !!}
                                                {!! Form::select('cat_id',[''=>'Choose category'] + $categories, null, ['class' => 'dropdown ddlStyle']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('proff_id', 'Proffesion:') !!}
                                                {!! Form::select('proff_id',[''=>'Choose proffesion'] + $professions, null, ['class' => 'dropdown, ddlStyle']) !!}
                                            </div>
                                              <div class="form-group">
                                                {!! Form::label('password', 'Password:') !!}
                                                {!! Form::password('password', null, ['class'=>'form-control']) !!}
                                            </div>
                                              <div class="form-group">
                                                 {!! Form::label('confirm_password', 'Confrim password:') !!}
                                                {!! Form::password('confirm_password', null, ['class'=>'form-control']) !!}
                                            </div>                                      
                                                                               
                                            <div class="form-group submit">                                                    
                                                {!! Form::label('submit', 'Submit') !!}
                                                {!! Form::submit('Register', array('class' => 'register')) !!}
                                                <a href="lost-password.html" class="lost_password">Lost Password?</a>
                                            </div>
                                 
                                 {!! Form::close() !!}
                                 
                        	</div>
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