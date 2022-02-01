@extends('layouts.header_footer')
@section('rol')
    
    <div class="container"style="height:75vh">
        <h3 class="pt-3">Admin</h3>
        <div class="row d-flex mt-3 mb-3">
            <ul class="list-group list-group-horizontal justify-content-start" style="list-style-type: none;">
                <li class="page-item" style="width: 10vw;text-align:center;">
                    <div class="btn-group">
                    <button type="button" class="btn btn-danger">Operador</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    </div>
                </li>
                <li class="page-item" style="width: 10vw;text-align:center;"><a class="page-link" href="#">Jefe</a></li>
                <li class="page-item" style="width: 10vw;text-align:center;"><a class="page-link" href="#">Tecnico</a></li>
            </ul>
        </div>  
    </div>
@endsection