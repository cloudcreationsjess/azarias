<!-- Normal Drop Down Menu -->
<header id="header" class="autohide header js__header fixed-to-panel" role="banner" itemscope itemtype="https://schema.org/WPHeader">
    <div class="container">
        <div class="row align-items-center">
            <!-- Branding -->
            <div class="col-auto">
                <div class="header__site-branding">
                    <a id="header__site-branding__logo" class="" href="{{ esc_url(home_url('/')) }}" title="{{ esc_attr(get_bloginfo('name', 'display')) }}" rel="home">
                        <img class="logo" src="/app/uploads/2022/02/azarias_logo_desktop_top.svg" alt="Azarias Capital Investment Management Logo">
                    </a>
                </div>
            </div>
            <div class="col header__links">
                <!-- Menu -->
                <div class="header__links__site-menu text-center desktop" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_id' => 'main-menu', 'depth' => 2, 'echo' => false]) !!}
                    @endif
                </div>
                <div class="desktop header__links__social-menu">
                    <a class="header__social-menu__twitter" target="_blank" href="https://twitter.com/azariascapital">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><path d="M18.929,5.206a7.918,7.918,0,0,1-2.232.612,3.914,3.914,0,0,0,1.71-2.152,8.11,8.11,0,0,1-2.473.936A3.888,3.888,0,0,0,9.309,8.142,11,11,0,0,1,1.3,4.092,3.828,3.828,0,0,0,.767,6.05,3.885,3.885,0,0,0,2.5,9.284,3.864,3.864,0,0,1,.736,8.8v.047a3.893,3.893,0,0,0,3.118,3.816,3.909,3.909,0,0,1-1.748.068,3.906,3.906,0,0,0,3.639,2.7,7.806,7.806,0,0,1-4.822,1.66A7.712,7.712,0,0,1,0,17.04a11.058,11.058,0,0,0,5.974,1.748A10.984,10.984,0,0,0,17.033,7.733c0-.163,0-.33-.013-.5a7.784,7.784,0,0,0,1.945-2.013Z" transform="translate(7.379 5.588)" fill="#fff"/><g fill="none" stroke="#fff" stroke-width="1"><circle cx="17" cy="17" r="17" stroke="none"/><circle cx="17" cy="17" r="16.5" fill="none"/></g></svg>
                    </a>
                    <a class="header__social-menu__linkedin" target="_blank" href="https://www.linkedin.com/company/azarias-capital-management/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><path d="M4.245,18.774H7.09V8.247H4.245V18.774ZM5.667,3.6A1.707,1.707,0,1,0,7.374,5.307,1.7,1.7,0,0,0,5.667,3.6Zm6.259,6.259V8.247H9.081V18.774h2.845V13.368c0-3.035,3.888-3.225,3.888,0v5.406H18.66V12.325c0-5.121-5.406-4.932-6.734-2.466Z" transform="translate(5.469 5.885)" fill="#fff"/><g fill="none" stroke="#fff" stroke-width="1"><circle cx="17" cy="17" r="17" stroke="none"/><circle cx="17" cy="17" r="16.5" fill="none"/></g></svg>
                    </a>
                </div>

                <!-- Mobile nav button -->
                <div class="header__site-nav-button-container mobile">
                    <button type="button" id="nav-btn" class="btn btn--nav js--hamburger hamburger hamburger--spin">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
