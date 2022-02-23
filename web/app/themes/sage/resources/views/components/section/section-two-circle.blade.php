<section class="component section-two-circle section-two-circle--{{ $section['color'] }}
    section-two-circle--{{ $section['reverse'] ? 'reverse' : '' }}
    section-two-circle--{{ $section['section_class'] }}"
    id="section-{{ $sectionID }}">
    <div class="section-two-circle__circle-1"></div>
    <div class="section-two-circle__circle-2"></div>
    <div class="container">
        @if($section['row'])
            <x-rows :rows="$section['row']" />
        @endif
    </div>
    <x-scroll-to-next :sectionID="$sectionID"/>

</section>
