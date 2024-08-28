@extends('layouts.layout')
@section('title')
    Booking
@endsection
@section('content')

<x-app-layout>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <form method="'POST" action="{{ route('ticket.store') }}">
                        @csrf
                      <h2>Book yor ticket</H2>
                      <div class="mb-3">
                          <h6>Category</h6>
                          <select name="cat" class="form-select mt-10" aria-label="Default select example">
                            <option selected> Select Your Ticket Category </option>
                            <option value="processor">Processor</option>
                            <option value="ram">RAM</option>
                            <option value="harDisck">Hard Disck</option>
                            <option value="graphicsCard">Graphics Card</option>
                            <option value="cooler">Processor Coller</option>
                            <option value="monitor">Monitor</option>
                            <option value="case">Case</option>
                            <option value="mouse">Mouse</option>
                            <option value="keyboard">Keyboard</option>
                          </select>

                      </div>
                      <div class="mb-3">
                          <h6>Description </h6>
                          <input type="text" class="form-control" name="desc" id="desc" placeholder="Problem">
                      </div>
                      <div class="border-first-button scroll-to-section">

                        <button class="btn btn-outline-success" type="submit" >book</button>
                      </div>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
@endsection
