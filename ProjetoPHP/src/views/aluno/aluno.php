<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
    

    <title>Alunos</title>
  </head>
  <body>
    <main class="container mt-5">
        
        <?php if ($mensagem == "Registro inserido com sucesso!") { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $mensagem ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php } ?>
        <?php if ($mensagem == "Erro ao inserir!") { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $mensagem ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php } ?>
        
        <?php if ($mensagem == "Registro alterado com sucesso!") { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $mensagem ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php } ?>
        <?php if ($mensagem == "Erro ao alterar!") { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $mensagem ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php } ?>
        
        <?php if ($mensagem == "Registro excluído com sucesso!") { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $mensagem ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php } ?>
        <?php if ($mensagem == "Erro ao excluir!") { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $mensagem ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php } ?>
        
        <div class="row d-flex justify-content-between">
            <h3>Alunos</h3>
            <a href="/aluno/inserir" class="btn btn-primary"> <i class="fas fa-plus"></i> Novo aluno</a>
        </div>

        <table class="table table-stripped table-hover mt-5" id="tabela">
            <thead>
                <th>Nome</th>
                <th>País</th>
                <th>Idade</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php while($aluno = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['pais'] ?></td>
                        <td><?= $aluno['idade'] ?></td>
                        <td>
                            <a href="/aluno/alterar/id/<?= $aluno["id"] ?>" class="btn btn-sm btn-warning">Alterar</a>
                            <a href="/aluno/excluir/id/<?= $aluno["id"] ?>" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>

        <script> 
        var table = new DataTable('#tabela', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
            },
        });
        </script>
    </main>
  </body>
</html>
