@extends('layouts.home')

@section('login') 

    <div class="logins">
    <!-- If the user IS NOT logged in -->
         @guest
            <a href="{{ route('login') }}" class="post_job">
            <span class="label job-type partytime"><i class="fa fa-sign-in" aria-hidden="true"></i>Log-in</span>
            </a> 
            <a href="{{ route('register') }}" class="post_job">
            <span class="label job-type partytime"><i class="fa fa-user" aria-hidden="true"></i>Sign-up</span>
            </a> 
        @else   
             <div class="no-padding user-image"><img class="img-circle profile-image" src="{{ asset('images/deki.jpg') }}" alt=""></div>
             <div class="user-profile">
                <ul class="dropdown-menu" style="left:80px">
                    <li class="dropdown">                        
                        <a href="{{ route('profile.user.index') }}" class="dropdown-toggle"><i class="fa fa-user"></i>Profile</a>
                    </li>
                    <li class="dropdown">                         
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </li>
                </ul>
             </div>
        @endguest
    </div>

@stop

@section('filters')
<form class="skill-filter" action="index.html">
                    	<!--col-lg-3 filter_width -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Category
                                        <span class="glyphicon glyphicon-menu-down filter-icon"></span>
                                        </button>
                                    
                                    <div class="dropdown-menu "  aria-labelledby="dropdownMenu1">
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
                            <span>e.g. Finance</span>
                        </div>

                         
                         <!--col-lg-3 filter_width -->
                         
                         <!-- col-lg-5 filter_width -->
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Keyword, job title or skill">
                                    <span class="glyphicon glyphicon-briefcase filter-icon" aria-hidden="true"></span>
                                </div>
                                <span>e.g. Designer</span>
                            </div>
                         <!-- col-lg-5 filter_width -->
                         
                        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon location">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location">
                                    <span class="glyphicon fa fa-location-arrow filter-icon" aria-hidden="true"></span>
                                </div>
                                <span>e.g. New York</span>
                            </div>

                            <!-- Project search btn -->
                            <div class="col-lg-1 col-md-2 skill-search-btn col-sm-6 col-xs-12 filter_width bgicon submit">
                                <div class="form-group">
                                   <input type="submit" class="projectsubmit" name="pSubmit" value="Search"/>
                                   <span class="glyphicon fa fa-search" aria-hidden="true"></span>
                                </div>
                            </div>

                            </form>

                            <form class="project-filter" action="index.html">
                    	<!--col-lg-3 filter_width -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Category
                                        <span class="glyphicon glyphicon-menu-down filter-icon"></span>
                                        </button>
                                    
                                    <div class="dropdown-menu "  aria-labelledby="dropdownMenu1">
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
                            <span>e.g. Finance</span>
                        </div>

                         
                         <!--col-lg-3 filter_width -->
                         
                         <!-- col-lg-5 filter_width -->
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Keyword, job title or skill">
                                    <span class="glyphicon glyphicon-briefcase filter-icon" aria-hidden="true"></span>
                                </div>
                                <span>e.g. Designer</span>
                            </div>
                         <!-- col-lg-5 filter_width -->
                         
                        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon location">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location">
                                    <span class="glyphicon fa fa-location-arrow filter-icon" aria-hidden="true"></span>
                                </div>
                                <span>e.g. New York</span>
                            </div>

                            <!-- Skill search btn -->
                            <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12 project-search-btn filter_width bgicon submit">
                                <div class="form-group">
                                   <input type="submit" class="customsubmit" name="sSubmit" value="Search"/>
                                   <span class="glyphicon fa fa-search" aria-hidden="true"></span>
                                </div>
                            </div>


                            </form>
@stop