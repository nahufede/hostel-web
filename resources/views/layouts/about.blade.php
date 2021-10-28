@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding-top: 112px">
        <div class="row">
            <div class="col-12 d-flex p-0 pb-5" style="max-height: 1000px;">
                <div class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-center roboto-font" style="padding: 3rem">
                    <h1 class="abril-font background-font mb-5">ABOUT US</h1>
                    <h4 class="mb-5">How It All Started</h4>
                    <p class="text-center px-4 mb-5">LUMO began when two like minds decided to bring together their skills, passion and love for gin to create a place where they could focus on doing what they love, for those they love.</p>
                    <p class="text-center px-4 mb-5">Their calling is branding for passion-led businesses and startups, maybe it is the shared passion, determination and coffee adoration that helped forged the foundations of why they do what they do, and how they do it so well.</p>
                    <img class="grid-img grid-img-about" src="../img/about/0-1-min.jpg" alt="">
                </div>
                <div class="d-none d-lg-block col-6">
                    <img class="grid-img" src="../img/about/0-2-min.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row mypad" style="margin: auto">
            <div class="about-first-wrapper roboto-font" style="max-width: 1050px;">
                <div class="about-first-top-left d-flex flex-column justify-content-center">
                    <h1 class="abril-font background-font mb-3">IMOGEN<i class="bi bi-arrow-right ps-2"></i></h1>
                    <h5 class="mb-3 shadow-text">Creative Director</h5>
                    <p class="pe-4 mb-3 shadow-text">Imogen is the detail. Imogen’s eye for the finer things was nursed through her studies in architecture. But soon she realised her true passion lay in using that fastidious eye to create millimetre-perfect graphic design and marketing. This way, she’s able to create brands and websites that not only look bloody good but help business owners take things to the next level, too.</p>
                </div>
                <div class="about-first-top-right">
                    <img class="grid-img" src="../img/about/1-1-min.jpg" alt="">
                </div>
                <div class="about-first-bottom-left">
                    <img class="grid-img" src="../img/about/1-2-min.jpg" alt="">
                </div>
                <div class="about-first-bottom-right d-flex flex-column justify-content-center">
                    <h1 class="abril-font background-font mb-3"><i class="bi bi-arrow-left pe-2"></i>LUCY</h1>
                    <h5 class="mb-3 shadow-text">Managing Director</h5>
                    <p class="pe-4 mb-3 shadow-text">Lucy is the big thinker. She has over ten years of experience in creative communications—from journalism and travel videography to freelance design and brand management for big honchos. With a broad background and an acute taste for a range of mediums, she’s able to tie all the elements of communication into living, breathing brands that have a big and beautiful impact on the world around them.</p>
                </div>
            </div>
        </div>
        <div class="row mypad py-5">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-12 col-md-6" style="font-size: calc(0.5rem + 1vw);">
                    <p class="abril-font background-font m-0" style="text-align: end;">
                        LUMO was amazing at understanding who I am, what my business represents and who my ideal clientele was as well as helping me develop a brand that presented that.
                    </p>
                </div>
                <div class="col-12 col-md-6 roboto-font px-4 align-self-end" style="font-size: 0.8rem;">
                    <p class="d-none d-lg-block">I was taking things to the next level and grow my online business. I needed a more user friendly website that helped show my personality and what services I offered and presented my business to potential customers in a clear way. LUMO was amazing at understanding who I am, what my business represents and who my ideal clientele was as well as helping me develop a brand that represented that. Also they were great to work with, responding quickly and effectively turning my ideas into a finished product.</p>
                    <p class="d-none d-md-block">I don't think I would have changed anything! You should hire them. DO IT! LUMO is the best and will take the time to create branding that allows you and your business to stand out. Since working with Lumo, my website traffic & sales for meal plans are now seeing growth, even with Covid-19 and all!</p>
                    <p>- Amy Ritchie, Nutrition by Amy</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection