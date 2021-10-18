@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding-top: 139px">
        <div class="row mypad">
            <div class="col-12 py-5 d-flex">
                <div class="col-4">
                    <img src="../img/services/0-1-min.jpg" alt="">
                </div>
                <div class="col-8 px-5">
                    <h1 class="abril-font center-title mb-4">6 WAYS TO WORK WITH US</h1>
                    <div class="pe-4 roboto-font services-label" style="overflow-y: scroll; height:557px;">
                        <div class="py-4">
                            <h3><i class="bi bi-arrow-right me-2"></i>Brand Strategy</h3>
                            <p class="m-0">Great brands are built on bloody good strategy. This is the part where we work with you in collaboration to dig deep, unearth and carve out those important inner workings of your brand. Giving you the structure your brand needs to push the boundaries in the right direction and for the right reasons.</p>
                        </div>
                        <div class="py-4">
                            <h3><i class="bi bi-arrow-right me-2"></i>Brand Identity</h3>
                            <p class="m-0">We never underestimate the power of aesthetics. This means different things for different brands, so we work with you to ensure the identity we create is custom to your brand and will resonate with your target audience. And as cliche as it sounds, you truly do only get one chance to make a first impression, so let's cheers to making that a memorable one! </p>
                        </div>
                        <div class="py-4">
                            <h3><i class="bi bi-arrow-right me-2"></i>Creative Direction</h3>
                            <p class="m-0">We help advise and create the content you need for your brand to exist in this world. Whether it is through photography, illustration or interpretive dance, we will help guide your creative direction to connect with your audience.</p>
                        </div>
                        <div class="py-4">
                            <h3><i class="bi bi-arrow-right me-2"></i>Website Design</h3>
                            <p class="m-0">With a primary focus on aesthetics closely followed by an obsession with user experience plus careful consideration to your brand values and strategy, we design beautiful, high quality websites that communicate your vision and your products and/or services to your audience.</p>
                        </div>
                        <div class="py-4">
                            <h3><i class="bi bi-arrow-right me-2"></i>Packaging Design</h3>
                            <p class="m-0">We have a penchant for beautiful & unique packaging design. With years of experience designing boutique wine & beer labels, unique product packaging and FMCG packaging - we know we can bring your vision to life.</p>
                        </div>
                        <div class="py-4">
                            <h3><i class="bi bi-arrow-right me-2"></i>Graphic Design</h3>
                            <p class="m-0">We can help roll out your visual identity across all brand collateral. Ebooks, flyers, brochures, signage - you need it? we can do it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 touch-today py-5" style="font-size: 1.2rem;">
                <p class="text-white">But we know that every business has different needs, wants and ideas so book a chat with us so we can hear your story, find out what you need and share some of our advice for how to best move forward.</p>
                <a href="{{route('contact')}}" class="text-white m-0">Book a chat<i class="bi bi-arrow-right ps-2"></i></a>
            </div>
        </div>
        <div class="row mypad py-5">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-12 col-md-5" style="font-size: 2rem;">
                    <p class="abril-font center-title m-0">
                        LUMO was able to listen and truly connect my vision of what I was looking for in a brand and website with a creative representation.
                    </p>
                </div>
                <div class="col-12 col-md-7 roboto-font px-4 align-self-end" style="font-size: 0.8rem;">
                    <p class="d-none d-md-block">I was just starting, ready to start a legit business. I needed a website built and branding done. Lumo was able to listen and truly connect my vision of what I was looking for in a brand and website with a creative representation.</p>
                    <p class="d-none d-md-block">They listen to what you are looking for and get it right, which is not an easy thing to find with a branding and website company. I liked them so much I've used Lumo for other projects and will continue to reach out to them as projects come my way. I've recommended so many times..... Go LUMO! Since working with Lumo I've been able to bring in an extra 5-7k a month since.</p>
                    <p>- Jenni, Social Wellness Co.</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection