@extends('site.master.master')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-5 py-5">
                    <div class="col-12 col-lg-6 text-center">
                        <img src="{{ asset('img/white_logo_transparent_background.png') }}" alt="ODYSSEYRIO" class="mb-4">
                        <h2 class="display-5 fw-bold lh-1 mb-3">ODYSSEYRIO</h2>
                        <p class="lead">Da concepção à entrega</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5" id="company">
        <div class="d-flex flex-wrap">
            <div class="col-12 col-md-7">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow-lg">
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                                <img src="{{ asset('img/slide/slide-' . $i . '.webp') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-5 px-4 d-flex flex-wrap align-items-center">
                <div>
                    <header class=>
                        <h3>A EMPRESA<h3>
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

    <section>

    </section>

    <section>
        <div>
            <header>
                <h3>EXPERTISE<h3>
            </header>
            <ul>
                <li>Projetos especiais para Galpões Logísticos</li>
                <li>Divisórias Internas para Galpões</li>
                <li>Recuperação e Manutenção de Pisos</li>
            </ul>
        </div>
    </section>

    <section>
        <div>
            <header>
                <h3>GESTÃO E GERENCIAMENTO DE OBRAS<h3>
            </header>
            <article>
                <header>
                    <h4>Garantimos a performance em todo ciclo do negócio</h4>
                </header>
            </article>
            <article>
                <header>
                    <h4>Mobilização em até 48 horas</h4>
                </header>
            </article>
            <article>
                <header>
                    <h4>Gestão de riscos</h4>
                </header>
            </article>
        </div>
    </section>

    <section>
        <div>
            <header>
                <h3>DIFERENCIAIS<h3>
            </header>
            <ul>
                <li>Equipe multidisciplinar em várias áreas: arquitetura, engenharia, ambiental</li>
                <li>Flexibilidade para diferentes tipologias</li>
                <li>Cadeia de frio, CDs (sistemas de armazenagem, pisos para câmaras frias)</li>
                <li>Credibilidade pautada em 12 anos de mercado.</li>
            </ul>
        </div>
    </section>

    <section>
        <div>
            <article>
                <header>
                    <h4><span>+de 25</span> Clientes</h4>
                </header>
            </article>
            <article>
                <header>
                    <h4><span>+de 20</span> Projetos especiais de engenharia</h4>
                </header>
            </article>
            <article>
                <header>
                    <h4><span>+de 30.000 m<sup>2</sup></span> Instalação de Divisórias Internas</h4>
                </header>
            </article>
            <article>
                <header>
                    <h4><span>+ de 46.000 m<sup>2</sup></span> Manutenção de Pisos</h4>
                </header>
            </article>
        </div>
    </section>
@endsection

@section('custom_js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        const myCarouselElement = document.querySelector('#myCarousel')
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 3000,
            touch: false
        })
    </script>
@endsection
