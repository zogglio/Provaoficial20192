@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">               
                <div class="row">
                    <h4 class="col-md-6">{{$titlePage}}</h4>
                    <div class="text-right col-md-6">
                        <a class="btn btn-primary " href="{{ route('functions.create') }}">Novo</a>
                    </div>
                </div>
                                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>
                        <ul>
                            @foreach ($functions as $function)
                                <li>
                                    <a>
                                        {{$function->question}}
                                    </a>
                                </li>    
                            @endforeach
                        </ul>
                    </div>                                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
