@extends('layouts.page')

@section('content')

    <div class="container-fluid page-title">
			<div class="row green-banner">
            	<div class="container main-container">
                	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                		<h3 class="white-heading">Create a Project</h3>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 colxs-12 capital">
                    	<h5>Our database gives you access to millions of active candidates </h5>
                    </div>
                </div>
            </div> 
        </div> 
  	 <!--header section -->

    
   <!-- full width section forms -->
    	<div class="container-fluid  contact_us">
        
        {!! Form::open(['route' => 'project.store', 'method'=>'POST', 'class'=>'contact_us']) !!}                           
        
            	<div class="row user-information">
            	<div class="container main-container-home">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	<div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	{!! Form::label('title', 'Project title:') !!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">                            		
                                    {!! Form::text('title') !!}                                    
                            	</div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	{!! Form::label('loc', 'Project location:') !!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">                            		
                                    {!! Form::text('location') !!}                                    
                            	</div> 
                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	{!! Form::label('desc', 'Project description :') !!}
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	{!! Form::text('description') !!} 
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	 {!! Form::label('cat_id', 'Category:') !!}
                                     {!! Form::select('category_id',[''=>'Choose Options'] + $categories) !!}
                            	</div>
                            </div>  
                            	         
                         
                     </div>
                     
                     <div class="form-group submit">                                        
                    {!! Form::submit('Create', array('class' => 'register')) !!}
                </div>
                </div>
                 
            </div>                      
            {!! Form::close() !!}
            
        </div>
   <!-- full width section forms -->
   

@stop