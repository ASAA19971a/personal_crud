<h1>LOGIN</h1>
<a href="view/MntProducto/">Producto</a>

<form method="POST" id="form_login">
    <input type="text" name="usuarioL" id="usuarioL" placeholder="usuario" required>
    <input type="text" name="claveL" id="claveL" placeholder="contraseña" required>
    <button type="submit"></button>
</form>

<script>
function init() {
    $("#form_login").on("submit", function(e) {
        ingresar(e);
    });
}

function ingresar(usuarioL) {
    e.preventDefault();
    var formData = new FormData($("#producto_form")[0]);
    $.post(
        "../../controller/usuario.php?op=login", {
            usuarioL: usuarioL
        },
        function(data) {
            data = JSON.parse(data);
            $("#usuarioL").val(data.usuarioL);
            $("#claveL").val(data.claveL);
        }
    );
}



init();
</script>