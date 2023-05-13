<?php
    include("../js/conexion.php");
    include("header.php");
?>

<div class="titulo">
    <h1>Editar Menú</h1>
    <button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;block&quot;">
    <i class="fa fa-cutlery" style="font-size:60px;"></i></button>
    <h6>Agregar Platillo/Bebida</h6>
</div>

<h2>Responsive Table</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
            <th>Header 5</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
        </tr>
        <tr>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
        </tr>
        <tbody>
    </table>
</div>

<?php
    include("footer.php");
    $conn = null;
?>