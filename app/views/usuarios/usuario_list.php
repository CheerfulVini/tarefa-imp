<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Projeto Integrador • Lista de Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Lista de Usuários</h2>
        <a href="<?= URL_BASE ?>/usuarios/cadastrar" class="btn btn-primary mb-3">Novo Usuário</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['nomeUsuario'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['perfil'] ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>/usuarios/editar?id=<?= $u['id'] ?>" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="<?= URL_BASE ?>/usuarios/excluir?id=<?= $u['id'] ?>" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
