<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro Geral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/erro.css">
</head>

<body>
    <div class="container text-center d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card shadow-lg border-0 p-4 erro-card">
            <img src="https://cdn-icons-png.flaticon.com/512/463/463612.png" alt="Erro" class="erro-icon mb-3">
            <h1 class="text-danger mb-3">Erro no Sistema</h1>
            <p class="fs-5 text-muted mb-4">
                Ocorreu um erro inesperado ao processar o cadastro. Tente novamente mais tarde.
            </p>
            <button class="btn btn-success px-4" onclick="window.location.href='home.php'">Voltar para HOME</button>
        </div>
    </div>
</body>

</html>