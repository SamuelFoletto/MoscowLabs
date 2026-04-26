<nav class="header__content" id="siteHeader">
    <div class="header__frete">
        <p><b>FRETE GRÁTIS</b> para todo Brasil em compras acima de R$300,00</p>
    </div>

    <div class="header__navbar">
        <div class="header__logocontent">
            <img
                src="{{ asset('assets/moscow.png') }}"
                alt="logo"
                class="header__logo"
                id="siteLogo"
                data-logo-white="{{ asset('assets/moscow.png') }}"
                data-logo-dark="{{ asset('assets/moscow_black.png') }}"
            >
        </div>

        <div>
            <ul class="header__navlist">
                <li class="header__navitem header__link">
                    <a href="#">Lançamentos</a>
                </li>

                <li class="header__navitem header__link">
                    <a href="#">Masculino</a>
                    <div class="header__dropdown">
                        <a href="#">Camisetas</a>
                        <a href="#">Calças</a>
                        <a href="#">Tênis</a>
                    </div>
                </li>

                <li class="header__navitem header__link">
                    <a href="#">Feminino</a>
                    <div class="header__dropdown">
                        <a href="#">Vestidos</a>
                        <a href="#">Blusas</a>
                        <a href="#">Calçados</a>
                    </div>
                </li>

                <li class="header__navitem header__link">
                    <a href="#">Ofertas</a>
                    <div class="header__dropdown">
                        <a href="#">Até 30% off</a>
                        <a href="#">Liquidação</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="header__icons">
            <x-bi-search class="header__icon"/>
            <x-heroicon-s-user class="header__icon"/>
            <x-bi-cart-fill class="header__icon"/>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.getElementById('siteHeader');
        const logo = document.getElementById('siteLogo');

        const logoWhite = logo.dataset.logoWhite;
        const logoDark = logo.dataset.logoDark;

        function handleScroll() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                logo.src = logoDark;
            } else {
                header.classList.remove('scrolled');
                logo.src = logoWhite;
            }
        }

        handleScroll();
        window.addEventListener('scroll', handleScroll);
    });
</script>
