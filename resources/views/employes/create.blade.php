@extends('adminlte::page')
@section('title')
Create
@endsection

@section('content')

    <div class="container">
      
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto">
                {{-- errors --}}
                @include('layouts.alert')
                <div class="card my-5">
                    <div class="card-header bg-white text-center p-3">
                        <h3 class="text-primary">
                            Add new employe
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('employes.store')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fullname" class="form-label fw-bold">Full Name</label>
                                <input type="text" name="fullname" value="{{old("fullname")}}" placeholder="Full Name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                                <input type="text" maxlength="10" name="resgistration_number" value="{{old("resgistration_number")}}"  placeholder="Registration Number" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="depart">Departement</label>
                                <input type="text" class="form-control" value="{{old("depart")}}"  name="depart" placeholder="Departement">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                                <input type="date" class="form-control" value="{{old("hire_date")}}"  placeholder="Hiring Date" name="hire_date">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="phone">Phone</label>
                                <input type="text"  maxlength="10" class="form-control" value="{{old("phone")}}"  placeholder="Phone" name="phone">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="adress">Address</label>
                                <input type="text" class="form-control" value="{{old("adress")}}"  placeholder="Adress" name="adress">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="city">City</label>
                                <input type="text" class="form-control" value="{{old("city")}}"  placeholder="City" name="city">
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
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