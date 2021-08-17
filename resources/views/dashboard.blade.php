<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Navegacion') }} <br><br>
                    <button style="float: right; position: relative; bottom: 15px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Montar Tarea
                        </button>
                    <form method="get" action="{{url('dashboard')}}" style="position: relative; left: 15px;">
                            <input type="text" class="form-control" placeholder="Busca tareas..." name="texto" aria-label="Username" aria-describedby="basic-addon1">
                        </form>
                </h2>
            </x-slot>
                <div class="container">
                                            <!-- Button trigger modal -->
                       

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Montar Tarea</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('nuevo.post')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <input type="text" placeholder="Describe de forma corta de que tema es esta tarea" class="input-group" name="name"><br>
                                    <div class="mb-3">
                                    <textarea class="form-group" id="exampleFormControlTextarea1" name="description" rows="5" cols="53" style="resize: none;" placeholder="Describe tu problema de forma clara y concisa "></textarea>
                                    </div>
                                    <div class="mb3" style="border: rgb(107 149 218) 1px solid;">
                                    <input type="file" name="archive" >
                                    </div><br>
                                    <div class="mb-3">
                                        <select value="" name="degree" class="input-group">
                                            <option value="Sexto" id="">Sexto</option>
                                            <option value="Septimo" id="">Septimo</option>
                                            <option value="Octavo" id="">Octavo</option>
                                            <option value="Noveno" id="">Noveno</option>
                                            <option value="Decimo" id="">Decimo</option>
                                            <option value="Decimo" id="">UnDecimo</option>
                                        </select>
                                        <br>
                                        <div class="mb-3">
                                        <select value="" name="course" class="input-group">
                                            <option value="Naturales" id="">Naturales</option>
                                            <option value="Catedra" id="">Catedra</option>
                                            <option value="Matematicas" id="">Matematicas</option>
                                            <option value="Etica" id="">Etica</option>
                                            <option value="Artistica" id="">Artistica</option>
                                            <option value="Religion" id="">Religion</option>
                                            <option value="Castellano" id="">Castellano</option>
                                            <option value="Geometria" id="">Geometria</option>
                                            <option value="Ingles" id="">Ingles</option>
                                            <option value="Educacion Fisica" id="">Educacion Fisica</option>
                                            <option value="Quimica" id="">Quimica</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                               <p>Esta tarea te dara 10 puntos</p>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>

@foreach($Posts as $Post)
<div class="card">
  <div class="card-header">
    {{$Post->name}} 
    <span class="badge bg-primary">{{$Post->degree}}</span>
    <span class="badge bg-success">{{$Post->course}}</span>
  </div>
  <div class="card-body">
  <a style="color: blue; "  href="{{ url ('perfil/'.$Post->user->id)}}"><div style="position: relative;" class="cart-title">{{$Post->user->name}}</div></a>
    <p class="card-text">{{ \Illuminate\Support\Str::limit($Post->description,150) }}</p>
    <a href="{{ url ('vist-post/'.$Post->id)}}" class="btn btn-outline-success" >Ver mas</a></p>
  </div>
</div>                 
@endforeach
{!! $Posts->links() !!}

 <style>
     .card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
}
 </style>
                </div>
                  <!-- Site footer -->
                  <br><br>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre esta pagina</h6>
            <p class="text-justify" style="font-family: 'Salsa', cursive;">Pagina hecha por Ernesto Baruch con el <i style="color: red;">❤</i> para todos.  </p>
          </div>

         
</footer>
<style>
    .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>
        </x-app-layout>
</body>
</html>