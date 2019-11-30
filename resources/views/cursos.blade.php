@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alunos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif






                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Nome</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($dadosCuros as $dados): ?>
                        <tr>
                        <th scope="row">{{$dados->id}}</th>
                        <td>{{$dados->name}}</td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    </table>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
