<?php


//Defino dos variables con mi nombre y apellidos
$nombre = "Manuel";
$apellido ="Romero";
//Visualizo el texto con echo y print, por ejemplo en mi caso (deben de aparecer las comillas del ejemplo
// mi nombre es "Manuel" y mi apellido es "Romero"

//1)con echo pasando varios argumentos (separadados por coma)
//Esta es la línea buena
//     echo 'Mi nombre es "',$nombre,'" y mi apellido es',$apellido,'<br />';
$msj[]='Mi nombre es "'.$nombre.'" y mi apellido es "'.$apellido.'""<br />';


//2)con print
//Esta es la línea buena
//       print 'Mi nombre es "'.$nombre.'" y mi apellido es'.$apellido.'<br />';
$msj[]='Mi nombre es "'.$nombre.'" y mi apellido es"'.$apellido.'""<br />';
//Explica en el fichero diferencias entre echo y print y semejanzas.
$msj[] ='echo  hace esto que no hace print ...';
$msj[] ='print tiene esto que no tiene echo ...';
$msj[] ='Ambos son iguales en ...';

//Indica Por qué puedes pasar los argumentos sin usar paréntesis
$msj []= 'Tanto echo como print puede usarse con paréntesis y sin paréntesis porque ...';

/*Sintaxis heredoc,*/
//Asigna a una variable llamada informe un texto de cinco líneas,
//la etiqueta de finalización es FIN
//Posteriormente visualizas el texto
// El contenido de 'informe' es:
//   ........
// aquí aparecer el contenido del informe
// debe de respetarse el número de 5 líneas asignadas previamente";
//Tener cuidado con que la etiqueta no lleve en esa línea ningún otro carácter (espacios en blanco o tabulacones)
$informe =<<<FIN
<pre>
Este es un informe que tiene cinco líneas
esta es la primera
a continuación va la segunda
la tercera ya en el medio
la cuarta que es la penúltima
y la última la quinta
</pre>
FIN;

$msj[]= $informe;


/*PROBANDO VARIABLES*/
//Crea una variable y asígnale un valor
$v = 25;
//visualiza el valor de la variable y el tipo que eś
$msj[]="<span class=variable>\$v=25</span>, Valor de la variable \$v <span class=variable>-$v-</span>";
$msj[]="Tipo de la variable es <span class=variable>".gettype($v)."</span>";
//Cambia la varialble a los siguientes tipos :boolean, float, string y null,  y visualizar su valor y tipo )
$v2=true;
$msj[]="<span class=variable>\$v=true</span> Valor de la variable <span class=variable>-$v2-</span>";
$msj[]="Tipo de la varialbe es <span class=variable>".gettype($v)."</span>";
$v3=7.25;
$msj[]="<span class=variable>\$v=7.25</span> Valor de la variable <span class=variable>-$v3-</span>";
$msj[]="Tipo de la varialbe es <span class=variable>".gettype($v)."</span>";
$v4="Hola Caracola";
$msj[]="<span class=variable>\$v=\"Hola Caracola\"</span> Valor de la variable <span class=variable>-$v4-</span>";
$msj[]="Tipo de la varialbe es <span class=variable>".gettype($v)."</span>";
$v5=null;
$msj[]="<span class=variable>\$v=null</span> Valor de la variable <span class=variable>-$v5-</span>";
$msj[]="Tipo de la varialbe es <span class=variable>".gettype($v)."</span>";


//Prueba a ver el valor y tipo de una variable no definida previamente
$msj[]="\$a variable no creada previamente valor <span class=variable>-$a-</span>";
$msj[]="Tipo de la varialbe no creada es <span class=variable>".gettype($a)."</span>";


/*Visualiza el código ascii del valor 64 al 122 en caracter usando la función ascii*/
$a=count ($msj);
$msj[$a]="Código ascii del valor 64 al 122<br />";
for ($n=64; $n<=122; $n++){
    $msj[$a].=sprintf("&nbsp&nbsp%d = %c&nbsp&nbsp&nbsp",$n, $n);
}

//Obtén la fecha actual y visualiza su valor con formato dia-mes-año en número usa la función date() para ello
$msj[] = "Fecha actual <span class=span>" . date("d-m-y", time()).'</span>';

