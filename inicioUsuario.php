<?php
session_start();
if (isset($_SESSION['tipo'])) {
    if ($_SESSION['tipo'] == 0) {
        $usuario = $_SESSION['mail'];
        // echo $usuario;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tu Título Aquí</title>
    <link rel="stylesheet" href="estilosinterfazU.css"> <!-- Enlaza tu archivo CSS externo -->
	<link rel="stylesheet" href="normaliza.css">
	<style>
		/* Estilos generales */
		@import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&family=Raleway:wght@300;400;700&display=swap');


body {
    font-family: 'Raleway', sans-serif;

    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

/* Encabezado */
header {
    background-color:#AEB6BF  ;
    color: black;
    text-align: center;
    padding: 20px;
}

.titulo h1 {
    margin: 0;
    font-size: 28px;
    color: #ecf0f1;
}

.titulo h4 {
    margin: 0;
    font-size: 18px;
    color: #bdc3c7;
}

/* Contenedor principal */
.contenedor {
    display: flex;
    justify-content: flex-start;
}

/* Barra de navegación */
.barra {
    background-color: #D6EAF8;
    border-radius: 10px;
    text-align: center;
    padding: 10px 0;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.barra ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.barra li {
    margin: 15px 0;
}

.barra a {
    color: #333333;
    text-decoration: none;
    transition: color 0.3s ease;
    display: block;
    padding: 8px;
    border-radius: 5px;
}

.barra a:hover {
    color: #c43e00;
    background-color: #f0f0f0;
}

/* Contenido principal */
main {
	
    height: 468px;

    flex-grow: 1;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

/* Pie de página */
footer {
    text-align: center;
    padding: 10px;
    background-color: #f5f5f5;
    border-top: 1px solid #e0e0e0;
}
	</style>
</head>
<body>
    <header>
        <div class="titulo">
            <h1>К Н І Г А</h1>
            <h4>U S U A R I O</h4>
        </div>
    </header>
    <div class="contenedor">
        <nav class="barra">
            <ul>
                <li><h2><a href="mostrarprestamosU.php">Prestamos </a></h2></li>
                <li><h2><a href="mostrarlibrosU.php">Libros </a><h2></li>
                <li><h2><a href="#">Menu </a><h2></li>
                <li><h2><a href="#">Cerrar sesión</a><h2></li>
            </ul>
        </nav>
        <main>
            <!-- Contenido principal de la página aquí -->
        </main>
    </div>
    <footer>
        <!-- Pie de página aquí -->
    </footer>
</body>
</html>
<?php
    } else {
        echo "El usuario no está autorizado";
    }
} else {
    echo "Inicie sesión primero";
}
?>