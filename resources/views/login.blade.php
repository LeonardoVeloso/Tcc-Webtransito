
@extends('index')

@section('login')
    
<div id="login" class="shadow-lg col-lg-6 col-xl-6 col-md-6 col-8 col-sm-6 d-inline m-auto">
    <img src="assets/Imagens/LogoSistema.png" class="img-fluid" width="150px" height="90px" alt="Responsive image">
    <h4>Autenticação de Usuário</h4>
    <br>
    <form method="post" action="#"> 
        <div class="telaLogin"> 
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="Usuário" class="d-block w-100"/> 
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="Senha" class="d-block w-100"/>
            <input type="checkbox" name="lembrar-me" id="lembrar-me" value=""/> 
            <label for="lembrar-me">Lembrar-me</label>
            <br>
            <input type="submit" value="Autenticar"/>
            <a href="#">Esqueci a Senha</a>
        </div>
    </form>
</div>

@endsection