@section('navbar')
<link rel="stylesheet" href="style.css">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('pintor1')}}">Leonardo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('pintor2')}}">Picasso</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('pintor3')}}">vicent</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('pintor4')}}" >edvard</a>
  </li>
</ul>
@show
