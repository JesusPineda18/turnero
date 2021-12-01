@extends('layouts.app')

@section("title")
    Profesionales
@endsection

@section('css')
    
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Profesionales</h3>
    </div>

    <div class="section-body">
        <h2 class="section-title">Editar Profesional</h2>
        <p class="section-lead">Cada profesional debe tener un modulo que no este creado</p>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('professionals.update',$professional->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$professional->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Modulo</label>
                                        <input type="number" class="form-control" name="module" value="{{$professional->module}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">EDITAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    
@endsection