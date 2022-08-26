@extends('adminlte::page')

@section('title')
    WorkCertificate 
@endsection

@section('content_header')
     Employe WorkCertificate 
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card-my-5 bg-white ">
                <div class="card-header text-center p-3 bg-success">
                        <h3 class="text-light fw-bold "><i> Certificate of employment</i></h3>
                </div>

                <div class="card-body">
                    <p class="bg-light p-3 ">
                        <i class="fa fa-calendar mx-2" ></i>{{Carbon\Carbon::now()->format("d-m-y")}} <br>
                        <i class="fa fa-clock mx-2" ></i> {{Carbon\Carbon::now()->toTimeString()}}
                    </p>
                    <p class="lead">
                        This is to certify that <b>{{$employe->fullname}}</b> is presently employed with me in the following :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> departement.
                    </p>
                    <p class="lead">
                        Their employment began on <b>{{$employe->hire_date}}</b>
                    </p>
                    <p class="lead">
                        This Certification is being issued upon the request of <b>{{$employe->fullname}}</b> for whatever legal purpose it may serve.
                    </p>
                    <p class="lead">
                        {{-- display current date  --}}
                        Issued on <b>{{Carbon\Carbon::now()->format("d-m-y")}}</b> <br>{{-- or {{Carbon\Carbon::now()->today()->toDateString()}} --}}
                        at <b>{{Carbon\Carbon::now()->toTimeString()}}</b>
                    </p>
                    <p class="mb-4">
                        ______________
                        ______________
                    </p>
                    <a href="#" id="print_button"    
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