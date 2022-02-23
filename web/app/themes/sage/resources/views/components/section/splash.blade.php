<section class="component splash splash--{{ $section['class'] }}" id="section-{{ $sectionID }}">
    <img class="desktop-background splash__bg" src="{{ $section['background_image'] }}"/>
    <img class= "mobile-background splash__bg" src="{{ $section['mobile_image'] }}" alt="">
    <div class="container">
        @if($section['row'])
            <x-rows :rows="$section['row']" />
        @endif
    </div>
    <x-scroll-to-next :sectionID="$sectionID"/>
</section>
