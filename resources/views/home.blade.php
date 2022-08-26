@extends('adminlte::page')

@section('title')
    Home
@endsection

@section('content_header')
    Dashboard
@endsection
@section('content')
    <div class="container m-5">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        {{-- display number of employees from database using Employe::count() --}}
                        <h2>{{App\Models\Employe::count()}}</h2>
                        <p>Employes</p>
                    </div>
                   
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{url('admin/employes')}}" class="small-box-footer">
                            More Info   <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                  
            </div>
           
        </div>
    </div>
@endsection