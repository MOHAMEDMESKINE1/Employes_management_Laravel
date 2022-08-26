@extends('layouts.app')

@section('title')
    Welcome | Employes App
@endsection

@section('content')
    <div class="container">
        <div class="row m-5">
            <div class="col-md-6 mx-auto">
                <div class="card ">
                    <div class="card-header p-3 text-center ">
                            <h3 class="text-lead ">Welcome Back </h3>
                    </div>
                @guest
                    <div class="card-body">
                        <a href="{{url('/login')}}" class="btn btn-outline-primary">
                            Login
                        
                        </a>
                    </div>
                @endguest
                @auth
                <div class="card-body">
                <a href="{{url('admin/home')}}" class="btn btn-outline-primary">
                    Home
                
                </a>
            </div>
                @endauth
                </div>
            </div>
        </div>
    </div>
@endsection