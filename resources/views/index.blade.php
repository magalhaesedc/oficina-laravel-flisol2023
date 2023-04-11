<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flisol 2023</title>
    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-5 text-center bg-dark">
      <div class="container">
        <h1 class="text-white">Cadastro de Participantes - Flisol 2023</h1>
        <p class="col-lg-8 mx-auto lead text-white-50">
          Sistema para cadastro de participantes com backend PHP e Laravel. Banco de dados PostgreSQL.
        </p>
      </div>
    </div>

    <div class="container">
      <!-- Botão para abrir o modal -->
      <button type="button" class="btn btn-dark mt-4 mb-4" data-bs-toggle="modal" data-bs-target="#modalCadastro">
        Novo participante
      </button>
      
      <!-- Tabela para listagem dos participantes -->
      <table class="table mb-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Município</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($participantes as $participante)
          <tr>
            <td>{{ $participante->id }}</td>
            <td>{{ $participante->nome }}</td>
            <td>{{ $participante->sobrenome }}</td>
            <td>{{ $participante->email }}</td>
            <td>{{ $participante->municipio }}</td>
            <td><a href="/delete/{{$participante->id}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <br><br>

    <!-- Modal com o formulário de cadastro -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalCadastroLabel">Novo Participante</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/cadastrar">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="municipio" class="form-label">Município</label>
                        <input type="text" class="form-control" id="municipio" name="municipio">
                    </div>
                    <button type="submit" class="btn btn-dark">Inserir</button>
                  </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Rodapé de página -->
    <footer class="footer py-3 bg-dark fixed-bottom">
        <div class="container">
            <span class="text-white-50">Desenvolvido por @edson.magalhaes. Oficina de Laravel - Flisol 2023</span>
        </div>
    </footer>
    
    <!-- Javascript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
