@extends('admin.layouts.layout')

@section('title', 'Dashboard - Admin')

@section('content')
    <div class="container mt-5 ps-8">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-gray-900 text-2xl font-bold ps-4 mb-8 mt-8">Dashboard</h1>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        {{-- <h3 class="text-xl text-gray-900 mb-3">Welcome, Admin!</h3>s --}}
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr class="text-center text-gray-900">
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="text-center mb-4">
                                                <div class="flex item-center justify-center">
                                                    <button type="submit"
                                                        class="btn bg-gray-900 btn-md btn-primary me-3 border-gray-900">EDIT</button>
                                                    <button type="reset"
                                                        class="btn bg-red-700 btn-md btn-warning border-red-700">DELETE</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
