@extends('adminlte::page')

@section('title')
    Employe 
@endsection

@section('content_header')
     Employe Details
@endsection
@section('content')
    <div class="container m-5">
        <div class="row my-5">
            <div class="col-md-10 mx-auto ">
                <div class="list-group">
                    <div class="text-center mb-3 text-danger fw-light  " style="font-size: 24px;">Mr : {{$employe->fullname}}</div>
                        <div class="d-flex justify-content-center align-items-space-arround">
                            <a href="{{route("certificate.request",$employe->id)}}" class="btn btn-outline-primary mb-3 mx-auto">Vacation request</a>
                            <a href="{{route("vacation.request",$employe->id)}}" class="btn btn-outline-success mx-auto mb-3">Work certificate</a>
                        </div>
                        <ul class="list-group list-group-flush text-center list-group-item-light ">
                            <li class="list-group-item"><span class="text-primary">ID :</span> {{$employe->id}}</li>
                            <li class="list-group-item"><span class="text-primary">Registration Number :</span> {{$employe->resgistration_number}}</li>
                            <li class="list-group-item"><span class="text-primary">Depart :</span> {{$employe->depart}}</li>
                            <li class="list-group-item"><span class="text-primary">Hire Date : </span>{{$employe->hire_date}}</li>
                            <li class="list-group-item"><span class="text-primary">Phone :</span>{{$employe->phone}}</li>
                            <li class="list-group-item"><span class="text-primary">City :</span> {{$employe->city}}</li>
                            
                        </ul>

                    </div> 
                    <a href="{{url()->previous()}}" class="btn btn-secondary  my-3 d-flex justify-content-start " style="width: 5em;">
                        <i class="fa fa-arrow-circle-left">&nbsp;Back</i>
                    </a>
    
                </div>
            </div>
        </div>
    </div>

@endsection
