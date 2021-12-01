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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Modulo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    @foreach ($professionals as $professional)
                                        <tr>
                                            <td>{{$professional->id}}</td>
                                            <td><div class="badge badge-info">{{$professional->name}}</div></td>
                                            <td>{{$professional->module}}</td>
                                            <td>
                                                <a href="professionals/{{$professional->id}}/edit" class="btn btn-success">Editar</a>
                                                <form style="display: inline" action=" {{route("professionals.destroy", $professional->id)}} " method="POST">
                                                    @csrf 
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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