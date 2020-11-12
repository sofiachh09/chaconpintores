@extends('layouts.master')

@section('header')
@stop
@section('navbar')
    @parent
@stop
@section('content')
    <body class="leonardo">

    <a  href="{{action('controlador@inicio')}}"></a>
    <header>
       <center> <h1>Leonardo da Vinci</h1></center>
    </header>
    
    <h4>Mona Lisa</h4>
    <p>
    También conocida como La Gioconda, La Mona Lisa es un óleo sobre madera pintado por Leonardo entre 1503 y 1506. <br>
    La pintura es un retrato de Mona Lisa, la joven esposa de Franceso de Giocondo, según el testimonio de Giorgio Vasari (1511-1574), pintor,
    arquitecto, y biógrafo de varios artistas del Renacimiento italiano. La obra fue adquirida por Francisco I, rey de Francia desde 1515 hasta 1547. En 1911 la pintura fue robada y se recuperó dos años después, en 1913.    </p>
    <img id="" src="imagenes\mona.jpg" alt="" height="390" width="300">
    <br>
    <h4>La anunciación</h4>
    <p>
    Pintada entre los años 1472 y 1475, La anunciación es un cuadro al óleo sobre madera que representa los primeros pasos de Leonardo en la pintura, <br>
    a pesar de que no todos concuerdan con el veredicto. <br>
    El cuadro estuvo "escondido" en un monasterio hasta 1867 cuando fue trasladado a la Galleria degli Uffizi, en Florencia. <br>
    Fue atribuido inicialmente a Domenico Ghirlandaio, pintor contemporáneo a Leonardo e igualmente aprendiz en el taller de Verrocchio.</p>
    <img   src="imagenes\2.jpg" alt="angeles" height="390" width="260"> 
    
    <h4>Retrato de Ginevra de' Benci</h4>
    <p>El retrato de Ginevra de' Benci fue pintado por Leonardo entre 1474 e 1476. Se trata de un óleo sobre madera y recibe ese nombre por la persona retratada, quien es una joven aristócrata de Florencia, famosa y admirada por su inteligencia. La cabeza
        de la joven se encuentra enmarcada por las hojas de un arbusto de enebro, mientras que al fondo puede contemplarse un cuidado paisaje natural.</p>
        <img  src="imagenes\3.jpg" alt="" height="390" width="260">
  
    <h4>La Virgen de las rocas</h4>
    <p>La Virgen de las rocas es un óleo sobre madera y fue ejecutado alrededor de 1485. Aquí, las figuras se encuentran frente a una gruta y sus formas están envueltas en una bruma (sfumato) que le confiere a la pintura un carácter casi surrealista. Esta
        composición es un perfecto ejemplo del dominio del claroscuro en la pintura de Leonardo, así como de la técnica del sfumato que él desarrolló.</p>
        <img  src="imagenes\4.jpg" alt="" height="380" width="260"> 
    
@stop
@section('footer')
    @parent
@stop