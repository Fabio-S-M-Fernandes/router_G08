<?php
// 1. Captura os parâmetros da URL, define valores padrão e aplica htmlspecialchars por segurança
$tema = htmlspecialchars($_GET['tema'] ?? 'claro');
$desconto = htmlspecialchars($_GET['desconto'] ?? '0');

// 2. Define a cor da página dinamicamente de acordo com o parâmetro 'tema'
$corFundo = ($tema === 'escuro') ? '#1e1e1e' : '#f4f4f9';
$corTexto = ($tema === 'escuro') ? '#ffffff' : '#333333';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página do Produto</title>
    <style>
        body {
            background-color: <?= $corFundo ?>;
            color: <?= $corTexto ?>;
            font-family: Arial, sans-serif;
            padding: 40px;
            transition: 0.3s;
        }

        .banner-desconto {
            background-color: #28a745;
            color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <h1>Smartphone Gamer</h1>
    <p>Tema atual: <strong><?= $tema ?></strong></p>

    <!-- Exibe a caixa de desconto apenas se houver desconto na URL -->
    <?php if ((int)$desconto > 0): ?>
        <div class="banner-desconto">
            Parabéns! Você ativou <strong><?= $desconto ?>% de desconto</strong> neste produto!
        </div>
    <?php else: ?>
        <p>Nenhum desconto aplicado na URL.</p>
    <?php endif; ?>

</body>
</html>
