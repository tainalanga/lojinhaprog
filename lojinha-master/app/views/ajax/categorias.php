<?php

require_once "../../models/CategoriaCrud.php";
$crud = new CategoriaCrud();
$categorias = $crud->getCategorias();

echo "<ul>";
foreach ($categorias as $categoria) {
 echo "<li>".$categoria->getNome()."</li>";

    }

    echo "</ul>";