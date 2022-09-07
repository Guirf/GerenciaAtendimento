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
                                                <h6>{{ $answer_queue }}</h6>
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
                                                <h6>10</h6>
                                                <span class="text-success small pt-1 fw-bold">Entrantes</span>
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
                            <div class="row">
                                <div class="col-xl-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <h5 class="card-header">
                                Gráficos
                            </h5>
                            <div class="row">
                                <div class="col-xl-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Aqui termina a row principal --}}
            </div>
        </div>
    </div>
    
</x-app-layout>
