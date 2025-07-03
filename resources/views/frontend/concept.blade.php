@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)">
    <div class="container header-body-section">
        <h3 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">Concept</h3>
        <h5 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">ສ້າງຄວາມຮັບຮູ້, ສື່ສານ
            ແລະສົ່ງຕໍ່ໂດຍບໍ່ມີຂອບເຂດໂດຍຜ່ານການຕິດຕໍ່ສະຖາປັດຕະຍະກໍາ. </h5>
        <h2 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">ດ້ວຍແນວຄິດ Collective
            Language : ສຳຜັດ ສະຖາປັດ</h2><br />
    </div>
    <div class="container annual-activity">
        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024</h2>
            <div class="horizontal-line"></div>
        </div><br />
        @forelse ($data['items'] as $item)
            <div class="show-activities">
                <div class="activity-left" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <img src="{{ asset('frontend/assets/img/' . $item['image1']) }}" alt="">
                </div>
                <div class="activity-rigth" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <img src="{{ asset('frontend/assets/img/' . $item['image2']) }}" alt="">
                </div>
            </div>
        @empty
        @endforelse
        <div style="display: flex; align-items:center; justify-content:space-around" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ກອງປະຊຸມ:</h2>
            <div class="horizontal-line"></div>
        </div><br />
        @forelse ($data['items'] as $item)
            <div class="show-activities1">
                <div class="activity-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <img src="{{ asset('frontend/assets/img/' . $item['image3']) }}" alt="">
                </div>
            </div>
        @empty
        @endforelse
    </div>
    <div>
        <div class="container">
            <div class="show-google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <h2> HOW TO GET THERE:</h2>
                <div class="horizontal-line">
                </div>
            </div>
        </div>
    </div>
    <div class="google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5202.297015426741!2d102.63151088694018!3d17.97275497275338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312467ce3da6c279%3A0x73da413b51866aec!2z4LqX4Lqy4LqU4Lqr4Lq84Lqn4LqHLCDguqfgur3guofguojgurHgupk!5e0!3m2!1slo!2sla!4v1716705746089!5m2!1slo!2sla"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
