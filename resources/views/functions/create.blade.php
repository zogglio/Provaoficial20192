@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$titlePage}}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="post" action="{{ route('functions.store') }}">
                        @csrf 
                        <div class="form-group">
                          <label for="exampleInputEmail1">Coeficiente A</label>
                          <input name="coefA" type="text" class="form-control" id="inputTitle" placeholder="Insira aqui o coeficiente A">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Coeficiente B</label>
                            <input name="coefB" type="text" class="form-control" id="inputTitle" placeholder="Insira aqui o coeficiente B">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Coeficiente C</label>
                            <input name="coefC" type="text" class="form-control" id="inputTitle" placeholder="Insira aqui o coeficiente C">
                        </div>
                                              
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>                                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
