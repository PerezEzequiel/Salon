<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesion</p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input id ="email" placeholder="Ingrese su email" type="email" name="email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input id ="password" type="password" name="password">
    </div>
    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="acciones">
    <a href="/crear-cuenta">No tenes una cuenta? Crea una!</a>
    <a href="/olvide">Olvidaste tu password?</a>
</div>