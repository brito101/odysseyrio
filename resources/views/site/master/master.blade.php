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
    {{-- <meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta name="twitter:creator" content="" /> --}}
    <meta name="twitter:domain" content="{{ env('APP_URL') }}" />
    {{-- <meta property="article:publisher" content="" />
<meta property="article:author" content="" />
<meta property="fb:app_id" content="" /> --}}
    <meta itemprop="name" content="{{ env('APP_NAME') }}" />
    <meta itemprop="description" content="{{ env('APP_DESCRIPTION') }}" />
    <meta itemprop="url" content="{{ env('APP_URL') }}" />
    {{-- <meta itemprop="image" content="{{ asset('img/share.png') }}" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <link rel="icon" type="image/png" href="{{ asset('img/logo.svg') }}" />
<link rel="stylesheet" href="{{ asset('site/fonts/styles.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/site/app.css') }}" />
    @metas
</head>

<body>
    <header>
        <h1>ODYSSEYRIO</h1>
        <ul>
            <li>SOBRE</li>
            <li>EXPERTISE</li>
            <li>GESTÃO</li>
            <li>DIFERENCIAIS</li>
            <li>CONTATO</li>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <section>
            <header>
                <h2>CONTATO</h2>
                <ul>
                    <li>odysseyrio2@gmail.com</li>
                    <li>odysseyrio2@odysseyrio.com.br</li>
                    <li>Whatsapp +55 21 97088 2353</li>
                </ul>
            </header>
        </section>
        <section>
            <p>ODYSSEYRIO®2024 Todos os direitos reservados.</p>
        </section>
    </footer>

    <script></script>
    @yield('custom_js')
</body>

</html>
