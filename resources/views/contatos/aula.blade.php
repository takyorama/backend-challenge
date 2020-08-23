@extends('../app')

@section('app')

<form action="contatos/aula2" method="post">
  <h2>calendario de provas e testes</h2>

  <table>
    <thead>
      <tr>
	  <?php
	  $mes = ["Janeiro", "Fevereiro", "Mar&ccedil;o", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
	  echo '<th colspan="7">'.$mes[2].'</th>';
	  ?>
      </tr>
    </thead>
    <tbody>
      <tr>
      @for($i=1; $i<=31; $i++)
        <td class="dia">{{ $i }}</td>
        @if (($i%6) == 0)
          </tr><tr>
        @endif
      @endfor
       </tr>
    </tbody>
  </table>
  <div class="container form-group col-4">
    <label for="nome">Nome:</label><input type="text" name="nome" class="col form-control"/>
	<label for="codigo">C&oacute;digo:</label><input type="text" name="codigo" class="col-4 form-control"/>
  </div>
  <label for="horario">Hora:</label>
  <div id="horario" name="horario" class="">
    <input type="text" name="hora" class="col-1"/>
    <span> : </span>
    <input type="text" name="minuto" class="col-1"/>
  </div>
  <button class="btn btn-info">Salvar</button>
</form>

<section>
  <div id="app"></div>
  <script>
  var toggle;
  const editing = {
    const edit = false
	const style = false
	
    if(edit){toggle = '<input type="text" onBlur="true"/>'}
    else{}
  }
   console.log(toggle)
   document.getElementById('app').innerHTML = toggle
  </script>
</section>

@endsection
