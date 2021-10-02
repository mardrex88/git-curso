@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Rol</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                        
                        @if($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Revise los campos</strong>
                                    @foreach($errors->all() as $error)
                                        <span class="badge badge-danger">{{$error}}</span>
                                    @endforeach
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"></button>
                                     <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        @endif

                        {!! Form::model($role, ['method'=>'PATCH','route'=>['roles.update',$role->id]]) !!}

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label  >Nombre</label>
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label  >Lista de Permisos</label>
                                    <br/>
                                    @foreach($permission as $permiso)
                                        <label>
                                            {{ Form::checkbox('permission[]',$permiso->id, in_array($permiso->id, $rolePermissions)  ? true : false ) }}
                                            {{ $permiso->name }}
                                        </label>
                                    @endforeach
                                    <br/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                         {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

