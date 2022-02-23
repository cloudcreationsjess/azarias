@if($flex)
    @foreach($flex as $component)

        @if($component['acf_fc_layout'] == 'page_label')
            <div class="swipe page-label">
                {{ $component['label'] }}
            </div>
        @endif

        @if($component['acf_fc_layout'] == 'title')
            <div class="title title--{{ $component['color'] }}">
                {!! $component['title'] !!}
            </div>
        @endif

        @if($component['acf_fc_layout'] == 'paragraph')
            <div class="paragraph">
                {!! $component['text'] !!}
            </div>
        @endif

        @if($component['acf_fc_layout'] == 'large_paragraph')
            <div class="large-paragraph large-paragraph--{{ $component['color'] }}">
                {!! $component['text'] !!}
            </div>
        @endif

        @if($component['acf_fc_layout'] == 'divide_line')
            <div class="divide-line"></div>
        @endif

        @if($component['acf_fc_layout'] == 'numbered_list')
            <ol class="numbered-list align-content-between">
                @if($component["list_item"])
                    @foreach($component["list_item"] as $f)
                        <li class="numbered-box">
                            <div class="box-background"></div>
                            <div class="numbered-list__content">
                                <div class="numbered-list__number">
                                    <img src="{{ $f['number'] }}" alt="Azarias Capital Benefits">
                                </div>
                                <div class="numbered-list__divide"></div>
                                <div class="numbered-list__text">
                                    {{ $f['text'] }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ol>
        @endif

        @if($component['acf_fc_layout'] == 'button')
            <a class="btn btn--{{ $component['button']['button_type'] }}" href="{{ $component['button']['button_link'] }}">
                {{ $component['button']['button_text'] }}
            </a>
        @endif

        @if($component['acf_fc_layout'] == 'icon_list')
            <ul class="icon-list align-content-center align-items-center">
                @if($component["list_item"])
                    @foreach($component["list_item"] as $f)
                        <li class="icon-list-li">
                            <div class="icon-list__icon">
                                <img src="{{ $f['icon'] }}" alt="Azarias Capital Values">
                            </div>
                            <div class="icon-list__text">
                                {{ $f['text'] }}
                            </div>
                        </li>
                        <div class="icon-list__divider"></div>
                    @endforeach
                @endif
            </ul>
        @endif

        @if($component['acf_fc_layout'] == 'svg')
            <div class="svg">
                <img src="{{ $component['svg'] }}" alt="Azarias Capital">
            </div>
            <div class="mobile-svg">
                <ul class="">
                    @if($component["mobile_svgs"])
                        @foreach($component["mobile_svgs"] as $svg)
                            <li>
                                <img src="{{ $svg['svg'] }}" alt="Azarias Capital Investment Management">
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        @endif

        @if($component['acf_fc_layout'] == 'partners')
            <ul class="partners">
                @if($component["partner"])
                    @foreach($component["partner"] as $f)
                        <li class="partners_li">
                            <a target="_blank" href="{{ $f['url'] }}">
                                <img src="{{ $f['logo'] }}')" alt="">
                                <div class="partner__operation">
                                    {{ $f['operation'] }}
                                </div>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        @endif

        @if($component['acf_fc_layout'] == 'footer_info')
            <div class="footer-info">
                <div class="row justify-content-between">
                    <div class="col-lg-9">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <div class="footer-info__address">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.6" height="18" viewBox="0 0 12.6 18">
                                        <path d="M13.8,11.55A2.25,2.25,0,1,1,16.05,9.3a2.25,2.25,0,0,1-2.25,2.25M13.8,3A6.3,6.3,0,0,0,7.5,9.3c0,4.725,6.3,11.7,6.3,11.7s6.3-6.975,6.3-11.7A6.3,6.3,0,0,0,13.8,3Z" transform="translate(-7.5 -3)" fill="#fff"/>
                                    </svg>
                                    <address>{{ $component['info']['address'] }}</address>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="footer-info__phone">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17.5" viewBox="0 0 17.5 17.5">
                                        <path d="M21.038,16.536a11.125,11.125,0,0,1-3.432-.544.95.95,0,0,0-.982.233L15.1,18.14A14.762,14.762,0,0,1,8.4,11.5l1.9-1.614a.992.992,0,0,0,.233-.992,10.843,10.843,0,0,1-.544-3.432A.971.971,0,0,0,9.021,4.5H5.657c-.525,0-1.157.233-1.157.963A16.676,16.676,0,0,0,21.038,22,1.02,1.02,0,0,0,22,20.853V17.5A.971.971,0,0,0,21.038,16.536Z" transform="translate(-4.5 -4.5)" fill="#fff"/>
                                    </svg>
                                    <tel>
                                        {{ $component['info']['phone'] }}
                                    </tel>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="footer-info__email">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.322" height="14.392" viewBox="0 0 21.322 14.392">
                                        <path d="M21.75,19.222v-9.6s-9.7,6.77-10.645,7.121C10.178,16.413.429,9.627.429,9.627v9.6c0,1.333.282,1.6,1.6,1.6H20.152c1.348,0,1.6-.234,1.6-1.6ZM21.735,7.746c0-.971-.283-1.317-1.584-1.317H2.027c-1.338,0-1.6.416-1.6,1.386l.016.149s9.632,6.631,10.661,6.994c1.088-.421,10.645-7.143,10.645-7.143l-.016-.069Z" transform="translate(-0.428 -6.429)" fill="#fff"/>
                                    </svg>
                                    <a href="mailto:{{ $component['info']['email'] }}">
                                        {{ $component['info']['email'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-info__social-links">
                            @foreach($component['info']['social_links'] as $link)
                                @if($link['acf_fc_layout'] == 'twitter')
                                    <a href="{{ $link['link'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                            <path d="M18.929,5.206a7.918,7.918,0,0,1-2.232.612,3.914,3.914,0,0,0,1.71-2.152,8.11,8.11,0,0,1-2.473.936A3.888,3.888,0,0,0,9.309,8.142,11,11,0,0,1,1.3,4.092,3.828,3.828,0,0,0,.767,6.05,3.885,3.885,0,0,0,2.5,9.284,3.864,3.864,0,0,1,.736,8.8v.047a3.893,3.893,0,0,0,3.118,3.816,3.909,3.909,0,0,1-1.748.068,3.906,3.906,0,0,0,3.639,2.7,7.806,7.806,0,0,1-4.822,1.66A7.712,7.712,0,0,1,0,17.04a11.058,11.058,0,0,0,5.974,1.748A10.984,10.984,0,0,0,17.033,7.733c0-.163,0-.33-.013-.5a7.784,7.784,0,0,0,1.945-2.013Z" transform="translate(7.379 5.588)" fill="#fff"/>
                                            <g fill="none" stroke="#fff" stroke-width="1">
                                                <circle cx="17" cy="17" r="17" stroke="none"/>
                                                <circle cx="17" cy="17" r="16.5" fill="none"/>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                                @if($link['acf_fc_layout'] == 'linkedin')
                                    <a href="{{ $link['link'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                            <path d="M4.245,18.774H7.09V8.247H4.245V18.774ZM5.667,3.6A1.707,1.707,0,1,0,7.374,5.307,1.7,1.7,0,0,0,5.667,3.6Zm6.259,6.259V8.247H9.081V18.774h2.845V13.368c0-3.035,3.888-3.225,3.888,0v5.406H18.66V12.325c0-5.121-5.406-4.932-6.734-2.466Z" transform="translate(5.469 5.885)" fill="#fff"/>
                                            <g fill="none" stroke="#fff" stroke-width="1">
                                                <circle cx="17" cy="17" r="17" stroke="none"/>
                                                <circle cx="17" cy="17" r="16.5" fill="none"/>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @endif

        @if($component["acf_fc_layout"] == 'animated_svg')
            <div class="container">
                <div class="desktop">
                    <x-svg.flowchart/>
                </div>
                <div class="mobile mobile-animation">
                    <div class="mobile-animation__spinner">
                        <div class="arrows">
                            <x-svg.arrows/>
                        </div>
                        <div class="js__spin js__click-to-spin">
                            <x-svg.spin-1/>
                            <x-svg.spin-2/>
                            <x-svg.spin-3/>
                            <x-svg.spin-4/>
                            <x-svg.spin-5/>
                            <x-svg.spin-6/>
                            <x-svg.spin-7/>
                            <x-svg.spin-8/>
                            <x-svg.spin-9/>
                        </div>
                    </div>
                    <button type="button" class="mobile-animation__button js__click-to-spin">Click to spin</button>
                </div>
            </div>
        @endif


    @endforeach
@endif
