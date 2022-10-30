
@extends('adminlte::page')
@section('pulgins.Datatables',true)

@section('title')
    Employes
@endsection

@section('content')
<div class="container ">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card border-secondary my-5 shadow">
        <div class="card-body">
          <h1 class="text-center text-info"><i> Users  Statistics</i></h1>
      
          <div class="mt-5 mx-auto">
                {!! $chart->container() !!}        
          </div> 
           
        </div>
      </div>
    </div>
  </div>
 </div>
 <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}

@endsection
