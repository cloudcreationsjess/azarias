<section class="component section-one-circle
                section-one-circle--{{ $section['circle_position'] }}
    section-one-circle--{{ $section['color'] }}
    section-one-circle--{{ $section['section_class'] }}
    " id="section-{{ $sectionID }}">
    <div class="section-one-circle__circle-container">
        <div class="section-one-circle__circle"></div>
    </div>

    <div class="desktop section-one-circle__image" style="{{ $section['background_side_image'] ? '' : 'display: none;'}}">
        <img src="{{ $section['background_side_image'] }}" alt="Azarias Capital">
    </div>
    <div class="mobile section-one-circle__image" style="{{ $section['mobile_image'] ? '' : 'display: none;'}}">
        <img src="{{ $section['mobile_image'] }}" alt="Azarias Capital">
    </div>

    <div class="container">
        @if($section['row'])
            <x-rows :rows="$section['row']"/>
        @endif
    </div>
    <x-scroll-to-next :sectionID="$sectionID"/>

</section>