//Obtener los días, luego horas y luego minutos transcurridos desde el 1/1/1970 (round() o floor() para redondear
$msj[] = "Días desde el 1/1/1970 <span class=variable>" . floor((time() / 86400)) . "</span> días";

$msj[] = "horas desde el 1/1/1970 <span class=variable>" . floor((time() / 3600)) . "</span> horas";;

$msj[] = "minutos desde el 1/1/1970 <span class=variable>" . floor((time() / 60)) . "</span> minutos";;


// Obtén la fecha actual con formato por ejemplo
// Lunes, día 25 de enero de 2013
setlocale(LC_ALL, "es_ES.UTF-8");

$msj[] = "Fecha con formato personalizado <span  class=variable>" . strftime("%A, día %d de %B de %Y ").'</span>';// date("l, \dí\a d \d\e F \d\e Y", time())."-";

//Asigna a una variable la fecha de tu cumpleaños
// Realiza una operación y obtén tu edad en años, meses y días (valor entero).
// tienes 23 años, 10 meses y 4 días
$d = 27;
$m = 12;
$y = 1969;
$f = "$m/$d/$y";


//Convierte una cadena a stamp (marca de tiempo
$date = strtotime($f);

$msj[]= "Fecha " . date("d - m - y", $date) . "<br />";

$y_nac = date("Y", $date);
$y_act = date("Y", time());
$m_nac = date("n", $date);
$m_act = date("n", time());
$d_nac = date("j", $date);
$d_act = date("j", time());


$y = $y_act - $y_nac;
//Si no ha llegado el mes de cumpleaños quitamos un año
if ($m_act < $m_nac) {
    $y -= 1;
    $m = (12 - $m_nac) + ($m_act-1);
    $d = $d_act;
}
if ($m_act > $m_nac) {
    $m = $m_act - $m_nac;
    $d = $d_act;
}
if ($m_act == $m_nac) {
    if ($d_act < $d_nac) {
        $y -= 1;
        $m = 11;
        $d = $d_act;
    } else {
        $m = 0;
        $d = $d_act - $d_nac;
    }

}
$msj[] = "Fecha de nacimeinto $d_nac/$m_nac/$y_nac fecha actual  $d_act/$m_act/$y_act tienes $y años";
$msj[] = "Fecha de nacimeinto $d_nac/$m_nac/$y_nac fecha actual  $d_act/$m_act/$y_act  tienes $m meses";
$msj[] = "Fecha de nacimeinto $d_nac/$m_nac/$y_nac fecha actual  $d_act/$m_act/$y_act  tienes $d dias";




//Asigna a una variable una fecha de 30/10/1969 (mira las funciones strtotime() para ello
// Obtén su edad en años, en meses y luego en días siempre redondeando
// tienes 23 años
// tienes 286 meses
// tienes 8737 días
//Asigna a una variable la fecha de tu cumpleaños
// Realiza una operación y obtén tu edad en años, meses y días (valor entero).
// tienes 23 años, 10 meses y 4 días
$d = 30;
$m = 10;
$y = 1969;
$f = "$m/$d/$y";


//Convierte una cadena a stamp (marca de tiempo
$date = strtotime($f);

$msj[]= "Fecha " . date("d - m - y", $date) . "<br />";

$y_nac = date("Y", $date);
$y_act = date("Y", time());
$m_nac = date("n", $date);
$m_act = date("n", time());
$d_nac = date("j", $date);
$d_act = date("j", time());


$y = $y_act - $y_nac;
//Si no ha llegado el mes de cumpleaños quitamos un año
if ($m_act < $m_nac) {
    $y -= 1;
    $m = (12 - $m_nac) + ($m_act-1);
    $d = $d_act;
}
if ($m_act > $m_nac) {
    $m = $m_act - $m_nac;
    $d = $d_act;
}
if ($m_act == $m_nac) {
    if ($d_act < $d_nac) {
        $y -= 1;
        $m = 11;
        $d = $d_act;
    } else {
        $m = 0;
        $d = $d_act - $d_nac;
    }

}
$msj[] = "Fecha de nacimeinto $d_nac/$m_nac/$y_nac fecha actual  $d_act/$m_act/$y_act tienes $y años";
$msj[] = "Fecha de nacimeinto $d_nac/$m_nac/$y_nac fecha actual  $d_act/$m_act/$y_act  tienes $m meses";
$msj[] = "Fecha de nacimeinto $d_nac/$m_nac/$y_nac fecha actual  $d_act/$m_act/$y_act  tienes $d dias";


