@extends('layouts.home')

@section('login') 
    <div class="logins">

        <a href="{{ route('login') }}" class="post_job">
         <span class="label job-type partytime"><i class="fa fa-sign-in" aria-hidden="true"></i>Log-in</span>
        </a> 
        <a href="{{ route('register') }}" class="post_job">
         <span class="label job-type partytime"><i class="fa fa-user" aria-hidden="true"></i>Sign-up</span>
        </a> 

    </div>
@stop