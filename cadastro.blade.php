@extends('contatos')

@section('conteudo')
 <form action="contatos/lista">
  <h2>Cadastro de contato</h2>
  <div class="form-group">
    <label for="nome">Nome:</label><input type="text" name="npme" class="form-control"/>
  </div>
  
  <div class="form-group">
    <label for="email">EMAIL:</label><input type="text" name="email" class="form-control"/>
  </div>
  <div class="form-group">
   <label for="telefone">Telefone:</label><input type="text" name="telefone" class="form-control"/>
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
 </form>
@endsection
