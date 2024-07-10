@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <img class="w-100 vh-100 img-filter" src="{{ asset('assets/img/background.jpg') }}" alt="Login">
                    <div class="position-absolute top-0 left-0 d-flex align-items-center justify-center w-100 h-100">
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
                                            <label for="Senha" class="form-label">Senha</label>
                                            <input type="password" class="form-control" name="Senha" required>
                                        </div>
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
        </div>
    </div>
</section>

@endsection