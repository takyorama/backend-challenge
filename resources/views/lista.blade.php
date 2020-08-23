@extends ('app')

@section ('app')

<table class="table table-striped table-hover w-75">
  <tr>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
 @foreach($contatos as $contato)
  <tr>
    <td class="col-3"> <?= $contato["nome"]; ?> </td>
    <td class="col-3"> <?= $contato["email"]; ?> </td>
    <td class="col-3"> <?= $contato["telefone"]; ?> </td>
    <td class="col-1"><form action="{{ url('/contatos/edit', $contato['id']) }}"><button type="submit" class="btn btn-success">Editar</button></form></td>
    <td class="col-1"><form action="{{ url('/contatos/delete', $contato['id']) }}"><button type="submit" class="btn btn-danger">Excluir</button></form></td>
  </tr>
 @endforeach
</table>

@endsection
