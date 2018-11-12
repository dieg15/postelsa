@extends('layouts.layout')

@section('title','Crear cliente')
@section('content')
<form id="formulario" action="/clientes" method="post">
	{{csrf_field()}}
                                          
                                           <h4>Datos generales</h4>
                                            <p>Llena los datos del cliente correctamente. Los campos marcados con <span class="text-danger">*</span> son obligatorios.</p>
                                           <hr />
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="nombre">Nombre de cliente <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}"  name="nombre" id="nombre" type="text" value="{{old('nombre')}}"/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="rfc">RFC <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control"  name="rfc" id="rfc" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="tel">Teléfono</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="tel" id="tel" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="cel">Celular</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="cel" id="cel" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="email">Email <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control"  name="email" id="email" type="email" value=""/>
                                                    </div>
                                        </div>
                                        <h4>Dirección</h4>
                                        <hr />
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="calle">Calle</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="calle" id="calle" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="num_ext"># Exterior</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="num_ext" id="num_ext" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="num_int"># Interior</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="num_int" id="num_int" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="colonia">Colonia</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="colonia" id="colonia" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="ciudad">Ciudad</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="ciudad" id="ciudad" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="estado">Estado</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="estado" id="estado" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="cod_postal">C.P.</label>
                                                    <div class="col-sm-10 controls">
                                                        <input class="form-control" name="cod_postal" id="cod_postal" type="text" value=""/>
                                                    </div>
                                        </div>
                                        <input type="hidden" id="idcliente" name="idcliente">
                                        <div id="salida_cliente"></div>
                                         <hr/>

                  <div class="row">
                    <div class="ml-auto">
                      <button type="submit" id="enviar" class="btn btn-primary">Generar cliente</button>
                      <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                  </div>
                                        </form>
                                        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
@endsection