@extends('index')

@section('layout')
<nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex bg-secondary shadow mt-1 mb-1 w-100 mh-100" id="navbar"> 
    <img src="assets/Imagens/logoSistema.png" width="60"> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler17" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler17">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle nav-brand" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WebTrânsito</a>
                <div class="dropdown-menu"> 
                    <a class="dropdown-item" href="#">Pesquisar</a> 
                    <a class="dropdown-item" href="#">Relatório</a>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>                             
            </li>
            <li class="nav-item"> 
                <a class="nav-link" href="#">Novo AIT</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid h-auto w-100 flex-column min-vh-100" id="content">
    <div class="row p-1 mt-5 d-inline-flex shadow-sm position-static w-75" id="header-form">
        <div class="container w-25 m-auto p-auto position-static h-auto flex-row-reverse d-md-inline-flex d-none" id="imgHeaderForm">
            <img src="assets/Imagens/LogoSistema.png" alt="Responsive image" width="150" height="100" id="img-header-form" class="border border-dark d-none d-md-inline-flex">
        </div>
        <div class="container h-auto mh-100 mw-100 text-right w-75 d-inline" id="textForm">
            <h3 class="text-center border-bottom-0 border-dark border-0 border ml-n5">Auto de Infrações de Trânsito - AIT</h3>
            <fieldset disabled>
                <form> 
                    <div class="form-row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <input type="text" name="matricula" class="form-control" placeholder="Matricula">
                        </div>
                        <div class="invisible-sm col-md-2 col-lg-2 d-none d-md-inline"></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <input type="text" name="nome_agente" class="form-control" placeholder="Nome Agente">
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
    <div class="row mw-100 mt-5 w-75 d-inline-block" id="img-layout"></div>
    <br>
</div>
    
@endsection