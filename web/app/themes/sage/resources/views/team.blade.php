{{--
  Template Name: Team Members
--}}

@extends('layouts.app')

@section('content')
    @php($sections = get_field('section'))

    <?php $section_count = 0 ?>
    <?php $section_id = 0 ?>

    @if($sections)
        @foreach ($sections as $section)

            @if($section['acf_fc_layout'] == 'splash')
                <x-section.splash :section="$section" :sectionID="$section_id"/>
                <?php $section_id++; ?>
            @endif
            <?php $section_count++; ?>
        @endforeach
    @endif

    <?php
    global $posts;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $posts_per_page = 10;

    $params = [
        'post_type'      => 'team-members',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
    ];

    query_posts($params);
    ?>
    @if(have_posts())
        <?php $section_count++; ?>
        <section class="desktop component section-one-circle
                section-one-circle--top-left
        section-one-circle--orange
        " id="section-{{ $section_id }}">
            <div class="section-one-circle__circle-container">
                <div class="section-one-circle__circle"></div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <ul class="team_member align-content-center align-items-center">
                            @while(have_posts()) @php(the_post())
                            <li class="team_member_li">
                                <a href="#team_member_profile__{{ get_post(get_the_ID())->post_name }}">
                                    <div class="team__background-image">
                                        <img src="{{ the_post_thumbnail_url() }}" alt="">
                                    </div>
                                    <div class="team__hover">
                                        <x-svg.view-profile/>
                                    </div>
                                    <div class="team_member__content">
                                        <div class="team__name">
                                            {{ the_title() }}
                                        </div>
                                        <div class="team__position">
                                            {!! nl2br(get_field('position', get_the_ID())) !!}
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endwhile
                        </ul>
                    </div>
                </div>
            </div>
            <x-scroll-to-next :sectionID="$section_id"/>
        </section>
        <?php $section_id++; ?>
    @endif

    <?php $team_count = 0 ?>

    @if(have_posts())
        <?php $i = 1 ?>
        @while(have_posts()) @php(the_post())
        <div id="section-{{ $section_id }}"></div>
        <section id="team_member_profile__{{ get_post(get_the_ID())->post_name }}"
            @if($i == 1)
            class="component section-one-circle section-one-circle--bottom-right section-one-circle--light-blue"
            @elseif($i == 2)
            class="component section-one-circle section-one-circle--top-right section-one-circle--light-blue"
            @elseif($i == 3)
            class="component section-one-circle section-one-circle--bottom-left section-one-circle--light-blue"
            @else
            class="component section-one-circle section-one-circle--top-left section-one-circle--light-blue"
            @endif
        >
            <div class="section-one-circle__circle-container">
                <div class="section-one-circle__circle"></div>
            </div>

            <div class="container">
                <div class="team-profile">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="team-profile__left">
                                <div class="team-profile__left__picture">
                                    <div class="team-profile__left__picture__box"></div>
                                    <img src="{{ the_post_thumbnail_url() }}" alt="Azarias Capital Investment Management Team">
                                </div>
                                <div class="team-profile__left__name">
                                    {{ the_title() }}
                                    @if(get_field('linkedin_url', get_the_ID()))
                                        <a target="_blank" href="{{ get_field('linkedin_url', get_the_ID()) }}">
                                            <img src="/app/uploads/2021/12/linkedin_golden.svg" alt="Azarias Capital Social Media">
                                        </a>
                                    @endif
                                </div>
                                <div class="team-profile__left__position">
                                    {{ get_field('position', get_the_ID()) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="team-profile__right">
                                <button id="team-profile__right__btn--{{ get_post(get_the_ID())->post_name }}" type="button" class="mobile team-profile__right__btn" value="See more +">See more +</button>
                                <div class="team-profile__right__title">
                                    {{ get_field('introduction', get_the_ID()) }}
                                </div>
                                <div class="team-profile__right__details">
                                    {!! get_field('content', get_the_ID()) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-scroll-to-next :sectionID="$section_id"/>
        </section>
        <?php
        if ( $i == 4 ) {
            $i = 1;
        } else {
            $i++;
        }
        ?>
        <?php $team_count++; ?>
        <?php $section_id++; ?>
        @endwhile
    @endif

    @php(wp_reset_query())

    @php($sections = get_field('section'))
    @if($sections)
        @foreach ($sections as $section)

            @if($section['acf_fc_layout'] == 'section_two_circle')
                <x-section.section-two-circle :section="$section" :sectionID="$section_id"/>
                <?php $section_id++; ?>
            @endif

            @if($section['acf_fc_layout'] == 'bottom_section')
                <x-section.bottom-section :section="$section" :sectionID="$section_id"/>
                <?php $section_id++; ?>
            @endif
        @endforeach
    @endif

    @php($sections = get_field('section'))
<?php
$total_sections = $section_count + $team_count;
?>
    @if($total_sections > 0)
        <ul class="desktop page-navigation scroll-spy-services" id="scroll-spy">
        @for($x = 0; $x < $total_sections; $x++)
                <li>
                    <a href="#section-{{ $x }}"></a>
                </li>
            @endfor
        </ul>
    @endif

@endsection
