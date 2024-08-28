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
                            <h2>All Ticket</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Clint Number</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Priority</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $ticket )

                                <form action="{{ url('/priority/create/'.$ticket->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <tr>
                                    <td>{{ $ticket->category }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>{{ $ticket->price }}</td>
                                    <td>{{ $ticket->userNum }}</td>
                                    <td>{{ $ticket->created_at }}</td>
                                    <td>{{ $ticket->priority }}</td>
                                    <td>
                                        <input type="radio" id="Urgent" name="priority" value="Urgent">
                                        <label for="Urgent">Urgent</label>
                                        <input type="radio" id="css" name="priority" value="Important">
                                        <label for="Important">Important</label>
                                        <input type="radio" id="NotUrgent" name="priority" value="NotUrgent">
                                        <label for="NotUrgent">Not Urgent</label>
                                    </td>

                                    <td><button class="btn btn-outline-success" type="submit">Submit</button></td>

                                </tr>
                                </form>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="border-first-button scroll-to-section">

                        <a href="{{ route('inventory.index') }}">Inventory</a>
                      </div>

                    </div>
            </div>
        </header>
</x-app-layout>
@endsection
