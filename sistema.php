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

// DECLARACION DE VARIABLES PARA IMPUESTOS SELECCIONADOS

$impuesto1 = $precio1 * $impuesto / 100; 
$impuesto2 = $precio2 * $impuesto / 100;
$impuesto3 = $precio3 * $impuesto / 100;


// CALCULADOR PRECIO TOTAL DE CADA PRODUCTO //

$total1 = $cantidad1 * ($precio1 + $impuesto1);
$total2 = $cantidad2 * ($precio2 + $impuesto2);
$total3 = $cantidad3 * ($precio3 + $impuesto3);

$totalFinal =  $total1 + $total2 + $total3;


// VALIDAR QUE NO HAYA DATOS NEGATIVOS //

    if ($codigo1 < 0 ) {
        echo '<script>alert("El codigo del primer producto no puede ser un numero negativo")</script>';
        "</div>";   
        $codigo1 = "Error";
        $totalFinal = "Error";
    }
;

if ($codigo2 < 0 ) {
    echo '<script>alert("El codigo del segundo producto no puede ser un numero negativo")</script>';
    "</div>";   
    $codigo2 = "Error";
    $totalFinal = "Error";
}
;

if ($codigo3 < 0 ) {
    echo '<script>alert("El codigo del tercer producto no puede ser un numero negativo")</script>';
    "</div>";   
    $codigo3 = "Error";
    $totalFinal = "Error";
}
;

if ($cantidad1 < 0 ) {
    echo '<script>alert("La cantidad del primer producto no puede ser negativo")</script>';
    "</div>";   
    $cantidad1 = "Error";
    $totalFinal = "Error";
}
;

if ($cantidad2 < 0 ) {
    echo '<script>alert("La cantidad del segundo producto no puede ser negativo")</script>';
    "</div>";   
    $cantidad2 = "Error";
    $totalFinal = "Error";
}
;

if ($cantidad3 < 0 ) {
    echo '<script>alert("La cantidad del tercer producto no puede ser negativo")</script>';
    "</div>";   
    $cantidad3 = "Error";
            $totalFinal = "Error";
}
;

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
            . '<td class=columna-izquierda><b>Código:</b></td>'
            . '<td class=columna-derecha>' . $codigo1 . '</td>'
            . "</tr>"
            ."<tr>"
            . '<td class=columna-izquierda><b>Descripción:</b></td>'
            . "<td class=columna-derecha>" . $descripcion1 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Cantidad:</b></td>"
            . "<td class=columna-derecha>" . $cantidad1 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Precio unitario:</b></td>"
            . "<td class=columna-derecha>" . "$".$precio1 . "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Impuesto:</b></td>"
            . "<td class=columna-derecha>" . "$" . $impuesto1 .  "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Precio con impuesto</b></td>"
            . "<td class=columna-derecha>" . "$" . $precio1 + $impuesto1 .  "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Precio total + impuestos</b></td>"
            . "<td class=columna-derecha>" . "$" . $total1.  "</td>"
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
            . '<td class=columna-izquierda><b>Código:</b></td>'
            . "<td class=columna-derecha>" . $codigo2 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Descripción:</b></td>"
            . "<td class=columna-derecha>" . $descripcion2 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Cantidad:</b></td>"
            . "<td class=columna-derecha>" . $cantidad2 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Precio unitario:</b></td>"
            . "<td class=columna-derecha>" . "$".$precio2 . "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Impuesto:</b></td>"
            . "<td class=columna-derecha>" . "$" . $impuesto2 .  "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Precio con impuesto</b></td>"
            . "<td class=columna-derecha>" . "$" . $precio2 + $impuesto2 .  "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Precio total + impuestos</b></td>"
            . "<td class=columna-derecha>" . "$" . $total2.  "</td>"
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
            . "<td class=columna-izquierda><b>Código:</b></td>"
            . "<td class=columna-derecha>" . $codigo3 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Descripción:</b></td>"
            . "<td class=columna-derecha>" . $descripcion3 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Cantidad:</b></td>"
            . "<td class=columna-derecha>" . $cantidad3 . "</td>"
            . "</tr>"
            ."<tr>"
            . "<td class=columna-izquierda><b>Precio unitario:</b></td>"
            . "<td class=columna-derecha>" . "$".$precio3 . "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Impuesto:</b></td>"
            . "<td class=columna-derecha>" . "$" . $impuesto3 .  "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Precio con impuesto</b></td>"
            . "<td class=columna-derecha>" . "$" . $precio3 + $impuesto3 .  "</td>"
            . "</tr>"
            . "<tr>"
            . "<td class=columna-izquierda><b>Precio total + impuestos</b></td>"
            . "<td class=columna-derecha>" . "$" . $total3.  "</td>"
            . "</tr>"
            . "</table>"
            . "</div>";
        }
};

// DIV DEL PRECIO FINAL DEL PEDIDO //

echo "<div class=div-php>"
    . '<h2>Precio total de los datos cargados:</h2>'
    . '<h2><i>' . "$". $totalFinal
    . "</div></i>";

echo '<button class="btn-control"><a href="index.html">Volver</a></button>';

?>