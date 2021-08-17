<x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Tarea') }}
                </h2>
            </x-slot>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!--======================================
=            Apock web design            =
=======================================
Gracias por utilizar mi contenido!
Me siento agradecido compartiendo para Uds
No olvides seguirme en:
👉 Instagram - https://www.instagram.com/ApockGraficos
👉 Twitter - https://twitter.com/ApockGraficos
👉 Faccobook - https://www.facebook.com/ApockGraficos
====-->

<style type="text/css">
/*=====================================
reset estilos
no es necesario que copies esto
=====================================*/

html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

/*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: linear-gradient(#B873FF, transparent);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    background: linear-gradient(45deg, #BC3CFF, #317FFF);
    border-radius: 0 0 20px 20px;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 180px;
    height: 180px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 5px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}
</style>
    <!--==========================
=            html            =
===========================-->
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar" style="  display: inline-block;
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
  border-radius: 50%;">
                @foreach($profiles as $Profile)<img style="  
  height: 100%;
  " src="{{asset('storage').'/'.$Profile->photo}}" style="border-radius: 50%;" alt="img-avatar">@endforeach
                </div>
                @if (Auth::id() === $usuarios->id)
                @if ($profiles->count()>0)
                @else
                <button type="button" class="btn btn-primary boton-portada" data-toggle="modal" data-target="#storeperfil">
                <i class="far fa-image"></i>
                Dale vida a tu perfil
                </button>
                

<!-- Modal -->
<div class="modal fade" id="storeperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar a tu perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('store.perfil')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
                    <textarea class="form-group" id="exampleFormControlTextarea1" name="description" rows="5" cols="45" style="resize: none;" placeholder="Dime una descripcion sobre ti"></textarea>
                    <p>¿En que grado estas?</p>
                    <select value="" name="degree" class="input-group">
                                            <option value="Sexto" id="">Sexto</option>
                                            <option value="Septimo" id="">Septimo</option>
                                            <option value="Octavo" id="">Octavo</option>
                                            <option value="Noveno" id="">Noveno</option>
                                            <option value="Decimo" id="">Decimo</option>
                                            <option value="Decimo" id="">UnDecimo</option>
                                        </select>
               <textarea class="form-group" id="exampleFormControlTextarea1" name="links" rows="5" cols="45" style="resize: none;" placeholder="Si deseas puedes poner un link hacia una red social"></textarea>
               <input type="file" name="photo" class="form-group">
              <br> <span>Pon tu fecha de nacimiento</span>
               <input type="date" name="birthay" class="form-group">
               <button type="submit" class="btn btn-primary">Registrar</button>

                                          
        </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
                
                @endif
                @endif


                <!-- Modal -->
                @foreach($profiles as $Profile) 
<div class="modal fade" id="editperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar perfil </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('editar.post',$Profile->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
                    <textarea class="form-group" id="exampleFormControlTextarea1" name="description" rows="5" cols="45" style="resize: none;" placeholder="Dime una descripcion sobre ti">{{$Profile->description}}</textarea>
                    <p>¿En que grado estas?</p>
                    <select value="" name="degree" class="input-group">
                                            <option value="Sexto" id="">Sexto</option>
                                            <option value="Septimo" id="">Septimo</option>
                                            <option value="Octavo" id="">Octavo</option>
                                            <option value="Noveno" id="">Noveno</option>
                                            <option value="Decimo" id="">Decimo</option>
                                            <option value="Decimo" id="">UnDecimo</option>
                                        </select>
               <textarea class="form-group" id="exampleFormControlTextarea1" name="links" rows="5" cols="45" style="resize: none;" placeholder="Si deseas puedes poner un link hacia una red social">{{$Profile->links}}</textarea>
               <input type="file" name="photo" class="form-group">
              <br> <span>Pon tu fecha de nacimiento</span>
               <input type="date" value="{{$Profile->birthay}}" name="birthay" class="form-group">
               <button type="submit" class="btn btn-primary">Registrar</button>

                                          
        </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
@endforeach
          
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">{{$usuarios->name}}</h3>
                <p class="texto">@foreach($profiles as $Profile) {{$Profile->description}}@endforeach</p>
            </div>
            
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">@foreach($profiles as $Profile)
                    <li><i class="icono fas fa-map-signs"></i>Grado: {{$Profile->degree}}</li>
                    <li><i class="icono fas fa-phone-alt"></i><a href="{{$Profile->links}}">Red Social/Contacto</a></li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento {{$Profile->birthay}}</li>
                </ul>@endforeach
            </div>
            
        </div>
        <br><br>
        <div class="container" style="text-align: center;">
            <h2>Publicaciones de {{$usuarios->name}} </h2>
            <div>
            @foreach($posts as $Post)
            <a href="{{ url ('vist-post/'.$Post->id)}}">{{$Post->name}}</a><br>
            @endforeach
            </div>
        </div>
    </section>
    <!--====  End of html  ====-->

<!--=============================
redes sociales fijadas en pantalla
No es necesario que copies esto!
==============================-->
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>

<!--====  End of tarjeta  ====-->
</body>

</html>
</x-app-layout>
