@extends('layouts.master')
@section('title','Greys Anatomy')
@section('header')
  <center><h1 > <i>Greys Anatomy</i> </h1></center>
@stop

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Historia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="">Temporadas<span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">Personajes</a>
      <a class="nav-link" href="#">Temporadas y Capitulos</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mi informacion</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/imagenes/fondo1.jpg" class="d-block w-100" alt="Logo" width="500" height="400">
    </div>
    <div class="carousel-item">
      <img src="/imagenes/zola.jpg" class="d-block w-100" alt="zola" width="450" height="620">
    </div>
    <div class="carousel-item">
      <img src="/imagenes/persona.jpg" class="d-block w-100" alt="personajes" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop 

@section('content')
    <h2><i>Greys </i></h2>
    
    <h3>Historia De La serie </h3>
    <p>La serie cuenta con 17 Temoradas y 363 capitulos </p>
    <p>La serie sigue a Meredith Grey , la hija de una cirujana general de renombre llamada Ellis Grey, luego de ser aceptada en el programa de residencia en el ficticio Seattle Grace Hospital. 
    Durante su tiempo como residente, Grey trabaja junto con las doctoras Cristina Yang , Izzie Stevens , Alex Karev y George O'Malley , quienes luchan por equilibrar sus vidas personales con el trabajo agitado y los horarios de entrenamiento. 
    Ellos son supervisados durante su internado por Miranda Bailey , una residente de alto rango que trabaja para asistir a Derek Shepherd , el jefe de neurocirugía y el interés amoroso de Meredith; 
    Preston Burke, el jefe de cardio, quien se convierte en el prometido de Yang; y Richard Webber , el Jefe de Cirugía y cirujano general adjunto, y amante de Ellis Grey décadas atrás. En la sexta temporada, a estos residentes se les unen Jackson Avery y April Kepner , 
    ex residentes de Mercy-West que se unen a Seattle Grace después de una fusión administrativa. 
    Durante las primeras seis temporadas, Burke, O'Malley y Stevens abandonan la serie. Además de Webber, Burke y Shepherd, el ala quirúrgica está supervisada principalmente por Addison Montgomery , como jefa de obstetricia, Callie Torres de ortopedia; Arizona Robbins , 
    como directora de cirugía pediátrica luego como directora de cardio; Teddy Altman, Amelia Shepherd , la hermana de Derek, quien es contratada para reemplazarlo como jefe de neurocirugía.</p>
@stop 
@section('footer')
<h2><i>Personajes</i></h2>
<hr>
<p>
A:
Addison Montgomery,
Atticus Lincoln,
Adele Webber,
Andrew Perkins,
Alex Karev,
Amelia Shepherd,
Andrew DeLuca,
April Kepner,
Arizona Robbins,
Ava
<hr>
B:

Ben Warren,
Bailey Shepherd-Grey,
Betty Nelson
<hr>
C:

Callie Torres,
Carina DeLuca,
Carlos Torres,
Catherine Avery,
Cristina Yang,
Charles Percy,
Cece Colvin,
Casey Parker,
Carolyn Shepherd,
Craig Thomas.
<hr>
D:

Denny Duquette,
Derek Cristopher Shepherd,
Dahlia Qadri.
<hr>
E:

Ellis Grey,
Eli,
Ellis Grey-Shepherd,
Erica Hahn.
<hr>
F:

Finn Dandridge.
<hr>
G:

George O`Malley,
Gary Clark.
<hr>
H:

Harper Avery,
Heather Brooks,
Harriet Kepner-Avery,
Henry Burton,
Harold O’Malley.
<hr>
I:

Izzie Stevens.
<hr>
J:

Jackson Avery,
Jo Wilson,
Joe,
Jane Burke,
Julia Canner,
Jerry O’Malley.
<hr>
L:

Leah Murphy,
Levi Schmitt,
Lexie Grey,
Louise O’Malley,
Lucy Fields,
Lizzy Shepherd.
<hr>
M:

Maggie Pierce,
Mark Sloan,
Matthew Taylor,
Meredith Grey,
Miranda Bailey.
<hr>
N:

Nathan Riggs,
Nicole Herman,
Nancy Shepherd,
Nico Kim,
Norman Shales.
<hr>
O:

Olivia Harper,
Owen Hunt.
<hr>
P:

Penny Blake,
Preston Burke.
<hr>
R:

Richard Webber,
Reed Adamson,
Robert Stark,
Rose.
<hr>
S:

Sadie Harris,
Shane Ross,
Sidney Heron,
Sloan Riley,
Stephanie Edwards,
Sofia Robin Sloan Torres,
Steve Mastow.
<hr>
T:

Teddy Altman,
Thatcher Grey,
Tucker Jones,
Tom Koracick, 
Taryn Helm.
<hr>
V:

Vikram Roy, 
Virginia Dixon.
<hr>
W:

William George Jones.
<hr>
Z:

Zola Shepherd-Grey.</p>
<hr>

<H1>Mi informacion</H1>
<h3>Nombre:</h3>
<p>Sofia Chacon Holguin 5E</p>
@stop 


