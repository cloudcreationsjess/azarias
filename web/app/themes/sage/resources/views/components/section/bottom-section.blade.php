<section class="component bottom-section" id="section-{{ $sectionID }}">
    <div class="bottom-section__circle"></div>
    <div class="bottom-section__texture">
         <x-svg.texture/>
    </div>
    <div class="bottom-section__top">
        <div class="container">
            @if(get_field('footer_title', 'options'))
                <h2 class="footer-title">{{ get_field('footer_title', 'options') }}</h2>
            @endif

            <a class="btn btn--primary" href="/contact">Contact us</a>
        </div>
    </div>
    <div class="bottom-section__bottom">
        <div class="container">
            <div class="footer-info">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-12">
                        <div class="footer-info__details">
                            @if(get_field('address', 'options'))
                                <div class="address">
                                    <span>
                                        <x-svg.location/>
                                        <a target="_blank" href="{{ get_field('google_map_link', 'options') }}">{{ get_field('address', 'options') }}</a>
                                    </span>
                                </div>
                            @endif

                            @if(get_field('phone', 'options'))
                                <div class="phone-number">
                                    <span>
                                        <x-svg.phone/>
                                       <a href="tel:{{ str_replace('.', '', get_field('phone', 'options')) }}">{{ get_field('phone', 'options') }}</a>
                                    </span>
                                </div>
                            @endif

                            @if(get_field('email', 'options'))
                                <div class="email">
                                    <span>
                                        <x-svg.email/>
                                        <a href="mailto:{{ get_field('email', 'options') }}">{{ get_field('email', 'options') }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="footer-info__social-links">
                            @if(get_field('twitter_link', 'options'))
                                <div class="twitter-link">
                                    <a target="_blank" href="{{ get_field('twitter_link', 'options') }}">
                                        <x-svg.twitter/>
                                    </a>
                                </div>
                            @endif

                            @if(get_field('linkedin_link', 'options'))
                                <div class="linkedin-link">
                                    <a target="_blank" href="{{ get_field('linkedin_link', 'options') }}">
                                        <x-svg.linkedin/>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
