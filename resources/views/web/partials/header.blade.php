@include('web.components.cookies')
<header id="header" class="" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 91, 'stickySetTop': '-91px', 'stickyChangeLogo': true}">
    <div class="header-body border-0 box-shadow-none">
        <div class="border-bottom-light w-75 m-auto">
            <div class="header-container container container-xl-custom">
                <div class="header-row py-4">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo m-0">
                                <a href="{{route('web')}}">
                                    <img alt="{{config('company_name')}}" height="46" src="{{ config('app.path_img').'/kmetik_logo.svg'}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end align-items-center flex-row">
                        <div class="hstack gap-4 ps-4 py-2 font-weight-semi-bold">
                            <div class="d-none d-lg-inline-block">
                                <ul class="nav nav-pills me-1">
                                    <li class="nav-item pe-2 mx-1">
                                        <a href="{{config('app.facebook_url')}}" target="_blank" title="Facebook" class="text-color-dark text-color-hover-primary text-2"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item px-2 mx-1">
                                        <a href="{{config('app.instagram_url')}}" target="_blank" title="Instagram" class="text-color-dark text-color-hover-primary text-2"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="vr opacity-2 d-none d-lg-inline-block"></div>
                            <div>
                                <a href="{{config('app.company_phone')}}" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
                                    <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                                    {{config('app.company_phone')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>				
        <div class="header-nav-bar z-index-0 w-75 m-auto">
            <div class="container container-xl-custom">
                <div class="header-row py-2">
                    <div class="header-column">
                        <div class="header-row align-items-center justify-content-end">
                            <div class="header-nav header-nav-links justify-content-start pb-1">
                                <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link active" href="{{route('web')}}">
                                                    Domov
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{route('gallery')}}">
                                                    Realizácie
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{route('services')}}">
                                                    Služby
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{route('certificates')}}">
                                                    Certifikáty
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href=" {{route('about')}}">
                                                    O nás
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href=" {{route('contact')}}">
                                                    Kontakt
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- <div class="header-nav-features header-nav-features-no-border d-none d-lg-inline-block mt-3 ps-2 pt-1 order-1 order-lg-2">
                                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fas fa-search header-nav-top-icon text-3"></i></a>
                                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                                    <form role="search" action="page-search-results.html" method="get">
                                                        <div class="simple-search input-group">
                                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                            <button class="btn" type="submit" aria-label="Search">
                                                                <i class="fas fa-search header-nav-top-icon"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> -->
                                    </nav>
                                </div>
                            </div>
                            <a href="{{route('web')}}/#get-a-quote" class="btn btn-modern btn-primary font-weight-bold border-0 btn-arrow-effect-1">CHCEM CENOVÚ PONUKU <i class="fas fa-arrow-right ms-2"></i></a>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>