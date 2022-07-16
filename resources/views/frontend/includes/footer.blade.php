
    <footer class="footer-wrap pt-60">
        <div class="container">
            <div class="row pb-40">
                <div class="footer-content">
                    <img src="{{asset('/frontend/')}}/assets/img/logo.png">
                    <div class="footer-nav-item">
                        <ul class="footer-nav-list">
                            <li class="footer-nav-list-item">
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="{{ url('/quiz') }}">
                                    Simulazione Esame 
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="{{ url('/topics') }}">
                                    Esame su Capitolo
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="{{ url('lessons') }}">
                                    Lezioni
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="{{ url('price/table') }}">
                                    Pricings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-address-item">
                        <ul class="footer-address-list">
                            <li class="footer-address-list-item">
                                <a href="tel:393511014852">
                                    <i class="flaticon-call"></i>
                                    (+39) 351 101 4852
                                </a>
                            </li>
                            <li class="footer-address-list-item">
                                
                                <a href="tel:3889965593">
                                    <i class="flaticon-call"></i>
                                    (+39) 388 996 5593
                                </a>
                            </li>
                            <li class="footer-address-list-item">
                                
                                <a href="tel:0645478893">
                                    <i class="flaticon-call"></i>
                                    (+39) 06 4547 8893
                                </a>
                            </li>
{{--                             <li class="footer-address-list-item">
                                <a href="mailto:info@biipatente.com">
                                    <i class="flaticon-envelope"></i>
                                    info@biipatente.com
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>