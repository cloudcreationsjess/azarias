@extends('layouts.app')

@section('content')
    @php($sections = get_field('section'))

    <?php $section_id = 0 ?>
    @if($sections)
        @foreach ($sections as $section)

            @if($section['acf_fc_layout'] == 'splash')
                <x-section.splash :section="$section" :sectionID="$section_id"/>
            @endif

            @if($section['acf_fc_layout'] == 'section_side_image')
                <x-section.section-side-image :section="$section" :sectionID="$section_id"/>
            @endif

            @if($section['acf_fc_layout'] == 'section_two_circle')
                <x-section.section-two-circle :section="$section" :sectionID="$section_id"/>
            @endif

            @if($section['acf_fc_layout'] == 'section_one_circle')
                <x-section.section-one-circle :section="$section" :sectionID="$section_id"/>
            @endif

            @if($section['acf_fc_layout'] == 'blank')
                <x-section.blank :section="$section" :sectionID="$section_id"/>
            @endif

            @if($section['acf_fc_layout'] == 'bottom_section')
                <x-section.bottom-section :section="$section" :sectionID="$section_id"/>
            @endif

            @if($section['acf_fc_layout'] == 'contact_section')
                <x-section.contact :section="$section" :sectionID="$section_id"/>
            @endif

            <?php $section_id++; ?>

        @endforeach
    @endif

    <?php $section_nav_id = 0 ?>
    @if($sections)
        <ul class="desktop page-navigation scroll-spy-services" id="scroll-spy">
            @foreach ($sections as $section)
                <li>
                    <a href="#section-{{ $section_nav_id }}"></a>
                </li>
                <?php $section_nav_id++; ?>
            @endforeach
        </ul>
    @endif
@endsection
