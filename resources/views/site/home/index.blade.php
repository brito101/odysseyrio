@extends('site.master.master')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-5 py-5">
                    <div class="col-12 col-lg-6 text-center">
                        <img src="{{ asset('img/white_logo_transparent_background.webp') }}" alt="ODYSSEYRIO" class="mb-4"
                            width="350" height="350">
                        <h2 class="display-5 fw-bold lh-1 mb-3">ODYSSEYRIO</h2>
                        <p class="lead">Da concepção à entrega</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5" id="company">
        <div class="d-flex flex-wrap">
            <div class="col-12 col-lg-7">
                <div id="companyCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow-lg">
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                                <img src="{{ asset('img/slide/slide-' . $i . '.webp') }}" class="d-block w-100"
                                    alt="Imagem do depósito {{ $i }}" width="756" height="425">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-5 px-4 d-flex flex-wrap align-items-center mt-5 mt-lg-0">
                <div>
                    <header class=>
                        <h3>A EMPRESA</h3>
                    </header>
                    <p>Somos uma equipe vibrante, de especialistas em obras para Galpões Logísticos, Divisórias para Galpões
                        e
                        de
                        Recuperação e
                        Manutenção de Pisos.</p>
                    <p>Nossa abordagem de responsabilidade é simples: observamos, ouvimos e fazemos as coisas de uma maneira
                        melhor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise">
        <div class="container py-5">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="col-12">
                        <header>
                            <h3 class="text-center">EXPERTISE</h3>
                        </header>
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><img src="{{ asset('img/icons/check-solid.svg') }}" width="20" height="20" alt="check" class="me-2"> Projetos especiais para Galpões
                                    Logísticos</li>
                                <li class="list-group-item"><img src="{{ asset('img/icons/check-solid.svg') }}" width="20" height="20" alt="check" class="me-2"> Divisórias Internas para
                                    Galpões</li>
                                <li class="list-group-item"><img src="{{ asset('img/icons/check-solid.svg') }}" width="20" height="20" alt="check" class="me-2"> Recuperação e Manutenção de
                                    Pisos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/expertise.webp') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section id="management">
        <div class="container py-5">
            <div class="py-5">
                <header class="pb-4">
                    <h3>GESTÃO E GERENCIAMENTO DE OBRAS</h3>
                </header>

                <div class="row d-flex flex-wrap justify-content-center gap-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/management/management-1.webp') }}"
                            alt="Garantimos a performance em todo ciclo do negócio" class="m-auto" width="92"
                            height="77">
                        <div class="card-body">
                            <h4>Garantimos a performance em todo ciclo do negócio</h4>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/management/management-2.webp') }}" alt="Mobilização em até 48 horas"
                            class="m-auto" width="92" height="80">
                        <div class="card-body">
                            <h4>Mobilização em até 48 horas</h4>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/management/management-3.webp') }}" alt="Gestão de riscos" class="m-auto"
                            width="87" height="77">
                        <div class="card-body">
                            <h4>Gestão de riscos</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="differentials" class="py-5">
        <div class="container pb-5">
            <header class="py-5">
                <h3>DIFERENCIAIS<h3>
            </header>
            <ul class="card col-12 col-lg-8 py-2 px-4">
                <li class="my-2">Equipe multidisciplinar em várias áreas: arquitetura, engenharia, ambiental</li>
                <li class="my-2">Flexibilidade para diferentes tipologias</li>
                <li class="my-2">Cadeia de frio, CDs (sistemas de armazenagem, pisos para câmaras frias)</li>
                <li class="my-2">Credibilidade pautada em 12 anos de mercado.</li>
            </ul>
        </div>
    </section>

    <section id="clients" class="py-5">
        <div class="container pt-5">
            <div class="d-flex flex-wrap justify-content-center">
                <article class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <header>
                        <h4>+ de <span class="counter-up" data-count-to="25"></span> <span class="text">Clientes</span>
                        </h4>
                    </header>
                </article>
                <article class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <header>
                        <h4>+ de <span class="counter-up" data-count-to="20"></span> <span class="text">Projetos
                                especiais de engenharia</span></h4>
                    </header>
                </article>
                <article class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <header>
                        <h4>+ de <span class="counter-up" data-count-to="30000"></span> m<sup>2</sup> <span
                                class="text">Instalação de
                                Divisórias Internas</span></h4>
                    </header>
                </article>
                <article class="col-12 col-md-6 col-lg-3">
                    <header>
                        <h4>+ de <span class="counter-up" data-count-to="460000"></span> m<sup>2</sup> <span
                                class="text">Manutenção de Pisos</span>
                        </h4>
                    </header>
                </article>
            </div>
        </div>
    </section>

    <section id="brands" class="pb-5">
        <div class="container py-5">
            @php $brands = [1 => "Blue Macaw", 2 => "JLL", 3 => "Maersk", 4 => "Goodman"]@endphp
            <div class="d-flex flex-wrap justify-content-center">
                @for ($i = 1; $i <= 4; $i++)
                    <img src="{{ asset('img/brands/brand-' . $i . '.webp') }}" class="d-block w-100"
                        alt="{{ $brands[$i] }}" width="200" height="200">
                @endfor
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        const companyCarouselElement = document.querySelector('#companyCarousel')
        const carousel = new bootstrap.Carousel(companyCarouselElement, {
            interval: 3000,
            touch: false
        })
    </script>
    <script src="{{ asset('js/number-animation.js') }}"></script>
@endsection
