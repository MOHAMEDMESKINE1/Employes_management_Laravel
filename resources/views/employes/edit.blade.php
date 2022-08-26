@extends('adminlte::page')

@section('title')
    Employes
@endsection

@section('content_header')
   Update Employes
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger text-center">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                {{-- errors --}}
                @include('layouts.alert')
                <div class="card-header text-center p-3 bg-primary">
                    <h3 class="text-warning">
                        Update Employe  : {{$employe->fullname}}
                    </h3>

                
                </div>
                <div class="card-body">
                    <form action="{{route('employes.update',$employe->id)}}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        @method("PUT")

                        <div class="form-group mb-3">
                            <label for="registration_number" class="form-label fw-bold">Registration_number</label>
                            <input type="text" name="resgistration_number" value="{{old("resgistration_number",$employe->resgistration_number)}}" placeholder="registration number" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="fullname" value="{{old("fullname",$employe->fullname)}}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="depart" class="form-label fw-bold">Departement</label>
                            <input type="text" name="depart" value="{{old("depart",$employe->depart)}}" placeholder="Departement" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="hire_date" class="form-label fw-bold">Hiring Date</label>
                            <input type="date" name="hire_date" value="{{old("hire_date",$employe->hire_date)}}" placeholder="Hiring Date" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label fw-bold">Phone</label>
                            <input  type="text"  maxlength="10"  name="phone" value="{{old("phone",$employe->phone)}}" placeholder="Phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="adress" class="form-label fw-bold">Adress</label>
                            <input type="text" name="adress" value="{{old("adress",$employe->adress)}}" placeholder="City" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city" class="form-label fw-bold">City</label>
                            <input type="text" name="city" value="{{old("city",$employe->city)}}" placeholder="City" class="form-control">
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-outline-primary" onclick="return confirm('are u sure?')">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection