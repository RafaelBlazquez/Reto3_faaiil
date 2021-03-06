@extends('layouts.header_footer')
@section('rol')
    
    <div class="container">
    <h3 class="pt-3">Tecnico</h3>
    @foreach ($incidencias as $incidencia)
    @foreach ($ascensores as $ascensor)
        @if($ascensor->n_serie == $incidencia->as_serie)
    <div  class="l{{$incidencia->id}}">
        <div class="row border border-dark d-flex mt-3  justify-content-center"style="min-height: 100px; ">
        @if($incidencia->prioridad==0)
                <div class="col-1 bg-danger "></div>
            @elseif($incidencia->prioridad==1)
                <div class="col-1 bg-warning "></div>
            @else
                <div class="col-1 bg-success "></div>
              
        @endif
            <div class=" col-1"></div>
            <div class=" col-4 text-start align-self-center">
                <h4>{{ $ascensor->direccion }}</h4>
                <h3>{{ $incidencia->as_serie }}</h3>
            </div>
            <div class=" col-1 "></div>
            <div class=" col-4 text-center align-self-center ">
            @if($incidencia->estado==0)
                <button class="btn btn-outline-danger active rounded-circle ms-3" style="height:30px; width: 30px;"></button>
                @else
                <button class="btn btn-outline-danger rounded-circle ms-3" style="height:30px; width: 30px;"></button>
            @endif
            @if($incidencia->estado==1)
                <button class="btn btn-outline-warning active rounded-circle ms-3" style="height:30px; width: 30px;"></button>
                @else
                <button class="btn btn-outline-warning rounded-circle ms-3" style="height:30px; width: 30px;"></button>
            @endif
            @if($incidencia->estado==2)
                <button class="btn btn-outline-success active rounded-circle ms-3" style="height:30px; width: 30px;"></button>
                @else
                <button class="btn btn-outline-success rounded-circle ms-3" style="height:30px; width: 30px;"></button>
            @endif
            </div>
            <div class="col-1 d-flex">
                <button type="button" class="btn btn-outline-dark align-self-center " data-bs-toggle="collapse" data-bs-target="#colapsa{{$incidencia->id}} "aria-expanded="false" aria-controls="colapsa{{$incidencia->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!--Hidden-->   
                        <div id="colapsa{{$incidencia->id}}" class="row collapse border border-dark border-top-0 " >
                            <div class=" card card-body ">
                        <div class=" col-1 "></div>
                            <div class=" col-11 align-self-end">
                                <div class="row d-flex">
                                    <div class=" col-2 d-flex align-self-center"><h5>Fecha y hora</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5>Tipo</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5>Modelo</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5>Segmento</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center" ><h5>Detalles operario</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5>Detalles tecnico</h5> </div> 
                                </div>
                                <div class="row d-flex">
                                    <div class=" col-2 d-flex align-self-center"><h5 class="me-5">{{ $incidencia->created_at }}</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5 class="me-5">{{ $incidencia->tipo }}</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5 class="me-5">{{ $ascensor->modelo_id }}</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5 class="me-5">{{ $ascensor->segmento }}</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5 class="me-5">{{ $incidencia->prioridad }}</h5> </div> 
                                    <div class=" col-2 d-flex align-self-center"><h5 class="me-5">{{ $incidencia->estado }}</h5> </div> 
                                </div>
                                </div>
                        </div>
                            
                        </div>
                        </div>
                        @endif
        @endforeach
        @endforeach
        <div class="row d-flex mt-3 mb-3">
            <ul class="list-group list-group-horizontal justify-content-center" style="list-style-type: none;">
                <li class="page-item"><a class="page-link" style="width: 90px;text-align:center;"href="#">Hoy</a></li>
                <li class="page-item"><a class="page-link" style="width: 90px;text-align:center;"href="#">7 dias</a></li>
                <li class="page-item"><a class="page-link" style="width: 90px;text-align:center;"href="#">Este mes</a></li>
                <li class="page-item"><a class="page-link" style="width: 90px;text-align:center;"href="#">Todas</a></li>
            </ul>
        </div>  
    </div>
@endsection