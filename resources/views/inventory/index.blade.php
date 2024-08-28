@extends('layouts.layout')
@section('title') Inventory @endsection
@section('content')
    <x-app-layout>
        <div class="container text-center mt-3">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoty</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Edit QTY</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $inv )
                        <tr>
                            <th scope="row">{{ $inv->id }}</th>
                            <td>{{ $inv->category }}</td>
                            <td>{{ $inv->qty }}</td>


                                <form action="{{ route('inventory.update',$inv->id) }}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <td>
                                        <input type="text" placeholder="QTY"  name="qty" style="width: 100%" >
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                    </td>

                                </form>

                        </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="border-first-button scroll-to-section">

                <a href="{{ route('admin.index') }}">Home</a>
              </div>
        </div>
    </x-app-layout>
@endsection
