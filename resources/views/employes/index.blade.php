@extends('adminlte::page')
@section('pulgins.Datatables',true)

@section('title')
    Employes
@endsection

@section('content_header')
    List of Employes
@endsection

@section('content')
    <div class="container m-5">
        <div class="row my-5">
            <div class="col-md-10 mx-auto">
                
                    {{-- @if (session()->has('message'))
                        <div class="my-5 ">
                            <div class="alert alert-success fw-bold text-lead text-center p-3">
                                {{session()->get("message")}}
                            </div>
                          
                        </div> 
                    @endif --}}
                    
                       
                
                  <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center text-uppercase text-success">
                            Employes
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped  table-hover  text-center">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Depart</th>
                                    <th>Hire Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- we used $key to restart counting when we deleted a record  --}}
                                @foreach ($employes as $key=> $employe)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        <td>{{$employe->fullname}}</td>
                                        <td>{{$employe->depart}}</td>
                                        <td>{{$employe->hire_date}}</td>

                                        <td class="d-flex justify-content align-items-center ">
                                            {{-- view --}}
                                            <a href="{{route('employes.show',$employe->id)}}" class="btn btn-outline-primary btn-sm "><i class="fas fa-eye"></i></a>
                                            {{-- edit --}}
                                            <a href="{{route('employes.edit',$employe->id)}}"  class="btn btn-outline-success btn-sm mx-2 "><i class="fas fa-edit"></i></a>
                                            {{-- delete --}}
                                            <form method="post" id="{{$employe->id}}" action="{{route('employes.destroy',$employe->id)}}">
                                                @csrf
                                                @method("DELETE")
                                                <button onclick="deleteEmp({{$employe->id}})" type="button" class="btn btn-outline-danger btn-sm " ><i class="fas fa-trash"></i></button>                                            
                                            </form>
                                        </td>
                                    </tr>
                                    
                                   
                                @endforeach
                               
                            </tbody>
                        </table>
                  </div>

                  </div>
            </div>
           
        </div>
    </div>
  
@endsection


@section('js')
    <script>
        $(document).ready(function(){

            $("#myTable").DataTable({
                dom : 'Bfrtip',
                buttons : [
                'csv',
                'excel',
                'pdf',
                'print',
                'colvis'
            ]
            });
        });
        function deleteEmp(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your ad is safe :)',
                        'error'
                    )
                }
                })
        }
    </script>
    @if (session()->has('message'))
        <script>
            Swal.fire({
            position: 'top-center',
            icon: 'success',
            title:'{{session("message")}}',
            showConfirmButton: false,
            timer:2500
            })
        </script>
        
    @endif
   
@endsection