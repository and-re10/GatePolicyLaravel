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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>
                                                {{-- J'utilise la gate pour verifier si l'utilisateur connecté est le meme que l'utilisateur affiché et comme parametre j'utilise la variable $user qui est dans le foreach --}}
                                                {{-- La meme chose pour la policy update et delete --}}
                                                @can('update', $user)
                                                    <form class="d-flex justify-content-end" action="" method="POST" enctype="multipart/form-data">
                                                        <a href="" class="btn btn-warning mr-2">Éditer</a>
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                @endcan
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
