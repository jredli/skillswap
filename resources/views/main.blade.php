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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Nesto</a>
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