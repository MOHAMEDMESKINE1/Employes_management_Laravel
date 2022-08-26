@if ($errors->any())
<div class="row my-5">
    <div class="col-md-12">
        <div class="alert  alert-danger p-4 m-3">
            @foreach ($errors->all() as $error)
            {{-- <ul class="list-group">
                <li class="list-group-item"></li>
            </ul> --}}
            <p class="text-center">{{$error}}</p>
            @endforeach
        </div>
    </div>
</div>
@endif