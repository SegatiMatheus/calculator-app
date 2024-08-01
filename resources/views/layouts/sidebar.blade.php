
<section>
    <div class="sidebar padding20 d-flex flex-column align-items-center">
        <img src="{{ asset('assets/img/logo-small.svg') }}" alt="">

        <div class="margint30 d-flex flex-column align-items-center justify-content-center">
            <div class="btn-group dropend">
                <button type="button" class="btn btn-add dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10" /><path d="M8 12h8" /><path d="M12 8v8" /></svg>
                </button>
                <ul class="dropdown-menu dropdpwn-new-financial">
                    <li class="paddingt10 paddingb10">
                        <button type="button" class="btn w-100 border-0" data-bs-toggle="modal" data-bs-target="#modalDespesas">
                            <div class="d-flex gap-3">
                                <i data-lucide="trending-down" stroke="#F44336"></i>
                                Despesas
                            </div>
                        </button>
                    </li>
                    <li class="paddingt10 paddingb10">
                        <button type="button" class="btn w-100 border-0" data-bs-toggle="modal" data-bs-target="#modalDespesas">
                            <div class="d-flex gap-3">
                                <i data-lucide="trending-up" stroke="#4CAF50"></i>
                                Receita
                            </div>
                        </button>
                    </li>
                    <li class="paddingt10 paddingb10">
                        <button type="button" class="btn w-100 border-0" data-bs-toggle="modal" data-bs-target="#modalDespesas">
                            <div class="d-flex gap-3">
                                <i data-lucide="credit-card" stroke="#A1A1A9"></i>
                                Despesa cartão
                            </div>
                        </button>
                    </li>
                    <li class="paddingt10 paddingb10">
                        <button type="button" class="btn w-100 border-0" data-bs-toggle="modal" data-bs-target="#modalDespesas">
                            <div class="d-flex gap-3">
                                <i data-lucide="arrow-left-right" stroke="#2196F3"></i>
                                Transferência
                            </div>
                        </button>
                    </li>
                </ul>
            </div>

            <ul class="d-flex flex-column align-items-center gap-4 lista"
                style="list-style: none; padding: 0px; margin: 0px; margin-top: 30px">
                <li class="item-lista {{ $pagina == 'dashboard' ? 'active' : '' }}">
                    <a href="">
                        <i data-lucide="layout-dashboard" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="castle" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="list" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="credit-card" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="flag" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="clock" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="ellipsis" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
                <li class="item-lista">
                    <a href="">
                        <i data-lucide="settings" stroke="#a1a1a9"></i>
                        {{-- <p class="t-link f-size-14">Dashboard</p> --}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="modal fade" id="modalDespesas" tabindex="-1" aria-labelledby="modalDespesasLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalDespesasLabel">Nova Despesa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="valor"><i data-lucide="calculator" stroke="#A1A1A9"></i></span>
                    <input type="text" class="form-control maskMoney" placeholder="Valor da Despesa" aria-label="Valor da Despesa" aria-describedby="valor">
                </div>
                <div style="padding: 0.375rem 0.75rem;">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-2">
                            <i data-lucide="circle-check-big" stroke="#a1a1a9"></i>
                            <p class="f-size-14 paid gray">Não foi paga</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="paid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Salvar e criar nova</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('input[name="paid"]').on('change', function() {
            if ($(this).is(':checked')) {
                $(this).parent().parent().prev().find('i').attr('data-lucide', 'circle-check-big');
                $('.paid').text('Foi paga');
            } else {
                $(this).parent().parent().prev().find('i').attr('data-lucide', 'circle-check-big-outline');
                $('.paid').text('Não foi paga');
            }
        });
    });
</script>
