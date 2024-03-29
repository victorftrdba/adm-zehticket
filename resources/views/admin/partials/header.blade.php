<div class="container-fluid bg-dark shadow-sm rainbow-border">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">ZEHTICKET</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white @if (\Route::currentRouteName() == 'admin.home.index') fw-bold active @endif"
                                   href="{{ route('admin.home.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white @if (\Route::currentRouteName() == 'admin.event.index') fw-bold active @endif"
                                   href="{{ route('admin.event.index') }}">Eventos</a>
                            </li>
                            @if (auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link text-white @if (\Route::currentRouteName() == 'admin.promoters.index') fw-bold active @endif"
                                   href="{{ route('admin.promoters.index') }}">Produtores</a>
                            </li>
                            @endif
                        </ul>
                        <div class="text-white">
                            <a class="text-reset text-decoration-none me-3 @if (\Route::currentRouteName() == 'admin.profile.index') fw-bold active @endif" href="{{ route('admin.profile.index') }}">
                                Meu perfil
                            </a>
                            <a class="text-reset text-decoration-none" href="{{ route('logout') }}">
                                Sair
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
