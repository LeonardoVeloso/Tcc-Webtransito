@extends('index')

@section('form')
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
    <div class="row row-cols- p-1 h-auto d-inline-flex mw-100 clearfix position-static flex-row align-content-center mt-5 w-75" id="content-form">
        <div class="mw-100 h-auto w-75 container-fluid d-block shadow border-dark" id="form">
            <form method="post" action="#"> 
                <fieldset>
                    <legend>Identificação do Veículo</legend>
                    <div class="form-row"> 
                        <div class="col-4">
                            <input type="text" name="placa" class="form-control" placeholder="Placa">
                        </div>
                        <div class="col-4">
                            <input type="text" name="marca" class="form-control" placeholder="Marca">
                        </div>
                        <div class="col-4">
                            <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 col-4">
                            <input type="text" name="cor" class="form-control" placeholder="Cor">
                        </div>
                        <div class="col-4 col-md-3">
                            <input type="text" name="chassi" class="form-control" placeholder="Chassi">
                        </div>
                        <div class="col-4 col-md-3">
                            <input type="text" name="pais" class="form-control" placeholder="País">
                        </div>
                        <div class="from-group col-8 col-md-3">
                            <div class="input-group">
                                <select name="especie" class="form-control">
                                    <option value="null" selected>Espécie</option>
                                    <option value="1">Passageiro</option>
                                    <option value="2">Carga</option>
                                    <option value="3">Misto</option>
                                    <option value="4">Competição</option>
                                    <option value="5">Tração</option>
                                    <option value="6">Especial</option>
                                    <option value="7">Coleção</option>
                                </select>                                             
                            </div>                                         
                        </div>                                     
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Identificação do Condutor</legend>
                    <div class="form-row"> 
                        <div class="col-5 col-md-5">
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="col-4 col-md-4">
                            <input type="text" name="cpf" class="form-control" placeholder="CPF">
                        </div>
                        <div class="col-3 col-md-3">
                            <input type="text" name="rg" class="form-control" placeholder="RG">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4 col-md-4">
                            <input type="text" name="cnh" class="form-control" placeholder="CNH">
                        </div>
                        <div class="from-group col-5 col-md-2">
                            <div class="input-group">
                                <select name="uf_cnh" class="form-control">
                                    <option value="null" selected>UF-CNH</option>
                                    <option value="1">AC</option>
                                    <option value="2">AM</option>
                                    <option value="3">BA</option>
                                    <option value="4">...</option>
                                    <option value="5">MG</option>
                                    <option value="6">...</option>
                                    <option value="7">...</option>
                                </select>                                             
                            </div>                                         
                        </div>
                        <div class="col-3 col-md-2">
                            <input type="text" name="categoria" class="form-control" placeholder="Categoria">
                        </div>
                        <div class="col-6 col-md-4">
                            <input type="date" name="validade" class="form-control" placeholder="Validade">
                        </div>
                    </div>                                 
                </fieldset>
                <br>
                <fieldset>
                    <legend>Local/Data/Hora</legend>                                 
                    <div class="form-row">
                        <div class="col-5 col-md-4">
                            <input type="text" name="logradouro" class="form-control" placeholder="Logradouro">
                        </div>
                        <div class="col-3 col-md-2">
                            <input type="text" name="numero" class="form-control" placeholder="Número">
                        </div>
                        <div class="col-4 col-md-3">
                            <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                        </div>
                        <div class="col- col-md-3">
                            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6 col-md-4">
                            <input type="date" name="data" class="form-control" placeholder="Data">
                        </div>                                     
                        <div class="col-3 col-md-2">
                            <input type="text" name="hora" class="form-control" placeholder="Hora">
                        </div>
                        <div class="col-3 col-md-3">
                            <fieldset disabled>
                                <input type="text" name="uf_mg" class="form-control" placeholder="UF-MG">
                            </fieldset>
                        </div>                                     
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Identificação da Infração</legend>
                    <div class="form-row">
                        <div class="col-3">
                            <input type="text" name="codigo_infracao" class="form-control" placeholder="Código">
                        </div>
                        <div class="col-9">
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6 col-md-3">
                            <input type="text" name="equipamento_afericao" class="form-control" placeholder="Equip. Aferição">
                        </div>                                     
                        <div class="col-6 col-md-3">
                            <input type="text" name="medicao_realizada" class="form-control" placeholder="Medição Realizada">
                        </div>
                        <div class="col-6 col-md-3">
                            <input type="text" name="limite_regulamentado" class="form-control" placeholder="Limite Regulamentado">
                        </div>                                     
                        <div class="col-6 col-md-3">
                            <input type="text" name="valor_considerado" class="form-control" placeholder="Valor Considerado">
                        </div>                                     
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <textarea class="form-control" name="observacoes" id="exampleFormControlTextarea1" rows="3" placeholder="Observações"></textarea>
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Medida Administrativa</legend>
                    <div class="form-row">
                        <div class="from-group col-4">
                            <div class="input-group">
                                <select name="especie" class="form-control">
                                    <option value="null" selected>Selecione</option>
                                    <option value="1">Remoção</option>
                                    <option value="2">Recolhimento</option>
                                    <option value="3">Retenção</option>
                                    <option value="4">Teste de Alcoolemia</option>
                                </select>                                             
                            </div>                                         
                        </div>
                        <div class="from-group col-4">
                            <div class="input-group">
                                <select name="especie" class="form-control">
                                    <option value="null" selected>Selecione</option>
                                    <option value="1">CNH/PPD/ACC</option>
                                    <option value="2">CRLV</option>
                                    <option value="3">CRV</option>
                                    <option value="4">Veículo</option>
                                </select>                                             
                            </div>                                         
                        </div>
                        <div class="col-4">
                            <input type="text" name="ficha_vistoria" class="form-control" placeholder="Ficha de Vistória">
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Anexar Imagem</legend>
                    <div class="form-row">
                        <div class="col">
                            <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset disabled>
                    <legend>Identificção do Agente</legend>
                    <div class="form-row">
                        <div class="col-4 col-md-3">
                            <input type="text" name="matricula" class="form-control" placeholder="Matrícula">
                        </div>
                        <div class="col-8 col-md-5">
                            <input type="text" name="nome_agente" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                </fieldset>
                <br>
                <div>
                    <input type="submit" value="Finalizar" id="btnFinalizar"/>
                </div>
                <br>
            </form>                         
        </div>
    </div>
    <br>
</div>
    
@endsection