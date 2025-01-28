<section id="about" class="wrapper bg-light wrapper-border">
    <div class="container pt-12 pt-md-14 pb-10 pb-md-12">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                    style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded">
                    <img src="{{ asset('storage/' . $about->image) }}" alt="">
                </figure>
            </div>
            <h1 class="text-center text-uppercase mb-1 my-12 fs-35 font-bold">{{ $about->title }}</h1>
            <p class="display-7 mb-2 me-lg-n5 fs-22 text-center">
                {{ $about->description }}
            </p>
            <div class="col-lg-7">
                <p class="lead fs-21">{{ $about->content }}</p>
            </div>
        </div>
    </div>
</section>
