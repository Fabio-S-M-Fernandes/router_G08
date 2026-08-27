<h1>Produto</h1>
<h2>Query Completa</h2>
<p>Este é o produto<?= isset($id) ? ' - ID: ' . $id : '' ?></p>


<h2>Método GET</h2>
<p><?= isset($_GET['cat']) ? 'Categoria: ' . $_GET['cat'] : '' ?></p>