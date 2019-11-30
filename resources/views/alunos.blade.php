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
                        <th scope="col">sobrenome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefne</th>
                        <th scope="col">Curso Id</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($dadosAlunos as $dados): ?>
                        <tr>
                        <th scope="row">{{$dados->id}}</th>
                        <td>{{$dados->nome}}</td>
                        <td>{{$dados->sobrenome}}</td>
                        <td>{{$dados->email}}</td>
                        <td>{{$dados->telefone}}</td>
                        <td>{{$dados->curso_id}}</td>
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
