@extends('layouts.default')

@section('conteudo')
<br>
    <div class="col-8 m-auto">
      <label for="Name" class="form-label mt-4"> Página em manutenção. </label>
      <form name="formEdit" id="formEdit" method="GET" action="{{url('produtos/listar')}}">
      <button  class="btn btn-primary btn-sm"> Voltar </button>
      </div>
        </form>
    </div>
@stop