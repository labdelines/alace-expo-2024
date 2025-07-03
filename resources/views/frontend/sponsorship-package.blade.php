@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)">
    <div class="container"><br />
    @forelse($data['items'] as $item)
        <a href="{{ asset('frontend/assets/img/sponsorship/' . $item['image']) }}"  data-fancybox="gallery">
            <img src="{{ asset('frontend/assets/img/sponsorship/' . $item['image']) }}" alt="sponsirship"
            class="mt-3 img-fluid" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        </a>
    @empty
    @endforelse
        <br />
    </div>
</section>
@endsection
