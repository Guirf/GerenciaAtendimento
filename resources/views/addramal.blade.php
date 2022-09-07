<x-app-layout>

    @if($errors->any())
    <div class="alert alert-danger container">
    <ul>
        @foreach ($errors->all() as $error)
            <li>. {{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
    <div class="container">
        <form method="post" class="form-control" action="/new">
            @csrf
            <div class="form-group">
                <label for="ramal">Ramal</label>
                <input type="text" class="form-control" name="ramal">
            </div>
            <div class="form-group">
                <label for="Nome">Nome</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="Setor">Setor</label>
                <input type="text" class="form-control" name="department">
            </div>
            <div class="form-group">
                <label for="Senha">Senha</label>
                <input type="text" class="form-control"  name="pass">
            </div>
            <br>
            <button class="btn btn-info" type="submit">enviar</button>
        </div>
        </form>
    </div>

</x-app-layout>