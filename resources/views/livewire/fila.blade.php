<x-app-layout>
    <div class=" py-12">
        <div class="max-w-1xl mx-auto sm:px-10 lg:px-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="container-fluid">

                                <div class="card-body" style="height: 520px;">
                                    <div class="d-flex align-items-center justify-content-center icon-card">
                                        <i class="bi bi-person-circle"></i>
                                    </div>

                                    <div class="d-flex flex-col align-items-center justify-content-center">
                                        <h5>{{ Auth::user()->name }} Rodrigues</h5>
                                        <p><h4>Suporte B2C  |  {{ Auth::user()->ramal }}</h4></p>
                                    </div>
                                    <br><br>
                                    <form method="get" wire:submit.prevent="logIN">

                                        <div class="d-flex flex-col align-items-center justify-content-center">
                                            
                                        </div>
                                        <button class="btn btn-primary">Concluir</button>
                                    </form>
                                    <br>
                                    <div class="d-flex justify-content-end">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>