<section class="component section-side-image section-side-image--{{ $section['color'] }} section-side-image--{{ $section['reverse'] ? 'reverse' : '' }}" id="section-{{ $sectionID }}">
    <div class="section-side-image__circle"></div>
    <div class="section-side-image__texture">
        <x-svg.texture/>
    </div>
    <div class="desktop section-side-image__image">
        <img class="desktop" src="{{ $section['side_image'] }}" alt="Azarias Landscape Image">
    </div>
    <div class="container">
        <div class="mobile section-side-image__mobile-image">
            <img class="mobile" src="{{ $section['mobile_image'] }}" alt="Azarias Landscape Image">
        </div>
        @if($section['row'])
            <x-rows :rows="$section['row']"/>
        @endif
    </div>
    <x-scroll-to-next :sectionID="$sectionID"/>

</section>
