<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            padding: 40px;
            color: #333;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            max-width: 400px;
            border: 1px solid #ddd;
        }

        h1 {
            color: #2c3e50;
            margin-top: 0;
        }

        h2 {
            font-size: 1.1rem;
            color: #555;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        p {
            background-color: #eef2f7;
            padding: 10px;
            border-radius: 4px;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Produto</h1>

        <h2>Query Completa</h2>
        <p>Este é o produto <?= isset($id) && $id !== '' ? ' ID: ' . htmlspecialchars($id) : '' ?></p>

        <h2>Método GET</h2>
        <p><?= isset($_GET['cat']) && $_GET['cat'] !== '' ? 'Categoria: ' . htmlspecialchars($_GET['cat']) : 'Sem categoria' ?></p>
    </div>

</body>
</html>