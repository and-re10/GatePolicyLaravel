@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="container">
                    @foreach ($users as $user)
                        <div class="row justify-content-between">
                            <p>{{$user->name}}</p>
                            {{-- J'utilise la gate pour verifier si l'utilisateur connecté est le meme que l'utilisateur affiché et comme parametre j'utilise la variable $user qui est dans le foreach --}}
                            {{-- La meme chose pour la policy update et delete --}}
                            
                            @can('update', $user)
                                <div class="row">
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                            @endcan
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
