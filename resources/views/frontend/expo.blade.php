@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)">
    <div class="container header-body-section">
        <h2 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" style="margin-bottom:7px;">EXPO</h2>
        <p data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" style="font-size: 14px;">
        ໃນງານວາງສະແດງ ທ່ານຈະໄດ້ສຳພັດກັບບັນດາ EXHIBITOR, ບໍ່ວ່າຈະເປັນບັນດາບໍລິສັດອອກແບບ ແລະກໍ່ສ້າງ, ບັນດາຫ້າງຮ້ານຂາຍວັດສະດຸກໍ່ສ້າງຕ່າງໆ ທີ່ຍົກຂະບວນສິນຄ້າ ແລະຄວາມຮູ້ ເພື່ອມາ UNLOCK ທຸກຄຳຖາມ ແລະບັນຫາທີ່ກ່ຽວກັບ ການອອກແບບບ້ານ, ການສ້າງບ້ານ,​ ມາດຕະຖານ ໃນຂົງເຂດວຽກງານ ສະຖາປັດຕະຍະກຳ ແລະວິສະວະກຳ. 
ໃນພື້ນທີ່ກວ່າ 2000 m2 ພາຍໃນ HALL ຂອງໄອເຕັກ ທ່ານຈະໄດ້ສຳຜັດກັບບັນດາບູ໊ດຂອງຜະລິດຕະພັນ ທີ່ກ່ຽວກັບ ວັດສະດຸກໍ່ສ້າງ ຕັ້ງແຕ່ໂຄງສ້າງ ຈົນໄປເຖິງງານລະບົບ ແລະ ການຕົກແຕ່ງພາຍນອກ ພາຍໃນ.  ຈາກທັງພາຍໃນ ແລະຕ່າງປະເທດ. 
ນອກຈາກນັ້ນ ຍັງມີກຸ່ມບັນດາບໍລິສັດອອກແບບ ແລະ ກໍ່ສ້າງຊັ້ນນຳຂອງປະເທດ ທີ່ຈະມາສະແດງຜົນງານ ແລະໃຫ້ຄຳປຶກສາ ກັບຜູ້ທີ່ຕ້ອງການເລີ່ມຕົ້ນສ້າງບ້ານ ຫລື ອອກແບບບ້ານ. 
ແລະພິເສດ ແມ່ນທ່ານຈະໄດ້ພົບກັບ BOOTH ALACE ແລະ PARTNER ເຊັ່ນ:​ ພາກລັດ,​ ສະຖາບັນການສຶກສາ ແລະ ອົງການສາກົນທີ່ກ່ຽວຂ້ອງກັບສ່າຍງານສະຖາປັດຕະຍະກຳ,​ ວິສະວະກຳ ແລະ ຜັງເມືອງ ທີ່ຂົນຂໍ້ມູນດ້ານວິຊາການ ມາມອບໃຫ້ກັບຜູ້ເຂົ້າຊົມງານ​. ພ້ອມກັນນັ້ນ ຍັງຈະມີພື້ນທີ່ກິດຈະກຳ ທີ່ບັນດາວິທະຍາກອນຈະມາສັບປ່ຽນຫມູນວຽນ ແລກປ່ຽນຄວາມຮູ້ໃນຫົວຂໍ້ຕ່າງໆ
</p>
    </div>
    <div class="container annual-activity">
        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024</h2>
            <div class="horizontal-line"></div>
        </div><br />
        <div class="row">
            <div class="col-md-12">
                <a href="{{ asset('upload/expo/expo-home.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/expo-home.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
            <div class="col-md-12">
                <br>
                <p>
                    This year's ALACE EXPO, themed "UNLOCK," will focus on equipping professionals in the architecture and civil engineering industries with the knowledge and tools to navigate the challenges of this decade. The event
        will serve as a platform to launch, discuss, and understand the latest standards, regulations, and laws impacting the industry.
                </p>
                <p>
                    Renewable Energy & Energy Efficiency Environment / Water Conservation & Management Building M&E Technology & Systems Landscaping & Exterior <br>
                    Foundation & Substructures<br>
                    Building & Construction<br>
                    Interiors Finishing<br>
                    M&E Equipment & Technology<br>
                    Kitchen & Bathrooms<br>
                    Building Materials & Supplies<br>
                    Building Services Design & Consultancy and Services Building Finishing Materials<br>
                    Construction Machinery & Equipment
                </p>
            </div>
        </div>
        <br>
        <br>
        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024</h2>
            <div class="horizontal-line"></div>
        </div><br />
        <div class="row">
            <div class="col-md-12">
                <a href="{{ asset('upload/expo/Expo-page-1.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-1.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
        </div>
        <br>
        <br>
        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024 1</h2>
            <div class="horizontal-line"></div>
        </div><br />
        <div class="row">
            <div class="col-md-5">
                <a href="{{ asset('upload/expo/Expo-page-2-1.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-2-1.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <a href="{{ asset('upload/expo/Expo-page-2-2.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-2-2.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
        </div>

        <br>
        <br>

        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024</h2>
            <div class="horizontal-line"></div>
        </div><br />
        <div class="row">
            <div class="col-md-4">
                <a href="{{ asset('upload/expo/Expo-page-3-1.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-3-1.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <a href="{{ asset('upload/expo/Expo-page-3-2.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-3-2.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
        </div>

        <br>
        <br>

        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024</h2>
            <div class="horizontal-line"></div>
        </div><br />
        <div class="row justify-content-center h-100">
            <div class="col-md-5">
                 <a href="{{ asset('upload/expo/Expo-page-4-1.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-4-1.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <a href="{{ asset('upload/expo/Expo-page-4-2.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-4-2.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
        </div>

        <br>
        <br>
        <div style="display: flex; align-items:center; justify-content:space-between" data-aos="fade-right"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2>ງານວາງສະແດງ ສສວ 2024</h2>
            <div class="horizontal-line"></div>
        </div><br />
        <div class="row">
            <div class="col-md-12">
                 <a href="{{ asset('upload/expo/Expo-page-6.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('upload/expo/Expo-page-6.jpg') }}" class="img-fliud" alt="">
                </a>
            </div>
        </div>

        <br>
        <br>

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
</section>
@endsection
