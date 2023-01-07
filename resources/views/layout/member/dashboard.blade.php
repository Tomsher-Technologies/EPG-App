<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Raffles</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&display=swap" />
    <link rel="stylesheet" href="{{ getUserAsset('css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" />

    <link rel="stylesheet" href="{{ getUserAsset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ getUserAsset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ getUserAsset('vendors/fancybox/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ getUserAsset('vendors/owl-carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ getUserAsset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ getUserAsset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ getUserAsset('css/custom.css') }}" />
    @stack('header')
</head>

<body>
    <div id="raffles-page-wrapper" class="raffles-page-wrapper">
        <x-frontend.sidebar />
        <x-member-dashboard.header :pagename='$pagen' />
        @yield('content')
        <x-frontend.footer />
    </div>
    {{-- Logout Form Start --}}
    <form action="{{ route('member.logout') }}" method="post" id="logoutForm">
        @csrf
    </form>
    {{-- Logout Form End --}}
    <script src="{{ getUserAsset('vendors/modernizr.js') }}"></script>
    <script src="{{ getUserAsset('vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ getUserAsset('vendors/jquery.easing.1.3.min.js') }}"></script>
    <script src="{{ getUserAsset('vendors/jquery.parallax-1.1.3.min.js') }}"></script>
    <script src="{{ getUserAsset('vendors/monkeysan.accordion.js') }}"></script>
    <script src="{{ getUserAsset('vendors/monkeysan.jquery.nav.1.0.js') }}"></script>
    <script src="{{ getUserAsset('vendors/handlebars-v4.0.5.min.js') }}"></script>
    <script src="{{ getUserAsset('vendors/sticky-sidebar.js') }}"></script>
    <script src="{{ getUserAsset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ getUserAsset('js/modules/raffles.sticky-header-section.min.js') }}"></script>
    <script src="{{ getUserAsset('js/raffles.app.js') }}"></script>

    <script>
        const AnimateOnScroll = function({
            offset
        } = {
            offset: 10
        }) {
            // Define a dobra superior, inferior e laterais da tela
            const windowTop = (offset * window.innerHeight) / 100;
            const windowBottom = window.innerHeight - windowTop;
            const windowLeft = 0;
            const windowRight = window.innerWidth;

            this.start = (element) => {
                window.requestAnimationFrame(() => {
                    // Seta os atributos customizados
                    element.style.animationDelay = element.dataset.animationDelay;
                    element.style.animationDuration = element.dataset.animationDuration;

                    // Inicia a animacao setando a classe para animar
                    element.classList.add(element.dataset.animation);

                    // Seta o elemento como animado
                    element.dataset.animated = "true";
                });
            };

            this.inViewport = (element) => {
                // Obtem o boundingbox do elemento
                const elementRect = element.getBoundingClientRect();
                const elementTop =
                    elementRect.top + parseInt(element.dataset.animationOffset) ||
                    elementRect.top;
                const elementBottom =
                    elementRect.bottom - parseInt(element.dataset.animationOffset) ||
                    elementRect.bottom;
                const elementLeft = elementRect.left;
                const elementRight = elementRect.right;

                // Verifica se o elemento esta na tela
                return (
                    elementTop <= windowBottom &&
                    elementBottom >= windowTop &&
                    elementLeft <= windowRight &&
                    elementRight >= windowLeft
                );
            };

            // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
            this.verifyElementsInViewport = (els = elements) => {
                for (let i = 0, len = els.length; i < len; i++) {
                    // Passa para o proximo laço se o elemento ja estiver animado
                    if (els[i].dataset.animated) continue;

                    this.inViewport(els[i]) && this.start(els[i]);
                }
            };

            // Obtem todos os elementos a serem animados
            this.getElements = () =>
                document.querySelectorAll("[data-animation]:not([data-animated])");

            // Atualiza a lista de elementos a serem animados
            this.update = () => {
                elements = this.getElements();
                elements && this.verifyElementsInViewport(elements);
            };

            // Inicia os eventos
            window.addEventListener("load", this.update, false);
            window.addEventListener(
                "scroll",
                () => this.verifyElementsInViewport(elements), {
                    passive: true
                }
            );
            window.addEventListener(
                "resize",
                () => this.verifyElementsInViewport(elements), {
                    passive: true
                }
            );
        };

        // Initialize
        const options = {
            offset: 15, // percentage of the window
        };

        const animation = new AnimateOnScroll(options);
    </script>

    @stack('footer')
</body>

</html>
