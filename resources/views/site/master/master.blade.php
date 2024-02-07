<!--
@born February 02, 2024
@author Rodrigo Brito <contato@rodrigobrito.dev.br>
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary_large_image" />
    {{--  <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="" /> --}}
    <meta name="twitter:domain" content="{{ env('APP_URL') }}" />
    {{-- <meta property="article:publisher" content="" />
    <meta property="article:author" content="" />
    <meta property="fb:app_id" content="" /> --}}
    <meta itemprop="name" content="{{ env('APP_NAME') }}" />
    <meta itemprop="description" content="{{ env('APP_DESCRIPTION') }}" />
    <meta itemprop="url" content="{{ env('APP_URL') }}" />
    <meta itemprop="image" content="{{ asset('img/share.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/site/app.css') }}" />
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('img/bg-hero.webp') }}" type="image/webp">
    @metas
</head>

<body>
    <div class="shadow-lg sticky-top bg-light" id="header">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
                <h1><a href="{{ route('site.home') }}"
                    class="d-flex align-items-center mb-0 mb-md-2 mb-lg-0 m-md-auto m-lg-0 me-lg-auto text-decoration-none">
                    <img src="{{ asset('img/black_icon_transparent_background.webp') }}" class="bi me-3" width="55"
                        height="60" alt="logo">
                    <span class="fs-2 fw-bold">ODYSSEYRIO</span></h1>
                </a>
                <ul class="nav nav-pills d-none d-md-flex align-items-center">
                    <li class="nav-item"><a href="#company" class="nav-link">A EMPRESA</a></li>
                    <li class="nav-item"><a href="#expertise" class="nav-link">EXPERTISE</a></li>
                    <li class="nav-item"><a href="#management" class="nav-link">GESTÃO</a></li>
                    <li class="nav-item"><a href="#differentials" class="nav-link">DIFERENCIAIS</a></li>
                    <li class="nav-item"><a href="#footer" class="nav-link">CONTATO</a></li>
                </ul>
            </header>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer id="footer" class="pt-5 pb-4 text-light">
        <section>
            <div class="container">
                <header>
                    <h2 class="text-center text-lg-start mt-4">CONTATO</h2>
                </header>
                <div class="d-flex flex-wrap py-5">
                    <div class="col-12 col-md-4 text-center text-lg-start">
                        <img src="{{ asset('img/logo.gif') }}" alt="ODYSSEYRIO" width="350" height="299"
                            class="mb-4 mb-lg-0">
                    </div>
                    <div class="col-12 col-md-8 d-flex align-items-center">
                        <ul class="w-100 text-center text-md-start">
                            <li class="my-2"><img src="{{ asset('img/icons/envelope-regular.svg') }}" width="20" height="20" alt="e-mail" class="me-2"> <a title="Contato por e-mail"
                                    href="mailto:odysseyservicos@proton.me"
                                    rel="noreferrer">odysseyservicos@proton.me</a></li>
                            <li class="my-2"><img src="{{ asset('img/icons/whatsapp.svg') }}" width="20" height="20" alt="whatsapp" class="me-2"> <a title="Contato por WhatApp"
                                    href="https://wa.me/5521970882353" target="_blank" rel="noreferrer">+55 21 97088
                                    2353</a></li>
                            <li class="my-2"><img src="{{ asset('img/icons/globe-solid.svg') }}" width="20" height="20" alt="site" class="me-2"> <a
                                    href="{{ route('site.home') }}">odysseyrio.com.br</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="copyright">
                <div class="container text-center pt-2">
                    <p>ODYSSEYRIO ® {{ date('Y') }} Todos os direitos reservados.</p>
                </div>
            </div>
        </section>
    </footer>

    <button aria-label="Voltar ao topo da página" title="Voltar ao topo da página" class="smoothScroll-top"><img src="{{ asset('img/icons/chevron-up-solid.svg') }}" width="20" height="20" alt="top" class="mb-2"></button>

    <script src="{{ asset('js/button-top.js') }}"></script>
    @yield('custom_js')
</body>

</html>
