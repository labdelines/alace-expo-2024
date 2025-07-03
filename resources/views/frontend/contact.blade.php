@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)">
    <div class="container header-body-section">
        <h3 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">Contact</h3>
        <div style="display: flex; align-items:center; justify-content:center">
            <img src="{{ asset('frontend/assets/logo.png') }}" alt="" class="mt-3"
                style="width: 80px; height:80px">
            <div style="margin-left: 1rem">
                <h5 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">ສະມາຄົມ
                    ສະຖາປະນິກ
                    ແລະ
                    ວິສະວະກອນໂຍທາລາວ(ສສວ)</h5>
                <h5 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    Association of Lao Architects and Civil Engineers (ALACE). </h5>
            </div>
        </div>
    </div>
    <div class="container annual-activity">
        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-up"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>Alace</h2>
        </div><br />

        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <div class="activity-left" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <p>Address:Lab de Lines Building, 4th Floor, Donnokkoum Rd., Vientiane, Laos
                </p>
                <p>Tel : +856 2059 449 989.</p>
                <p>Email :alacelao@gmail.com.</p>
                <p>Email :alacelao.office@gmail.com.</p>
                <p>Email :alacelao.expo@gmail.com.</p>
            </div><br />
            <div class="google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4473.923915596096!2d102.63170381290927!3d17.937909267877707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312467b4f5436957%3A0x9f40a8f3f6b35fd0!2sLAB%20DE%20LINES!5e0!3m2!1slo!2sla!4v1717319799193!5m2!1slo!2sla"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
