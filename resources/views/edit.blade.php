@extends ('app')

@section ('app')

@if($errors)
  <div id="errors">
@endif

<form action="{{ url('/contatos/$contato["id"]/update', $contato['id']) }}" method="post">
  @csrf
  <div class="form-group">
    <label class="col-form-label">Nome:</label>
    <input type="text" class="form-text" name="nome" value="{{ $contato['nome'] }}"/>
  </div>
  <div class="form-group">
    <label class="col-form-label">Email:</label>
    <input type="email" class="form-text" name="email" value="{{ $contato['email'] }}"/>
  </div>
  <div class="form-group">
    <label class="col-form-label">Telefone:</label>
    <input type="text" class="form-text" name="telefone" value="{{ $contato['telefone'] }}"/>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</form>

@endsection
