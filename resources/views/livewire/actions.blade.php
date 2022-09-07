<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-1xl mx-auto sm:px-10 lg:px-15">
            <div class="container-fluid">
                {{-- Aqui começa a row principal --}}
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <h5 class="card-header">
                                Indicadores
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="d-flex align-items-center indicator-box">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-telephone-inbound-fill"></i>
                                                
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $ctee }}</h6>
                                                <span class="text-success small pt-1 fw-bold">Entrantes</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="d-flex align-items-center indicator-box">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-telephone-inbound-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $abandon_queue }}</h6>
                                                <span class="text-success small pt-1 fw-bold">Abandonadas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <h5 class="card-header">
                                Ranking
                            </h5>
                            <div class="card-body overflow-auto">
                                <ul class="list-group list-group-flush d-flex">
                                    <li class="list-group-item">
                                        @foreach ($notes as $note)
                                        @if ($note->nota != '')

                                        <div class="row flex items-center">
                                            <div class="col-xl-2">
                                                <i class="bi bi-person-circle" style="font-size: 50px;"></i>
                                            </div>
                                            
                                            <div class="col-xl-8 mb-1 flex items-center justify-between">
                                                {{ $note->name }}
                                                
                                            </div>
                                            
                                            <div class="col-xl-2"> {{ $note->nota }} </div>
                                            <hr>
                                            <br>
                                        </div>

                                        @endif
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <h5 class="card-header">
                                Gráficos
                            </h5>
                            <div class="card-body">
                                gráficos das notas aqui
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Aqui termina a row principal --}}
            </div>
        </div>
    </div>
    
</x-app-layout>
