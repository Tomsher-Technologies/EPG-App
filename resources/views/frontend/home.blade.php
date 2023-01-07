@extends('layout.member.app')

@section('content')
    <section class="video-bg-container">
        <div class="video-bg-player" data-video="TRZcAnuwtjI">
            <div class="video-bg">
                <div id="yt-player"></div>
            </div>
        </div>

        <div class="video-bg-overlay" style="background-image: url('{{ asset('images/bg1.jpg') }}')"></div>
    </section>

    <div class="raffles-content no-pd">
        <div id="raffles-about" class="container">
            <div class="raffles-section raffles-section--stretched raffles-colorizer--scheme-color-8">
                <div class="raffles-entities style-4 raffles-entities-reverse type-4 with-img-border">
                    <!--================ Entity ================-->
                    <article class="raffles-entity">
                        <div class="raffles-entity-media splitting" data-animation="slideInLeft">
                            <a href="#"><img src="{{ asset('images/880x840_img1.jpg') }}" alt="" /></a>
                        </div>
                        <div class="raffles-entity-content" data-animation="slideInRight">
                            <div class="raffles-entity-pre-title" data-animation="zoomReverseIn" data-animation-delay=".1s">
                                welcome
                            </div>
                            <h2 class="raffles-entity-title content-element" data-animation="zoomReverseIn"
                                data-animation-delay=".2s">
                                Raffles Membership <br />
                                Programme
                            </h2>
                            <p data-animation="zoomReverseIn" data-animation-delay=".4s">
                                A warm welcome to your Raffles Membership. We are delighted
                                you have chosen to join our family. An icon of old, to
                                contemporary legend in the making, the Raffles Mmembership
                                promises a unique lifestyle that’s absolutely on point, yet
                                never wavering from our impeccable service traditions.
                                <br />

                                Like the Private Clubs from the past, we want you to feel at
                                home, looked after and positively a little bit spoilt. Our
                                pristine beach is your playground, the pool your chill
                                space, the architecture and interior craftsmanship your
                                inspiration, the restaurants your family table, the gym your
                                personal trainer and the spa your pure escapism.
                                <br />
                                With privileged access throughout the resort and
                                preferential rates, we hope you enjoy the legendary Raffles
                                lifestyle to its fullest.
                            </p>
                        </div>
                    </article>
                    <!--================ End of Entity ================-->
                </div>
            </div>

            <div id="benefits-section" class="raffles-content no-pd" data-animation="zoomReverseIn"
                data-animation-delay=".1s">
                <div class="container-fluid">
                    <div class="raffles-section raffles-section--stretched raffles-colorizer--scheme-color-4">
                        <div class="row hr-size-3 vr-size-2 justify-content-end">
                            <div class="col-xxl-5 col-lg-6">
                                <div class="raffles-title-wrap">
                                    <div class="raffles-pre-title" data-animation="zoomReverseIn"
                                        data-animation-delay=".1s">
                                        BENEFITS
                                    </div>
                                    <h2 class="raffles-section-title text-black" data-animation="zoomReverseIn"
                                        data-animation-delay=".2s">
                                        Join and instantly enjoy special benefits on our
                                        amenities
                                    </h2>
                                </div>
                                <div class="content-element-6">
                                    <p class="raffles-text-medium text-black" data-animation="zoomReverseIn"
                                        data-animation-delay=".4s">
                                        With thea Raffles Diamond Membership our pristine beach
                                        becomes your playground, the pool your chill space, the
                                        architecture and interior craftsmanship your
                                        inspiration, the restaurants your family table, the gym
                                        your personal trainer and the spa your pure escape. With
                                        privileged access throughout the resort and preferential
                                        rates, join us and start living the legendary Raffles
                                        lifestyle.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="raffles-img-holder raffles-img-move">
                                    <div class="raffles-img-main">
                                        <img src="" alt="" />
                                    </div>
                                    <div class="raffles-img-secondary" data-animation="zoomReverseIn"
                                        data-animation-delay=".8s">
                                        <img src="{{ asset('images/card1.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="venues"
                class="raffles-section no-pb raffles-section--stretched-content-no-px raffles-colorizer--scheme-color-">
                <div class="raffles-title-wrap align-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="raffles-pre-title" data-animation="zoomReverseIn" data-animation-delay=".2s">
                                WITH 6+ PARTICIPATING VENUES
                            </div>
                            <h2 class="raffles-page-title" data-animation="zoomReverseIn" data-animation-delay=".3s">
                                VENUES
                            </h2>
                            <p class="raffles-text-medium" data-animation="zoomReverseIn" data-animation-delay=".4s">
                                Discover all the enticing offers at Raffles Dubai The Palm.
                                From family vacations and couples getaways to dining
                                specials and unique spa treatments, at this luxurious spa
                                resort on Palm Jumeirah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="raffles-section no-pd raffles-section--stretched-content-no-px raffles-colorizer--scheme-"
                    data-animation="zoomReverseIn" data-animation-delay=".3s">
                    <div
                        class="raffles-entities single-entity style-2 raffles-grid owl-carousel raffles-grid--cols-1 raffles-owl-moving nav-size-2 no-dots">
                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/Blüthner-Hall.jpg') }}">
                                <!--================ Entity ================-->
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">Blüthner Hall</h3>
                                    <p class="text-white">
                                        Enjoy a magnificent welcome as you step into our
                                        resplendent beach palace. Blüthner Hall is just the
                                        place to relax with friends and family, especially over
                                        sumptuous Afternoon Tea. Our hotel lobby derives its
                                        name from the bespoke Blüthner Louis XIV Grand Piano
                                        created especially for this space. Afternoon Tea has
                                        never been more melodious. The resident pianist plays
                                        beautiful classical pieces five days a week.
                                    </p>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>

                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/1920x832_bg3.jpg') }}">
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">Raffles Club Lounge</h3>
                                    <p class="text-white">
                                        Overlooking The Palm Jumeirah, this private venue offers
                                        a chic and glamorous dining experience to guests staying
                                        in Club Rooms, Suites and Villas. <br />

                                        Guests can indulge in specially created buffet-style
                                        dining available daily during breakfast, lunch and
                                        aperitivo hours. Also perfect for enjoying a wonderful
                                        afternoon tea served with the best views of the Dubai
                                        skyline. <br />

                                        *Raffles Club Lounge also offers private check-in and
                                        check-out services.
                                    </p>
                                </article>
                            </div>
                        </div>

                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/Piatti-By-The-Beach.jpg') }}">
                                <!--================ Entity ================-->
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">Piatti By The Beach</h3>
                                    <p class="text-white">
                                        Located in the unique and luxurious setting of Raffles
                                        The Palm Dubai, Piatti by the Beach is set to be the
                                        city’s most resplendent restaurant where guests are
                                        instantly engulfed by the unmistakable charm of the
                                        Southern Italian Coast.
                                    </p>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>

                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/SOLA-Jazz-Lounge.jpg') }}">
                                <!--================ Entity ================-->
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">SOLA Jazz Lounge</h3>
                                    <p class="text-white">
                                        Surrender to the sultry aura and rippling sounds of
                                        SOLA. Thrilling music by world-renowned jazz artists and
                                        bands and hotly tipped rising stars make this place a
                                        new legend among jazz lovers in Dubai. Live jazz plays 4
                                        nights a week with a live DJ orchestrating the sounds
                                        between sets. Our programme is designed by our dedicated
                                        Music Curator.
                                    </p>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>

                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/Matagi.jpg') }}">
                                <!--================ Entity ================-->
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">Matagi</h3>
                                    <p class="text-white">
                                        Delve into a fusion of Japanese flavours, aromas, and
                                        texture. At Matagi, we are obsessed with presenting the
                                        highest quality produce for your delectation. Together
                                        with our attentive personalised service, it’s all
                                        designed to help you enjoy the moment.
                                    </p>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>

                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/Raffles-Patisserie.jpg') }}">
                                <!--================ Entity ================-->
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">Raffles Patisserie</h3>
                                    <p class="text-white">
                                        Luscious, elaborate concoctions of confections are a joy
                                        to devour. Discover exquisite and outrageous creations
                                        in our high-level classic French and Italian patisserie.
                                    </p>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>

                        <div class="raffles-col">
                            <div class="raffles-section with-overlay raffles-colorizer--scheme-"
                                data-bg-image-src="{{ asset('images/Le-Jardin.jpg') }}">
                                <!--================ Entity ================-->
                                <article class="raffles-entity">
                                    <h3 class="raffles-entity-title">Le Jardin</h3>
                                    <p class="text-white">
                                        All-day dining in a shimmering space redolent of French
                                        palaces and an alfresco terrace overlooking gardens in
                                        full bloom. Enjoy the regal ambience with Italian
                                        furniture handmade by atelier Francesco Molon.
                                    </p>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-element-main" style="padding-top: 80px">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="raffles-title-wrap align-center">
                            <div class="raffles-pre-title">
                                How we are bringing the legendary Raffles lifestyle to life.
                            </div>
                            <h2 class="raffles-section-title">Benefits</h2>
                        </div>
                        <!--================ Icon Boxes ================-->
                        <div class="raffles-icon-boxes align-center small-size item-col-3" style="padding-top: 50px">
                            <div class="raffles-col">
                                <!--================ Icon Box ================-->
                                <article class="raffles-icon-box">
                                    <i class="raffles-icon-box-icon">
                                        <img class="svg" src="{{ asset('images/food_.png') }}" alt="" /></i>
                                    <div class="raffles-icon-box-content">
                                        <h6 class="raffles-icon-box-title">
                                            Enjoy 20% off BAR/Food and Beverage rates at any time
                                            of the year*
                                        </h6>
                                    </div>
                                </article>
                                <!--================ End of Icon Box ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Icon Box ================-->
                                <article class="raffles-icon-box">
                                    <i class="raffles-icon-box-icon">
                                        <img class="svg" src="{{ asset('images/big-tv.png') }}" alt="" /></i>
                                    <div class="raffles-icon-box-content">
                                        <h6 class="raffles-icon-box-title">
                                            Get unlimited access to the famed Raffles Club
                                        </h6>
                                    </div>
                                </article>
                                <!--================ End of Icon Box ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Icon Box ================-->
                                <article class="raffles-icon-box">
                                    <i class="raffles-icon-box-icon">
                                        <img class="svg" src="{{ asset('images/food_.png') }}" alt="" /></i>
                                    <div class="raffles-icon-box-content">
                                        <h6 class="raffles-icon-box-title">
                                            Make the most of preferential bookings on Private
                                            Cabanas
                                        </h6>
                                    </div>
                                </article>
                                <!--================ End of Icon Box ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Icon Box ================-->
                                <article class="raffles-icon-box">
                                    <i class="raffles-icon-box-icon">
                                        <img class="svg" src="{{ asset('images/cinima.png') }}" alt="" /></i>
                                    <div class="raffles-icon-box-content">
                                        <h6 class="raffles-icon-box-title">
                                            The silver screen awaits, with a Private Cinema
                                            booking once a year
                                        </h6>
                                    </div>
                                </article>
                                <!--================ End of Icon Box ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Icon Box ================-->
                                <article class="raffles-icon-box">
                                    <i class="raffles-icon-box-icon">
                                        <img class="svg" src="{{ asset('images/meting.png') }}" alt="" /></i>
                                    <div class="raffles-icon-box-content">
                                        <h6 class="raffles-icon-box-title">
                                            Gather in style with 25% off meeting rooms
                                        </h6>
                                    </div>
                                </article>
                                <!--================ End of Icon Box ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Icon Box ================-->
                                <article class="raffles-icon-box">
                                    <i class="raffles-icon-box-icon">
                                        <img class="svg" src="{{ asset('images/service.png') }}"
                                            alt="" /></i>
                                    <div class="raffles-icon-box-content">
                                        <h6 class="raffles-icon-box-title">
                                            Attentive service around the clock with 24/7 Concierge
                                            access
                                        </h6>
                                    </div>
                                </article>
                                <!--================ End of Icon Box ================-->
                            </div>
                        </div>
                        <!--================ End of Icon Boxes ================-->
                    </div>
                </div>
            </div>

            <div class="raffles-content no-pd plan-sec">
                <div class="container">
                    <div class="raffles-section raffles-section--stretched-content raffles-colorizer--scheme-"
                        style="padding-top: 2rem; padding-bottom: 0rem">
                        <div class="raffles-entities raffles-pricing item-col-3">
                            <div class="raffles-col">
                                <!--================ Entity ================-->
                                <article class="raffles-entity" style="height: 100%">
                                    <div class="raffles-entity-content" style="height: 100%">
                                        <h4 class="raffles-entity-title">Dining</h4>
                                        <p>
                                            Experience the very best cuisine and drinks menus
                                            across the resort with exclusive offers and
                                            privileges.
                                        </p>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="raffles-list-content">
                                                    <ul class="raffles-list--icon">
                                                        <li>
                                                            You’re on our guest list with exclusive
                                                            invitations to special events
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Be the first right of refusal for the best
                                                            tables across all venues
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Once a year sit down to a Complimentary Chef’s
                                                            table experience at Matagi<i
                                                                class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Share a complimentary Brunch with 4 people
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Share a complimentary Afternoon Tea with 4
                                                            people
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Benefit from 25% off on food and beverages
                                                            across Matagi, Sola, Bluthner Hall and
                                                            Patisserie
                                                            <i class="icon material-icons">check</i>
                                                        </li>

                                                        <li>
                                                            For those special occasions enjoy 25% off on
                                                            cigar purchases
                                                            <i class="icon material-icons">check</i>
                                                        </li>

                                                        <li>
                                                            For wine lovers, access premium vintages by
                                                            the glass (coravin) as well as wine programs
                                                            at a reduced rate
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Entity ================-->
                                <article class="raffles-entity" style="height: 100%">
                                    <div class="raffles-entity-content" style="height: 100%">
                                        <h4 class="raffles-entity-title">Kids</h4>
                                        <p>
                                            As a part of the Raffles family, every generation is
                                            included.
                                        </p>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="raffles-list-content">
                                                    <ul class="raffles-list--icon">
                                                        <li>
                                                            Little ones roam free with access to the kids
                                                            club (up to 2 children per family)
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Get moving with non-motorised water sports x 5
                                                            per month
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Never be bored with access to weekly
                                                            activities from 10am to 8pm
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                            <div class="raffles-col">
                                <!--================ Entity ================-->
                                <article class="raffles-entity" style="height: 100%">
                                    <div class="raffles-entity-content" style="height: 100%">
                                        <h4 class="raffles-entity-title">Wellness & Fitness</h4>
                                        <p>
                                            A place to belong is also a space to rejuvenate, relax
                                            and reach fitness goals. Members enjoy a holistic
                                            approach to achieving a greater sense of wellness.
                                        </p>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="raffles-list-content">
                                                    <ul class="raffles-list--icon">
                                                        <li>
                                                            12 x 60 minutes Royal Balinese Massage l 6 X
                                                            Treatments for Single Membership
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            6 x Wellnamis Binaural Acoustic & Vibrational
                                                            Therapy l 3 X Therapies for Single Membership
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            10% on all Cinq Mondes Retail Products
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            20% on Cinq Mondes Spa Menu
                                                            <i class="icon material-icons">check</i>
                                                        </li>

                                                        <li>
                                                            Indoor pool Access<i class="icon material-icons">check</i>
                                                        </li>

                                                        <li>
                                                            Gym Access
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Kids Club Access
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Unlimited Pool & Beach Access
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            2 X body composition analysis
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            10 X personal training sessions Couples
                                                            Membership l 5 X personal training sessions
                                                            for Single Membership
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                        <li>
                                                            Unlimited wellness group classes
                                                            <i class="icon material-icons">check</i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--================ End of Entity ================-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container plan-sec-2">
                <div class="raffles-entities type-2">
                    <article class="raffles-entity">
                        {{-- <div class="raffles-entity-media">
                            <div class="">
                                <div class="raffles-owl-item">
                                    <img src="{{ asset('images/1280x880_img1.jpg') }}" alt="" />
                                </div>
                                <div class="raffles-owl-item">
                                    <img src="{{ asset('images/1280x880_img2.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div> --}}
                        <div class="raffles-entity-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 class="raffles-entity-title text-black">
                                        Membership Fees
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <div class="raffles-pricing-value content-element-4">
                                        <span>Singles</span>
                                        <span class="raffles-pricing-value-num">AED 60,000/<span>year</span></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="raffles-pricing-value content-element-4">
                                        <span>Couples</span>
                                        <span class="raffles-pricing-value-num">AED 80,000/<span>year </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="raffles-section raffles-section-pb-mobile raffles-section--stretched raffles-colorizer--scheme-color-8 content-element-main raffles-panels.type-big"
                style="padding-top: 1em">
                <div class="content-element-main mb-5">
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="raffles-title-wrap align-center">
                                <div class="raffles-pre-title">EARN AND REDEEM</div>
                                <h2 class="raffles-section-title">Here’s how it works</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="raffles-entities style-2 type-4 with-img-border">
                    <!--================ Entity ================-->
                    <article class="raffles-entity" id="raffles-sync-elements">
                        <div class="raffles-entity-media" data-animation="slideInRight">
                            <div class="raffles-panels-img">
                                <section data-active="panel-1" class="clicked">
                                    <img src="{{ asset('images/880x1104_img1.jpg') }}" alt="" />
                                </section>
                                <section data-active="panel-2">
                                    <img src="{{ asset('images/880x1104_img2.jpg') }}" alt="" />
                                </section>
                                <section data-active="panel-3">
                                    <img src="{{ asset('images/880x1104_img3.jpg') }}" alt="" />
                                </section>
                                <section data-active="panel-4">
                                    <img src="{{ asset('images/880x1104_img4.jpg') }}" alt="" />
                                </section>
                            </div>
                        </div>
                        <div class="raffles-entity-content" data-animation="slideInLeft">
                            <div class="content-element-7">
                                <!--================ Accordion ================-->
                                <dl role="presentation" class="raffles-panels raffles-panels--accordion type-big">
                                    <dt class="raffles-panels-title raffles-panels-active" data-active="panel-1"
                                        data-animation="zoomReverseIn" data-animation-delay=".1s">
                                        <button id="panel-7-button" type="button" aria-expanded="false"
                                            aria-controls="panel-7" aria-disabled="false">
                                            Stay
                                        </button>
                                    </dt>
                                    <dd id="panel-7" class="raffles-panels-definition" data-animation="zoomReverseIn"
                                        data-animation-delay=".2s">
                                        <p>
                                            Discover all the enticing offers at Raffles Dubai The
                                            Palm. From family vacations and couples getaways to
                                            dining specials and unique spa treatments, we make it
                                            easier for you to enjoy more – and save more – at this
                                            luxurious spa resort on Palm Jumeirah.
                                        </p>
                                    </dd>
                                    <dt class="raffles-panels-title" data-active="panel-2" data-animation="zoomReverseIn"
                                        data-animation-delay=".3s">
                                        <button id="panel-8-button" type="button" aria-expanded="true"
                                            aria-controls="panel-8" aria-disabled="false">
                                            Dine
                                        </button>
                                    </dt>
                                    <dd id="panel-8" class="raffles-panels-definition">
                                        <p>
                                            Discover all the enticing offers at Raffles Dubai The
                                            Palm. From family vacations and couples getaways to
                                            dining specials and unique spa treatments, we make it
                                            easier for you to enjoy more – and save more – at this
                                            luxurious spa resort on Palm Jumeirah.
                                        </p>
                                    </dd>
                                    <dt class="raffles-panels-title" data-active="panel-3" data-animation="zoomReverseIn"
                                        data-animation-delay=".5s">
                                        <button id="panel-9-button" type="button" aria-expanded="false"
                                            aria-controls="panel-9" aria-disabled="false">
                                            Relax
                                        </button>
                                    </dt>
                                    <dd id="panel-9" class="raffles-panels-definition">
                                        <p>
                                            Discover all the enticing offers at Raffles Dubai The
                                            Palm. From family vacations and couples getaways to
                                            dining specials and unique spa treatments, we make it
                                            easier for you to enjoy more – and save more – at this
                                            luxurious spa resort on Palm Jumeirah.
                                        </p>
                                    </dd>
                                    <dt class="raffles-panels-title" data-active="panel-4" data-animation="zoomReverseIn"
                                        data-animation-delay=".7s">
                                        <button id="panel-10-button" type="button" aria-expanded="false"
                                            aria-controls="panel-10" aria-disabled="false">
                                            Play
                                        </button>
                                    </dt>
                                    <dd id="panel-10" class="raffles-panels-definition">
                                        <p>
                                            Discover all the enticing offers at Raffles Dubai The
                                            Palm. From family vacations and couples getaways to
                                            dining specials and unique spa treatments, we make it
                                            easier for you to enjoy more – and save more – at this
                                            luxurious spa resort on Palm Jumeirah.
                                        </p>
                                    </dd>
                                </dl>
                                <!--================ End of Accordion ================-->
                            </div>
                        </div>
                    </article>
                    <!--================ End of Entity ================-->
                </div>
            </div>

            <div id="gallery-radeem"
                class="raffles-section with-instagram no-pd raffles-section--stretched raffles-colorizer--scheme-color-9 raffles-colorizer--scheme"
                style="padding-top: 140px !important">
                <div class="row hr-size-3 vr-size-2 justify-content-end align-items-center">
                    <div class="col-lg-4">
                        <div class="raffles-instagram-title" data-animation="slideInRight">
                            <div class="raffles-title-wrap">
                                <div class="raffles-pre-title" data-animation="zoomReverseIn" data-animation-delay=".1s">
                                    REDEEM
                                </div>
                                <h2 class="raffles-section-title text-white" data-animation="zoomReverseIn"
                                    data-animation-delay=".1s">
                                    Pay with your Raffles Membership on Every visits
                                </h2>

                                <h4 class="raffles-section-title text-white" data-animation="zoomReverseIn"
                                    data-animation-delay=".1s">
                                    The Palm Dubai <br />

                                    A world of exclusive benefits &amp; experiences
                                </h4>
                            </div>
                            <!-- <p class="raffles-text-medium content-element-2">Follow us on social media channels</p> -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="raffles-instagram-section" data-animation="slideInLeft">
                            <div class="raffles-instagram-row">
                                <div class="raffles-col">
                                    <a href="#"><img src="{{ asset('images/424x424_img1.jpg') }}" alt=""
                                            data-animation="zoomReverseIn" data-animation-delay=".1s" /></a>
                                    <a href="#"><img src="{{ asset('images/424x424_img2.jpg') }}" alt=""
                                            data-animation="zoomReverseIn" data-animation-delay=".2s" /></a>
                                </div>
                                <div class="raffles-col">
                                    <a href="#"><img src="{{ asset('images/424x424_img3.jpg') }}" alt=""
                                            data-animation="zoomReverseIn" data-animation-delay=".3s" /></a>
                                    <a href="#"><img src="{{ asset('images/424x424_img4.jpg') }}" alt=""
                                            data-animation="zoomReverseIn" data-animation-delay=".4s" /></a>
                                </div>
                                <div class="raffles-col">
                                    <a href="#"><img src="{{ asset('images/424x424_img5.jpg') }}" alt=""
                                            data-animation="zoomReverseIn" data-animation-delay=".5s" /></a>
                                    <a href="#"><img src="{{ asset('images/424x424_img6.jpg') }}" alt=""
                                            data-animation="zoomReverseIn" data-animation-delay=".6s" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tag = document.createElement("script");
        const firstScriptTag = document.getElementsByTagName("script")[0];
        const videoID = document
            .querySelector(".video-bg-player")
            .getAttribute("data-video");
        const videoOverlay = document.querySelector(".video-bg-overlay");
        const playerOptions = {
            autohide: 1,
            autoplay: 1,
            controls: 0,
            disablekb: 1,
            enablejsapi: 1,
            iv_load_policy: 3,
            loop: 1,
            modestbranding: 1,
            mute: 1,
            playlist: videoID,
            rel: 0,
            showinfo: 0,
        };

        tag.src = "https://www.youtube.com/iframe_api";
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let ytPlayer;

        function onYouTubeIframeAPIReady() {
            ytPlayer = new YT.Player("yt-player", {
                events: {
                    onReady: onPlayerReady,
                    onStateChange: onPlayerStateChange,
                },
                height: "720",
                playerVars: playerOptions,
                width: "1280",
                videoId: videoID,
            });
        }

        function onPlayerReady(event) {
            event.target.playVideo();

            const videoDuration = event.target.getDuration();

            setInterval(function() {
                const videoCurrentTime = event.target.getCurrentTime();
                const timeDifference = videoDuration - videoCurrentTime;

                if (2 > timeDifference > 0) {
                    event.target.seekTo(0);
                }
            }, 1000);
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                videoOverlay.classList.add("video-bg-overlay--fadeOut");
            }
        }
    </script>
@endsection
