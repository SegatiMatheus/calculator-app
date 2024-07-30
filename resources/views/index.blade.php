@extends('layouts.app')

@section('content')

<section class="padding30 vh-100">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img width="200px" src="{{ asset('assets/img/logo.svg') }}" alt="">
            </div>
        </div>
        <div class="row margint100">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="d-flex flex-column align-items-center justify-content-center gap-4">
                    <p class="f-size-32 text-center bold">Hora de transformar suas<br>finanças.</p>
                    <img width="400px" src="{{ asset('assets/img/img-login.svg') }}" alt="">
                    <p class="f-size-18 text-center">O caminho está a sua frente. Você já deu seu primeiro passo rumo à transformação financeira e nós te guiaremos nessa jornada.</p>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <div class="card-login">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link active w-100" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link w-100" id="pills-cadastro-tab" data-bs-toggle="pill" data-bs-target="#pills-cadastro" type="button" role="tab" aria-controls="pills-cadastro" aria-selected="false">Cadastro</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab" tabindex="0">
                            <form class="formAjax" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="user" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="user" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="d-flex justify-center">
                                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-cadastro" role="tabpanel" aria-labelledby="pills-cadastro-tab" tabindex="0">
                            <form class="formAjax" action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="senha" required>
                                </div>

                                <p class="f-size-10 text-center">Ao continuar, estou de acordo com os <a href="">Termos de Uso</a> e <a href="">Aviso de Privacidade</a> do Financial.</p>
                                <p class="f-size-10 text-center">This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy">Google Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                                
                                <div class="d-flex justify-center">
                                    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection