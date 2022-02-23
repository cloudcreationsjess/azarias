<section class="component blank blank--{{ $section['color'] }}" id="section-{{ $sectionID }}">
    <div class="container">
        @if($section['row'])
            <x-rows :rows="$section['row']"/>
        @endif
    </div>
    <x-scroll-to-next :sectionID="$sectionID"/>
</section>
