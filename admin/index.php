<?php
include "header.php";
echo '
    <main class="w-50 text-center">
        <div id="error" style="font-size:50px; color:red; font-weight:bold;">'.$error.'</div>
        <h1>Iniciar sesión en administrador de contenidos</h1>
        <form action="login.php" method="POST" class="form">
            <div class="">
                <label for="user">Usuario</label>
                <input type="email" name="user">
            </div>
            <div class="">
                <label for="pss">Contraseña</label>
             <input type="password" name="pss">
            </div>
            <div class="">
                <input type="reset" value="Cancelar" class="button">
                <input type="submit" value="Iniciar sesión" class="button">
            </div>
    </form>
 </main>';
?>
<a href='menu.php' target='_self'>Entrar</a>