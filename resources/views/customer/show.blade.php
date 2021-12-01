@extends('layouts.app')

@section("title")
    Usuarios
@endsection

@section('css')
    
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Usuario</h3>
    </div>

    <div class="section-body">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$customer->name}} {{$customer->surname}}</span><span class="text-black-50">{{$customer->email}}</span><span> </span></div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">{{$customer->name}} {{$customer->surname}} {{$customer->second_surname}} </h4>
                        </div>
                        <form action="{{route('customers.update', $customer->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Nombre</label><input type="text" name='name' class="form-control"  value="{{$customer->name}}"></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Primer Apellido</label><input type="text" name='surname' class="form-control" value="{{$customer->surname}}" ></div>
                                <div class="col-md-6"><label class="labels">Segundo Apellido</label><input type="text" name='secondSurname' class="form-control" value="{{$customer->second_surname}}" ></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Identificacion</label><input type="text" class="form-control" name='identification' value="{{$customer->identification}}"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Guardar Perfil</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    
@endsection