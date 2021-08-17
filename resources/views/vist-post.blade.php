<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/vist.css')}}" rel="stylesheet" />
    </head>
    <body>
    <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Tarea') }}
                </h2>
            </x-slot>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center" >
                    <div class="col-md-6" style="bottom: 40px; position: relative;"">
                        <div class="target" style=" position: relative; left: 39px;">

                        <div class="small mb-1" style=" right: 15px;"><span style="font-size: 15px;" class=" top-5 start-100 translate-middle badge rounded-pill bg-danger">{{$Posts->degree}}</span></div>
                        <div class="small mb-1">
                        <span style="font-size: 15px;" class=" top-5 start-100 translate-middle badge rounded-pill bg-danger">{{$Posts->course}}</span></div>
                        @if (Auth::id() === $Posts->user->id)
                        <span>
                        <form action="{{route('borrar.post',$Posts->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button onclick="return confirm('¿Seguro Que quieres borrar este post?')" class="btn btn-danger">Borrar</button>
                        </form>
                        </span>
                        @endif

                        </div>
                        <h1 class="display-5 fw-bolder">{{$Posts->name}}</h1>
                        <p class="lead">{{$Posts->description}}</p>
                        <br><div class="d-flex">
                            <a class="btn btn-outline-dark flex-shrink-0"  target="_blank" href="{{asset('storage').'/'.$Posts->archive}}">
                            <i class="bi bi-file-pdf-fill"></i>
                                Ver Tarea
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="coments" style="width: 50%; position: relative; left:15px;">
        @comments(['model' => $Posts])
        </div>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">De Ernesto Baruch &copy; Para el mundo</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
</x-app-layout>