{{-- resources/views/partials/header.blade.php --}}
<header class="header header_fixed js-sticky-header header_color-white"
        data-header-animation=""
        data-header-sticky-theme="bg-dark-2">
    <div class="container-fluid header__controls">
        <div class="row justify-content-between align-items-center">
            <div class="col text-left header__col-left">
                <a class="logo" href="{{ route('home') }}">
                    <div class="logo__text">
                        <span class="logo__text-title">Kimzenis</span>
                    </div>
                </a>
            </div>
            <div class="col-auto text-center">
                <div class="header__burger" id="js-burger">
                    <div class="header__burger-line"></div>
                    <div class="header__burger-line"></div>
                </div>
            </div>
            <div class="col d-none d-md-block text-right header__col-right">
                <ul class="social">
                    <li class="social__item"><a class="fa fa-instagram" href="#" target="_blank"></a></li>
                    <li class="social__item"><a class="fa fa-behance" href="#" target="_blank"></a></li>
                </ul>
            </div>
        </div>

        <div class="header__overlay-menu-back material-icons" id="js-submenu-back">arrow_back</div>
        {{-- - back button --}}
    </div>

    <div class="header__wrapper-overlay-menu container-fluid bg-dark-2 color-white">
        <div class="header__wrapper-menu">
            <ul class="menu-overlay js-menu-overlay">
                <li>
                    <a href="{{ route('home') }}" data-letter="H" data-pjax-link="overlayMenu">
                        <div class="menu-overlay__item-wrapper js-text-to-fly split-text js-split-text"
                             data-split-text-type="lines, words, chars">
                            Home
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('projects.index') }}" data-letter="P" data-pjax-link="overlayMenu">
                        <div class="menu-overlay__item-wrapper js-text-to-fly split-text js-split-text"
                             data-split-text-type="lines, words, chars">
                            Projects
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}" data-letter="A" data-pjax-link="overlayMenu">
                        <div class="menu-overlay__item-wrapper js-text-to-fly split-text js-split-text"
                             data-split-text-type="lines, words, chars">
                            About
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contacts') }}" data-letter="C" data-pjax-link="overlayMenu">
                        <div class="menu-overlay__item-wrapper js-text-to-fly split-text js-split-text"
                             data-split-text-type="lines, words, chars">
                            Contact
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        {{-- overlay widgets (keep the same structure as template, just change texts) --}}
        <div class="header__wrapper-overlay-widgets">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-lg-4 text-center d-lg-none">
                        <ul class="social">
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-left">
                        <p class="split-text js-split-text"
                           data-split-text-type="lines"
                           data-split-text-set="lines">
                            Your office address here<br>
                            Lefkosa / North Cyprus
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <p class="split-text js-split-text"
                           data-split-text-type="lines"
                           data-split-text-set="lines">
                            <a href="mailto:kimzenis@gmail.com">kimzenis@gmail.com</a><br>
                            <a href="tel:+905338402349">+90 (533) 533 23 49</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- letters / curtain (for overlay animation) – keep as in template or remove later if you want --}}
        {{-- You can copy the SVG / ornament block from the template here if you want the same animation. --}}
    </div>
</header>