//. Usa la función getdate(...) y visualiza con la función print_r(.) el valor que retorna, comenta el resultado
//. Si escribo getdate(1) podrías explicar el contenido del array que nos retorna
//. Obtener la edad de una persona nacida el 1/1/1969

$msj []=print_r(getdate(),true);
$msj []="La anterior salida es un print_r de lo que retorna getdate(), cuyo significado es ...";
$msj []=print_r(getdate(1),true);
$msj []="La anterior salida es un print_r de lo que retorna getdate(1), cuyo significado es ...";


$msj []='strtotime("now") = <span class=variable>'.strtotime("now").'</span>';
$msj []='Significado de strtotime("now") ...';

$msj[]= 'date("d-m-Y", strtotime("now"))<span class=variable>'.date('d-m-Y', strtotime("now")).'</span>';
$msj[]= 'Significado de date("d-m-Y", strtotime("now"))';

$msj[]= 'strtotime("27 September 1970")<span class=variable>'.strtotime("27 September 1970").'</span>';
$msj[]= 'Significado de strtotime("27 September 1970")';

$msj[]= 'date("d-m-Y",strtotime("10 September 2000"))<span class=variable>'.date('d-m-Y',strtotime("10 September 2000")).'</span>';
$msj[]= 'Significado de date("d-m-Y",strtotime("10 September 2000"))';

$msj[]= 'strtotime("+1 day")<span class=variable>'.strtotime("+1 day").'</span>';
$msj[]= 'Significado de strtotime("+1 day")';

$msj[]= 'date("d-m-Y",strtotime("+1 day"))<span class=variable>'.date('d-m-Y',strtotime("+1 day")).'</span>';
$msj[]= 'Significado de date("d-m-Y",strtotime("+1 day")) ... ';

$msj[]= 'strtotime("+1 week") <span class=variable>'.strtotime("+1 week").'</span>';
$msj[]= 'Significado de strtotime("+1 week") ...';

$msj[]= 'date("d-m-Y",strtotime("+1 week"))<span class=variable>'.date("d-m-Y",strtotime("+1 week")).'</span>';
$msj[]= 'Significado de date("d-m-Y",strtotime("+1 week")) ... ';

$msj[]= 'strtotime("+1 week 2 days 4 hours 2 seconds") <span class=variable>'.strtotime("+1 week 2 days 4 hours 2 seconds").'</span>';
$msj[]= 'Significado de strtotime("+1 week 2 days 4 hours 2 seconds") ... ';

$msj[]= 'date("d-m-Y",strtotime("+1 week 2 days 4 hours 2 seconds"))<span class=variable>'.date('d-m-Y',strtotime("+1 week 2 days 4 hours 2 seconds")).'</span>';
$msj[]= 'Significado de date("d-m-Y",strtotime("+1 week 2 days 4 hours 2 seconds")) ... ';

$msj[]= 'strtotime("next Thursday")<span class=variable>'.strtotime("next Thursday").'</span>';
$msj[]= 'Significado de  strtotime("next Thursday") .. ';

$msj[]= 'date("d-m-Y",strtotime("next Thursday"))<span class=variable>'.date('d-m-Y',strtotime("next Thursday")).'</span>';
$msj[]= 'Significado de date("d-m-Y",strtotime("next Thursday"))...';

$msj[]= 'strtotime("last Monday")<span class=variable>'.strtotime("last Monday").'</span>';
$msj[]= 'Significado de strtotime("last Monday")....';

$msj[]= 'date("d-m-Y",strtotime("last Monday"))<span class=variable>'.date('d-m-Y',strtotime("last Monday")).'</date>';
$msj[]= 'Significado de date("d-m-Y",strtotime("last Monday")) ...';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
</head>
<body>

<div class="contenedor">
    <h1>Probando instrucciones de php </h1>
    <hr />
    <ol>
<?php

foreach ($msj as $text) {
    echo "<div class=  msj><li> $text </li></div>";
}
?>
    </ol>
</div>
</body>
</html>
