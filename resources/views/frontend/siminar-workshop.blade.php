@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)">
    <div class="container mt-4 siminar-workshop"><br /><br />
        <h3 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">SIMINAR / WORKSHOP:</h3>
        <p class="mt-4" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" style="font-size: 14px;">
            ນອກຈາກການວາງສະແດງສິນຄ້າວັດສະດຸ ແລະ ນະວັດຕະກຳເພື່ອການກໍ່ສ້າງແລ້ວ ຕະຫລອດ 7ວັນຂອງງານ EXPO
            ຍັງມີກິດຈະກຳຫລາກຫລາຍທີ່ທາງ ALACE ສະມາຄົມ ສະຖາປະນິກ ແລະ ວິສະວະກອນໂຍທາລາວ-ສສວ
            ແລະຜູ້ປະກອບການຮ່ວມມືກັນຈັດກິດຈະກຳທີ່ຫລາກຫລາຍ ບໍ່ວ່າຈະເປັນ: <br />
            1. ການຈັດການທົວບູ໊ດແບບ exclusive.<br />
            2. Workshop ທີ່ທາງ suppliers ເຮົາຈະມາບັນຍາຍ ສາທີດ ແລະໃຫ້ຜູ້ເຂົ້າຮ່ວມໄດ້ທົດລອງປະຕິບັດຈິງ.<br />
            3. Panel discussion ໃນຫົວຂໍ້ຕ່າງໆ ທີ່ຈະມາແລກປ່ຽນກ່ຽວກັບບັນຫາບ້ານໆ ຈົນໄປເຖິງລະດັບຕົວ້ມືອງ.<br />
            4. ການນຳສະເຫນີ ນະວັດຕະກຳ ແລະ ຜະລິດຕະພັນ ຈາກວິທະຍາກອນຜູ້ຊ່ຽວຊານຈາກບັນດາ brand ວັດສະດຸກໍ່ສ້າງຊັ້ນນຳ.<br />
            5. ການສົນທະນາກ່ຽວກັບລະບຽບ ມາດຕະຖານ ການສ້າງບ້ານ ແລະສາຍວີຊາຊີບ ສະຖາປະນິກ ແລະວິສະວະກອນໃນລາວ.<br />
            6.ການປະມູນສິນຄ້າ ແລະ mini concert ຈາກທາງນັກສຶກສາ.<br />
        </p><br />
        <h3 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">ລາຍລະອຽດກິດຈະກໍາຕ່າງໆ:
        </h3>
        <div>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/29.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/29.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/30.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/29.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="30" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/31.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/31.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/32.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/32.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/33.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/33.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/34.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/34.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/35.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/35.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/36.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/36.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
            <a href="{{ asset('frontend/assets/img/siminar-workshop/37.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/siminar-workshop/37.png') }}"alt="" class="mt-3"
                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"class="img-fliud" alt="">
            </a>
        </div><br />
    </div>
</section>
@endsection
