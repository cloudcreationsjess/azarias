<section class="component blank blank--white contact-page" id="section-{{ $sectionID }}">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-6">
                <div class="contact-page__contact-form">
                    <h2>Contact</h2>
                    <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form"]'); ?>
                </div>
            </div>
            <div class="desktop col-lg-6">
                <div class="contact-page__right__logo">
                    <img src="/app/uploads/2022/02/azarias_logo_desktop_top.svg" alt="Azarias Capital Investment Management">
                </div>
                <div class="contact-page__right">

                    @if(get_field('address', 'options'))
                        <div class="contact-page__right__address">
                            <div class="contact-page__right__address--label">
                                <x-svg.location/>
                                <p>Address</p>
                            </div>
                            <a href="{{ get_field('google_map_link', 'options') }}">{{ get_field('address', 'options') }}</a>
                        </div>
                    @endif

                    @if(get_field('phone', 'options'))
                        <div class="contact-page__right__phone">
                            <div class="contact-page__right__phone--label">
                                <x-svg.phone/>
                                <p>Phone</p>
                            </div>
                            <a href="tel:{{ str_replace('.', '', get_field('phone', 'options')) }}">{{ get_field('phone', 'options') }}</a>
                        </div>
                    @endif

                    @if(get_field('email', 'options'))
                        <div class="contact-page__right__email">
                            <div class="contact-page__right__email--label">
                                <x-svg.email/>
                                <p>Email</p>
                            </div>
                            <p class="contact-page__right__email--label--name">{{ get_field('name', 'options') }}</p>
                            <p class="contact-page__right__email--label--job">{{ get_field('job_title', 'options') }}</p>
                            <a href="mailto:{{ get_field('email', 'options') }}">{{ get_field('email', 'options') }}</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="mobile container-fluid">
        <div class="row">
            <div class="contact-page__right__logo">
                <div class="contact-page__right__logo__image">
                    <img src="/app/uploads/2022/02/azarias_logo_desktop_top.svg" alt="Azarias Capital Investment Management">
                </div>
            </div>
            <div class="contact-page__right">

                @if(get_field('address', 'options'))
                    <div class="contact-page__right__address">
                        <div class="contact-page__right__address--label">
                            <x-svg.location/>
                            <p>Address</p>
                        </div>
                        <a href="{{ get_field('google_map_link', 'options') }}">{{ get_field('address', 'options') }}</a>
                    </div>
                @endif

                @if(get_field('phone', 'options'))
                    <div class="contact-page__right__phone">
                        <div class="contact-page__right__phone--label">
                            <x-svg.phone/>
                            <p>Phone</p>
                        </div>
                        <a href="tel:{{ get_field('phone', 'options') }}">{{ get_field('phone', 'options') }}</a>
                    </div>
                @endif

                @if(get_field('email', 'options'))
                    <div class="contact-page__right__email">
                        <div class="contact-page__right__email--label">
                            <x-svg.email/>
                            <p>Email</p>
                        </div>
                        <p class="contact-page__right__email--label--name">{{ get_field('name', 'options') }}</p>
                        <p class="contact-page__right__email--label--job">{{ get_field('job_title', 'options') }}</p>
                        <a href="mailto:{{ get_field('email', 'options') }}">{{ get_field('email', 'options') }}</a>
                    </div>
                @endif

                    <div class="mobile contact-page__right__social">
                        <div class="contact-page__right__social__links">
                            @if(get_field('twitter_link', 'options'))
                                <div class="twitter-link">
                                    <a href="{{ get_field('twitter_link', 'options') }}">
                                        <x-svg.twitter/>
                                    </a>
                                </div>
                            @endif

                            @if(get_field('linkedin_link', 'options'))
                                <div class="linkedin-link">
                                    <a href="{{ get_field('linkedin_link', 'options') }}">
                                        <x-svg.linkedin/>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            {!!  get_field('map_embed', 'options') !!}
        </div>
    </div>
</section>
