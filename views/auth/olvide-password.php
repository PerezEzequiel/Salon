<h1 class="nombre-pagina">Olvide mi password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuacion</p>

<form class="formulario" action="/olvide" method="post">
    <div class="campo">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Ingresa tu email">
    </div>
    <input class="boton" type="submit" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">Ya tenes una cuenta? Inicia sesion!</a>
    <a href="/crear-cuenta">Aun no tenes una cuenta? Crea una!</a>
</div>
