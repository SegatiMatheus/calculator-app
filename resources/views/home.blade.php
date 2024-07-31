@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="f-size-30 bold">Dashboard</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card rounded-4">
                    <div class="d-flex justify-content-between align-items-center paddingt10 paddingb10 paddingl20 paddingr20 w-100">
                        <div>
                            <p class="f-size-16">Saldo atual</p>
                            <p class="f-size-20 bold">R$ 0,00</p>
                        </div>
                        <div class="rounded-circle bg-blue padding10 d-flex align-items-center justify-content-center">
                            <i data-lucide="castle" stroke="#FFF"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card rounded-4">
                    <div class="d-flex justify-content-between align-items-center paddingt10 paddingb10 paddingl20 paddingr20 w-100">
                        <div>
                            <p class="f-size-16">Receitas</p>
                            <p class="f-size-20 bold">R$ 0,00</p>
                        </div>
                        <div class="rounded-circle bg-green padding10 d-flex align-items-center justify-content-center">
                            <i data-lucide="arrow-up" stroke="#FFF"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card rounded-4">
                    <div class="d-flex justify-content-between align-items-center paddingt10 paddingb10 paddingl20 paddingr20 w-100">
                        <div>
                            <p class="f-size-16">Despesas</p>
                            <p class="f-size-20 bold">R$ 0,00</p>
                        </div>
                        <div class="rounded-circle bg-red padding10 d-flex align-items-center justify-content-center">
                            <i data-lucide="arrow-down" stroke="#FFF"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card rounded-4">
                    <div class="d-flex justify-content-between align-items-center paddingt10 paddingb10 paddingl20 paddingr20 w-100">
                        <div>
                            <p class="f-size-16">Cartão de Crédito</p>
                            <p class="f-size-20 bold">R$ 0,00</p>
                        </div>
                        <div class="rounded-circle bg-green-dark padding10 d-flex align-items-center justify-content-center">
                            <i data-lucide="credit-card" stroke="#FFF"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection