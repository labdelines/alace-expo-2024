@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)">
    <div class="container congrass-page">
        <div class="show-video" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            style="margin-bottom:-80px;">
            <img src="{{ asset('frontend/assets/img/Congressforum/forum1.png') }}" alt="">
        </div>
        <p data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" style="font-size: 14px;">ສສວ
            ຈະໄດ້ຈັດກອງປະຊຸມປະຈຳປີ, ກອງປະຊຸມສໍາມະນາວິທະຍາສາດ ແລະ ງານວາງສະແດງ ປະຈໍາປີ2024 ຂອງ
            ສສວ ລະຫວ່າງວັນທີ່ 10-16
            ມິຖຸນາ 2024. ໃນຕອນເຊົ້າວັນທີ 10 ມິຖຸນາ 2024 ຈະໄດ້ຈັດກອງປະຊຸມປະຈຳປີ ທີ່ສູນຮ່ວມມືສາກົນ ແລະ ການຝຶກອົບຮົມ (ຫລັກ
            05) ເພື່ອສະຫລຸບຜົນງານການເຄື່ອນໄຫວວຽກງານຂອງ ສສວ ໃນໜຶ່ງປິຜ່ານມາ, ໂດຍຈະມີສະມາຊິກ ສສວທົ່ວປະເທດ ແລະ
            ຜູ້ຕາງໜ້າຄະນະບໍລິຫານສາຂາຂອງ ສສວ ຈາກທຸກໆແຂວງ ລວມທັງໝົດປະມານ 300 ກວ່າທ່ານ ແລະ
            ໃນພາກບ່າຍຈະເປັນກອງປະຊຸມສໍາມະນາວິທະຍາສາດ ຈະໄດ້ປຶກສາຫາລືແລກປ່ຽນບົດຮຽນກັນໃນຫົວຂໍ້ການປະຕິບັດວິຊາຊີບ ແລະ
            ການອອກໃບທະບຽນການປະຕິບັດວິຊາຊີບຂອງນັກສະຖາປະນິກ ແລະ ວິສະວະກອນໂຍທາຢູ່ສປປ ລາວ:</p>
        <div style="display: flex; align-items:center; justify-content:center; flex-direction:column" data-aos="fade-up"
            data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <img src="{{ asset('frontend/assets/img/Congressforum/congrass-01.jpg') }}" alt="" class="mt-3"
                style="width: 100%">
            <img src="{{ asset('frontend/assets/img/Congressforum/congrass-02.jpg') }}" alt="" class="mt-3"
                style="width: 100%">
            <img src="{{ asset('frontend/assets/img/Congressforum/congrass-03.jpg') }}" alt="" class="mt-3"
                style="width: 100%">
        </div><br />
    </div>
</section>
@endsection
