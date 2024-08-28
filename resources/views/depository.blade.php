@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')

<x-app-layout>
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <h2> Home</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $tickets as $ticket )
                    <tr>
                        <td>{{ $ticket->category }}</td>
                        <td>{{ $ticket->description }}</td>
                        <td>{{ $ticket->price }}</td>
                    </tr>

                @endforeach

            </tbody>
          </table>

          <div class="border-first-button scroll-to-section">

            <a href="{{ route('ticket.create') }}">Book a Tiket</a>
          </div>
                    </div>

            </div>

        </header>

</x-app-layout>
@endsection
