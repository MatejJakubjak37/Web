<footer id="footer" class="position-relative bg-quaternary mt-0 border-top-0">		
    <div class="container container-xl-custom pt-5 pb-3">
        <div class="row pt-5">
            <div class="col-md-6 col-lg-3">
                <h3 class="mb-3 text-4-5 text-color-light">Spoločnosť</h3>							
                <p class="text-3 text-color-grey mb-0">{{config('app.company_name')}}<br>{{config('app.company_street')}}<br>{{config('app.company_zip').' '.config('app.company_city')}}</p>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-md-0">
                <h3 class="mb-3 text-4-5 text-color-light">Kontakty</h3>							
                <a href="{{config('app.company_phone')}}" class="d-flex align-items-center text-decoration-none text-color-primary text-color-hover-light font-weight-medium ms-1">
                    <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                    {{config('app.company_phone')}}
                </a>
                <a href="tel:{{config('app.company_phone_secondary')}}" class="d-flex align-items-center text-decoration-none text-color-primary text-color-hover-light font-weight-medium ms-1">
                    <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                    {{config('app.company_phone_secondary')}}
                </a>
                <a href="mailto:{{config('app.company_email')}}" class="d-flex align-items-center text-decoration-none text-color-primary text-color-hover-light font-weight-medium ms-1">
                    <i class="icon icon-envelope text-color-primary text-4-5 me-2"></i>
                    {{config('app.company_email')}}
                </a>
                <a href="{{config('app.facebook_url')}}" target="_blank" class="d-flex align-items-center text-decoration-none text-color-primary text-color-hover-light font-weight-medium ms-1">
                    <i class="fab fa-facebook-f me-3 text-4-5"></i>
                Kmetik
                </a>
                <a href="{{config('app.instagram_url')}}" target="_blank" class="d-flex align-items-center text-decoration-none text-color-primary text-color-hover-light font-weight-medium ms-1">
                    <i class="fab fa-instagram me-3"></i>
                Kmetik
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                <h3 class="mb-3 text-4-5 text-color-light">Navigácia</h3>
                <ul class="list list-unstyled columns-lg-2 font-weight-medium">
                    <li><a href="{{route('web')}}" class="text-color-grey text-color-hover-primary">Domov</a></li>
                    <li><a href="{{route('gallery')}}" class="text-color-grey text-color-hover-primary">Realizácie</a></li>
                    <li><a href="{{route('services')}}" class="text-color-grey text-color-hover-primary">Služby</a></li>
                    <li><a href="{{route('certificates')}}" class="text-color-grey text-color-hover-primary">Certifikáty</a></li>
                    <li><a href="{{route('contact')}}" class="text-color-grey text-color-hover-primary">Kontakt</a></li>
                    <li><a href="{{route('about')}}" class="text-color-grey text-color-hover-primary">O nás</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 mt-4 mt-lg-0">
                <h3 class="mb-3 text-4-5 text-color-light">Sledujte nás</h3>
                <ul class="social-icons social-icons-clean social-icons-medium">
                    <li class="social-icons-facebook">
                        <a href="{{config('app.facebook_url')}}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f text-color-light"></i>
                        </a>
                    </li>
                    <li class="social-icons-instagram">
                        <a href="{{config('app.instagram_url')}}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram text-color-light"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-transparent mt-5">
        <div class="container container-xl-custom">
            <hr class="bg-color-light opacity-1">
            <div class="row">
                <div class="col pb-5 d-flex justify-content-center">
                    <!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->

                    <a href="#" id="open_preferences_center">Update cookies preferences</a>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4 pb-5">
                    <p class="text-center text-color-grey text-3 mb-0">© Copyright 2024. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</footer>
