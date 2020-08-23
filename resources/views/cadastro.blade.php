@extends ('app')

@section ('app')

@if($errors->any())
<div class="alert alert-warning warning">
 @foreach($errors->all() as $error)
  {{ $error }}
 @endforeach
</div>
@endif

<form action="{{ url('/contatos/lista') }}" accept-charset="UTF-8" method="post">
  <input type="hidden" name="_token" value="WUBiCKtRftmNWeLhcJTIJv1xo+tPGf84UQ5CKBzdORk="/>
  <div class="form-group">
    <label class="col-form-label">Nome:</label>
    <input type="text" class="form-text" name="nome"/>
  </div>
  <div class="form-group">
    <label class="col-form-label">Email:</label>
    <input type="email" class="form-text" name="email"/>
  </div>
  <div class="form-group">
    <label class="col-form-label">Telefone:</label>
    <input type="text" class="form-text" name="telefone"/>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</form>

@endsection
