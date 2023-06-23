<link rel="stylesheet" href="styles.css">
<?php

//VARIABLES DE LOS DATOS

$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$impuesto = $_POST['impuesto'];

//VARIABLES DE LOS DETALLES

$codigo1 = $_POST['codigo1'];
$descripcion1 = $_POST['desc1'];
$cantidad1 = $_POST['cantidad1'];
$precio1 = $_POST['precio1'];

$codigo2 = $_POST['codigo2'];
$descripcion2 = $_POST['desc2'];
$cantidad2 = $_POST['cantidad2'];
$precio2 = $_POST['precio2'];

$codigo3 = $_POST['codigo3'];
$descripcion3 = $_POST['desc3'];
$cantidad3 = $_POST['cantidad3'];
$precio3 = $_POST['precio3'];


// APLICACION DE CONDICIONES EN LOS DATOS A COMPLETAR

echo '<div class=div-php>'
. '<h1>Datos ingresados</h1>'
. '</div>';

if ($fecha == "" or $nombre == "" or $apellido == "") {
    echo "<div class=div-php> Por favor complete todos los campos de tus datos personales
    </div>";   
} else {
    echo '<div class=div-php>';
    echo "La fecha ingresada es: " . $fecha . "<br>";
    echo "Su nombre y apellido es: " . $nombre . " " . $apellido . "<br>";
    echo "El impuesto a deducir es: " . $impuesto ."%";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo '</div>'
    ;
};

// APLICACION CONDICIONES DE LOS DETALLES DE PRODUCTOS 
echo "<div class=div-php>"
    . '<h2>Detalle del pedido</h2>'
    . "</div>";

// ---------------   CONDICIONES PRODUCTO 1  ------------------ //

if ($codigo1 == "" and $descripcion1 == "" and $cantidad1 == "" and $precio1 =="" ) {
    echo "<div class=div-php>"
    . "Sin datos en producto 1"
    ."</div>"
    . "<br>";
} else { 
    if ($codigo1 == "" or $descripcion1 == "" or $cantidad1 == "" or $precio1 ==""){
        echo "<div class=div-php>" 
        . "Faltan campos en el producto 1"
        . "<br>"
        . "</div>";
        } else {
            echo '<div class=div-tablas>'
            . '<table>'
            . '<th style="margin-bottom: 1rem"> Producto 1 </th>'
            ."<tr>"
            . "<td><b>Código:</b></td>"
            . "<td>" . $codigo1 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Descripción:</b></td>"
            . "<td>" . $descripcion1 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Cantidad:</b></td>"
            . "<td>" . $cantidad1 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Precio unitario:</b></td>"
            . "<td>" . "$".$precio1 . "</td>"
            . "</tr>"
            . "</table>"
            . "</div>";
        }
};


// ------------------- CONDICIONES DEL PRODUCTO 2 ---------------------- //


if ($codigo2 == "" and $descripcion2 == "" and $cantidad2 == "" and $precio2 =="" ) {
    echo "<div class=div-php>"
    . "Sin datos en producto 2"
    ."</div>"
    . "<br>";
} else { 
    if ($codigo2 == "" or $descripcion2 == "" or $cantidad2 == "" or $precio2 ==""){
        echo "<div class=div-php>" 
        . "Faltan campos en el producto 2"
        . "<br>"
        . "</div>";
        } else {
            echo '<div class=div-tablas>'
            . '<table>'
            . '<th style="margin-bottom: 1rem"> Producto 2 </th>'
            ."<tr>"
            . "<td><b>Código:</b></td>"
            . "<td>" . $codigo2 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Descripción:</b></td>"
            . "<td>" . $descripcion2 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Cantidad:</b></td>"
            . "<td>" . $cantidad2 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Precio unitario:</b></td>"
            . "<td>" . "$".$precio2 . "</td>"
            . "</tr>"
            . "</table>"
            . "</div>";
        }
};

// ------------------- CONDICIONES DEL PRODUCTO 3 ------------------------- //


if ($codigo3 == "" and $descripcion3 == "" and $cantidad3 == "" and $precio3 =="" ) {
    echo "<div class=div-php>"
    . "Sin datos en producto 3"
    ."</div>"
    . "<br>";
} else { 
    if ($codigo3 == "" or $descripcion3 == "" or $cantidad3 == "" or $precio3 ==""){
        echo "<div class=div-php>" 
        . "Faltan campos en el producto 3"
        . "<br>"
        . "</div>";
        } else {
            echo '<div class=div-tablas>'
            . '<table>'
            . '<th style="margin-bottom: 1rem"> Producto 3 </th>'
            ."<tr>"
            . "<td><b>Código:</b></td>"
            . "<td>" . $codigo3 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Descripción:</b></td>"
            . "<td>" . $descripcion3 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Cantidad:</b></td>"
            . "<td>" . $cantidad3 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td><b>Precio unitario:</b></td>"
            . "<td>" . "$".$precio3 . "</td>"
            . "</tr>"
            . "</table>"
            . "</div>";
        }
};

echo '<button class="btn-control"><a href="index.html">Volver</a></button>';

?>