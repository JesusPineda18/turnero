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
                                        <th>Usuario</th>
                                        <th>Modulo</th>
                                        <th>Profesional</th>
                                    </tr>
                                    @foreach ($attended as $attend)
                                        <tr>
                                            <td>{{$attend->id}}</td>    
                                            <td>{{$attend->customers->name}} {{$attend->customers->surname}} {{$attend->customers->second_surname}}</td>
                                            <td>{{$attend->professionals->name}}</td>
                                            <td>
                                                <form style="display: inline" action="{{route('shifts.destroy',$attend->id)}}" method="POST">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-warning">Finalizar</button>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Usuario</th>
                                        <th>Modulo</th>
                                        <th>Profesional</th>
                                    </tr>
                                    @foreach ($shifts as $shift)
                                        <tr>
                                            <td>{{$shift->id}}</td>
                                            <td>{{$shift->customers->name}} {{$shift->customers->surname}} {{$shift->customers->second_surname}}</td>
                                            <td>{{$shift->professionals->name}}</td>
                                            <td>
                                                <form style="display: inline" action="{{route('shifts.update',$shift->id)}}" method="POST">
                                                        @csrf 
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-success">Atender</button>
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