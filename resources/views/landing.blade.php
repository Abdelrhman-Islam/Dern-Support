@extends('layouts.layout')
@section('title')
    Landing
@endsection
@section('content')

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 id="2">Dern-Support: Your Reliable IT Solution</h6>
                        <h2>Dern Support</h2>
                        <p>
                            At Dern-Support, we specialize in delivering top-notch technical support services for both businesses and individual customers. With a dedicated team of experienced professionals, we strive to provide prompt and efficient solutions for all your IT needs.
                        </p>
                    </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="{{ route('qa') }}">Q&A</a>
                      <a href="{{ route('register') }}">Register</a>
                      <a href="{{ route('login') }}">Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
