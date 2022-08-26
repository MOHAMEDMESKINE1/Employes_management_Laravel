@extends('adminlte::page')

@section('title')
    VacationRequest
@endsection

@section('content_header')
     Employe VacationRequest 
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card-my-5 bg-white ">
                <div class="card-header text-center p-3 bg-success">
                        <h3 class="text-light fw-bold "><i> VacationRequest of employment</i></h3>
                </div>

                <div class="card-body">
                    <p class="bg-light p-3 ">
                        <i class="fa fa-calendar mx-2" ></i>{{Carbon\Carbon::now()->format("d-m-y")}} <br>
                        <i class="fa fa-clock mx-2" ></i> {{Carbon\Carbon::now()->toTimeString()}}
                    </p>
                    <p class="lead">
                        <b>{{$employe->fullname}}</b> is presently employed with me in the following :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> departement.
                    </p>
                    <p class="lead">
                        He is requesting a vacation starting from <b>{{$employe->created_at->format('y-m-d')}}</b>
                    </p>
                    <p class="lead">
                        And ends on <b>{{$employe->created_at->format('y-m-d')}}</b>
                    </p>

                    <p class="m-5">
                        ___________
                        ___________
                    </p>
                    <a href="#" 
                    id="print_button" 
                    onclick="
                    document.getElementById('print_button').style.display='none';
                    window.print();

                    setTimeout(function(){
                        document.getElementById('print_button').style.display='block';

                    },2000); " 

                    class="btn btn-primary mt-2 w-100 ">
                        <small class="text-light mr-2">
                            Print Certificate
                        </small>
                        <i class="fas fa-print"></i>
                    </a>
                </div>
              
            </div>
           
        </div>
        
    </div>
  
</div>
@endsection