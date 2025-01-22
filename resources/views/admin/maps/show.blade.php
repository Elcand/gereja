@extends('admin.layouts.layout')

@section('content')
    <div class="ps-12 pe-8">
        <div class="row my-10">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div>
                        <div class="row text-center my-4">
                            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                                <div class="map-container content-center rounded-lg border border-gray shadow-md">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206.59028982756126!2d110.42738005659713!3d-6.968502225711401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f34349b8e345%3A0x8fd1c780aa92f074!2sGPIB%20Immanuel%20Semarang%20(Gereja%20Blenduk)!5e1!3m2!1sid!2sid!4v1736922189099!5m2!1sid!2sid"
                                        width="100%" height="450" style="border-radius: 8px;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-4 mb-4 grid-cols-1">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="col-span-1">
                                        <p class="mb-4 mt-4 font-semibold">Latitude:</p>
                                        <p>{{ $maps->latitude }}</p>
                                        <hr class="mt-2">
                                    </div>
                                    <div class="col-span-1">
                                        <p class="mb-4 mt-4 font-semibold">Longitude:</p>
                                        <p>{{ $maps->longtitude }}</p>
                                        <hr class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
