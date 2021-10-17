@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding-top: 123px" id="contact">
    <div class="row">
        <div class="col-12 d-flex mypad" style="padding-top: 110px; height: 100vh;">
            <div class="col-6 pe-5 d-flex flex-column" style="height: 50%;">
                <div>
                    <h1 class="abril-font">Let's Talk</h1>
                    <p class="roboto-font py-3">Do you have some big ideas and need help bringing them to fruition for your business? Then please reach out, we would love to hear more about you, your project and how we can help!</p>
                </div>
                <div>
                    <h5 class="abril-font">EMAIL</h5>
                    <p class="roboto-font pt-3">Hello@lumodesignstudio.com</p>
                </div>
            </div>
            <div class="col-6 px-5">
                <form action="" method="POST" class="d-flex flex-column justify-content-around" style="height: 50%;">
                    @csrf
                    <input type="text" placeholder="First Name" name="name">
                    <input class="pt-3" type="email" placeholder="Email" name="email">
                    <textarea name="message" cols="30" rows="2" class="pt-3" placeholder="Type your message here ..."></textarea>
                    <button type="submit" class="roboto-font">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row py-4 px-5" id="contact-footer">
        <div class="col-12 d-flex">
            <div class="col-6 navbar-brands"></div>
            <div class="col-6 d-flex flex-column align-items-end">
                <a href=""><p>instagram</p></a>
                <p>hostel@tamarangroup.com</p>
                <p>A Boutique Brisbane Branding Studio</p>
                <p class="m-0">@ 2021 tamarán hostel group | privacy policy</p>
            </div>
        </div>
    </div>
</div>

@endsection