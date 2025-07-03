@extends('frontend.main_master')
@section('main')
@section('title')
{{ env('SITE_TITLE') }}
@endsection
<section style="background-color:rgb(45, 45, 45)"><br />
    <div class="container"
        style="display: flex; align-items:start; justify-content:space-between; margin-top:2rem; flex-direction:column"
        data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div style="width: 100%; text-align:center">
            <div style="width: 100%">
                <img src="{{ asset('frontend/assets/img/Home/expo-01.png') }}" alt="image-01" class="expo-01">
            </div>
            <div style="width: 100%; margin-top:1rem">
                <p style="font-size: 14px; ">ງານວາງສະແດງ |
                    ກອງປະຊຸມປະຈໍາປີ
                    | ສໍາມະນາວິຊາການ
                    ກ່ຽວກັບວຽກສະຖາປັດຕະຍະກໍາ ແລະວິສະວະກໍາໂຍທາລາວ</p>
            </div>
        </div><br />
        <div style="width: 100%;">
            <div>
                <h2 class="expo-intro">Expo Introduction</h2>
                <p style="font-size: 14px;">ແນວຄວາມຄິດຂອງງານວາງສະແດງ ຂອງ ສສວ ໃນປີນີ້ ນໍາສະເໜີພາຍໃຕ້ຫົວຂໍ້
                    "ປົດລ໊ອກ"
                    ເປັນການເນັ້ນໄປທີ່ການສົ່ງເສີມ ແລະ
                    ເຜີຍແຜ່ມາດຕະຖານ ແລະເຄື່ອງມື ໃຫ້ແກ່ ສະຖາປະນິກ ແລະ ວິສະວະກອນໂຍທາ ໃນຂອບເຂດທົ່ວປະເທດ
                    ເພື່ອໃຫ້ສາມາດຮັບມືກັບສີ່ງທ້າທາຍທີ່ເກີດຂຶ້ນໃນທົດສະວັດທີ່ກຳລັງຈະມາເຖິງ.
                    ທັງໃນງານປະຊຸມ ແລະງານວາງສະແດງຂອງປີນີ້ ຈະເປັນເວທີສຳການປຶກສາຫາລື ແລະການທຳຄວາມເຂົ້າໃຈກ່ຽວກັບ ມາດຕະຖານ
                    ກົດລະບຽບ ສະບັບອັບເດດ ທີ່ຈະນຳໃຊ້ໃນການປະກອບວີຊາຊີບໃນອະນາຄົດ </p>
            </div>
            <div style="display: flex; align-items:start; justify-content:center; flex-direction:column">
                <div class="intro-row">
                    <div class="intro-row-left">
                       <a href="{{ asset('frontend/assets/img/Home/expo-02.png') }}" data-fancybox="gallery" >
                       <img src="{{ asset('frontend/assets/img/Home/expo-02.png') }}"class="img-fluid" alt="image-01"style="border-radius: 5px">
                       </a>
                    </div>
                    <div class="intro-row-right">
                        <p style="font-size: 14px;">“ປົດລັອກ" ຄືຈຸດເລີ່ມຕົ້ນສູ່ການການຮຽນຮູ້
                            ແລະການເຂົ້າເຖິງສິ່ງໃໝ່ທີ່ອາດຍັງບໍ່ໄດ້ສໍາພັດ
                            ໂດຍພວກເຮົາມີເປົ້າຫມາຍເພື່ອ ການຮ່ວມມືລະຫວ່າງທຸກພາກສ່ວນທີ່ກ່ຽວຂ້ອງ ເພື່ອຮ່ວມກັນທະລາຍກຳແພງ
                            ແລະຂີດຈຳກັດຕ່າງໆໃນວົງການອອກແບບສະຖາປັດຕະຍະກຳ ແລະ ວິສະວະກຳໂຍທາ ເພື່ອໃຫ້ກ້າວໄປເຖິງການ
                            ສື່ສານທີ່ມີປະສິດທິພາບສູ່ສັງຄົມ ແລະ ທົ່ວປະເທດ.
                        </p>
                        <p style="font-size: 14px;"> ພາຍໃນງານ ຈະໄດ້ພົບກັບ ບັນດາບໍລິສັດ ແລະຜູ້ປະກອບການຈາກຫລາກຫລາຍ ຂົງເຂດ
                            ແລະ
                            ຜະລິດຕະພັນ
                            ທີ່ຈະຍົກຂະບວນກັນມາວາງສະແດງພາຍໃນພື້ນທີ່ກວ່າ 80 ບູ໊ດ ລວມໄປເຖິງບຼ໊ດຂອງບັນດາບໍລິສັດ,
                            ສະຖາບັນການສຶກສາ
                            ແລະ ສສວ
                            ທີ່ຈະມາຮ່ວມໃຫ້ຄວາມຮູ້ ກ່ຽວກັບຜະລິດຕະພັນການກໍ່ສ້າງ ໃຫ້ແກ່ສະມາຊິກ ແລະບຸກຄົນທົ່ວໄປ. ງານ ALACE
                            EXPO
                            24:
                            ປົດລ໊ອກ ຈະເປັນແຮງບັນດານໃຈໃນກການຍົກລະດົບຄວາມຮູ້ຄວາມເຂົ້າໃຈກ່ຽວກັບ
                            ອະນາຄົດດ້ານວິຊາຊີບຂອງສະຖາປະນິກ
                            ແລະວິສະວະກອນກໍ່ສ້າງລາວ, ເພື່ອຈະນຳໄປສູ່ການສ້າງສັນຜົນງານທີ່ມີຄຸນນະພາບອອກສູ່ສັງຄົມລາວ.</p>
                        <p>Renewable Energy & Energy Efficiency Environment / Water Conservation
                            &
                            Management Building M&E
                            Technology & Systems Landscaping & Exterior
                            Foundation & Substructures
                            Building & Construction
                            Interiors Finishing
                            M&E Equipment & Technology
                            Kitchen & Bathrooms
                            Building Materials & Supplies
                            Building Services Design & Consultancy and Services Building Finishing Materials
                            Construction Machinery & Equipment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container intro-row-01" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="intro-row-left">
            <h4 style="color:white">ALACE EXPO 24</h4>
            <h3>"UNLOCK"</h3>
        </div>
        <div class="intro-row-right">
            <h2>The Power of UNLOCK:</h2>
            <p>Unifying the Lao Architecture and Engineering Ecosystem</p>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
    <a href="{{ asset('frontend/assets/img/Home/expo-03.png') }}" data-fancybox="gallery">
        <img src="{{ asset('frontend/assets/img/Home/expo-03.png') }}" alt="image-01" class="expo-03">
    </a>
    </div>

    <div class="container" style="display:flex; margin-top:2rem" data-aos="fade-up" data-aos-offset="200"
        data-aos-delay="50" data-aos-duration="1000">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="{{ asset('frontend/assets/img/Home/expo033.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('frontend/assets/img/Home/expo-033.png') }}" class="img-fliud" alt="" style="width: 100%">
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ asset('frontend/assets/img/Home/expo04.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('frontend/assets/img/Home/expo-04.png') }}" class="img-fliud" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ asset('frontend/assets/img/Home/expo05.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('frontend/assets/img/Home/expo-05.png') }}" class="img-fliud" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ asset('frontend/assets/img/Home/expo06.jpg') }}" data-fancybox="gallery">
                    <img src="{{ asset('frontend/assets/img/Home/expo-06.png') }}" class="img-fliud" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="container">
            <div class="show-google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <h2>Unlock the know:</h2>
                <div class="horizontal-line">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 intro-row-reverse" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="intro-row-reverse-left">
            <p>“ປົດລັອກ” ທໍາອິດ ຄື ການປົດລັອກໃນສິ່ງທີ່ບໍ່ຮູ້ ກໍຄືໂອກາດສູ່ການຮຽນ, ແລກປ່ຽນ ແລະທ້ອນໂຮມບັນດາຂໍ້ມູນ,
                ອົງຄວາມຮູ້ ແລະອັບເດດນະວັດຕະກໍາໃໝ່ໆທາງດ້ານວຽກງານການກໍ່ສ້າງ, ການປະກອບອາຊີບ
                ແລະການດໍາເນີນງານໃນສາຍອາຊີບສະຖາປັດຕະຍະກໍາ ແລະວິສະວະກໍາໂຍທາຂອງລາວ ແລະສາກົນ</p> <br />
            <p>ພາຍໃນງານຄັ້ງນີ້ ຈະເປັນຈຸດລິເລີ່ມທີ່ຈະຊ່ວຍຈັດຕຽມ ແລະສ້າງພື້ນທີ່ຂອງການແລກປ່ຽນຄວາມຮູ້, ເຄື່ອງມື,
                ຂໍ້ມູນວັດສະດຸ ແລະ ນະວັດຕະກໍາທາງດ້ານວິຊາການໃໝ່ໆ ອັບເດດໃຫ້ຜູ້ເຂົ້າຮ່ວມຜ່ານການນໍາສະເໜີ, ການເສວະນາ
                ແລະການວາງສະແດງ ທີ່ຈະຊ່ວຍໃຫ້ພວກເຂົາສາມາດເຂົ້າເຖິງອົງຄວາມຮູ້ທີ່ທັນສະພາບ
                ແລະສາມາດຈັດການກັບຄວາມທ້າທາຍທີ່ຈະເກີດຂື້ນໃນອຸດສະຫະກໍາສະຖາປັດຕະຍະກໍາ ແລະວິສະວະກໍາໂຍທາຂອງລາວໃນຕໍ່ຫນ້າ
            </p><br />
            <p>The first key to UNLOCK is the pursuit of knowledge. The expo will provide a platform for learning,
                exchange, and information gathering. Through presentations, workshops, and exhibitions, participants
                will gain insights into the latest innovations in construction work, professions, and operations – both
                domestically and internationally. This focus on continuous learning will prepare Lao architects and
                engineers to address the challenges and opportunities that lie ahead.</p>
        </div>
        <div class="intro-row-reverse-right">
            <a href="{{ asset('frontend/assets/img/Home/expo-04.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/Home/expo-04.png') }}" class="img-fliud" style="width: 90%">
            </a>
        </div>
    </div>

    <div class="mt-3">
        <div class="container">
            <div class="show-google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <h2>Unlock the clear:</h2>
                <div class="horizontal-line"></div>
            </div>
        </div>
    </div>
    
    <div class="container mt-3 intro-row" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="intro-row-left">
            <a href="{{ asset('frontend/assets/img/Home/expo-07.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/Home/expo-07.png') }}" class="img-fliud" style="width: 100%">
            </a>
        </div>
        <div class="intro-row-right">
            <p>“ປົດລັອກ” ທີສອງ ຄືການປົດລັອກທຸກຄໍາຖາມ, ຂໍ້ສົງໄສ ແລະຄວາມບໍ່ຊັດເຈນທັງດ້ານມາດຕະຖານ, ກົດລະບຽບ,
                ການຂໍອະນຸຍາດດໍາເນີນທຸລະກິດ, ເອກະສານປະຕິບັດຈັນຍາບັນ, ສິດ ແລະ ຫນ້າທີ່, ແນວທາງການດໍາເນີນງານ
                ແລະເອກະສານອື່ນໆທີ່ຕິດພັນກັບການດໍາເນີນງານໃນສາຍອາຊີບສະຖາປັດຕະຍະກໍາ
                ແລະວິສະວະກໍາເພື່ອສ້າງການເຮັດວຽກທີ່ມີປະສິດທິພາບ ແລະຖືກຕ້ອງຕາມຫລັກສາກົນ.
                ພ້ອມກັນນັ້ນ, ຍັງຈະສານຕໍ່ສູ່ການ ປົດລັອກ ຕົວຕົນທີ່ຊັດເຈນຂອງ ສະມາຄົມ ສສວ ທີ່ມີບົດບາດໃນການເປັນຫົວເຮືອ
                ແລະແກ່ນກາງ ໃຫ້ແກ່ບັນດາສະຖາປະນິກ ແລະວິສະວະກອນລາວ ເພື່ອການຈັດຕັ້ງນໍາພາ ແລະ
                ສ້າງການເຄື່ອນໄຫວພັດທະນາດ້ານສາຍວິຊາຊີບ ຢ່າງມີແບບແຜນ ແລະມີຄຸນະພາບ. ເຊິ່ງພາຍໃນງານ
                ທ່ານຈະໄດ້ເຂົ້າໃຈໃນສາຍການພົວພັນ ແລະການດໍາເນີນງານຢ່າງເປັນຂັ້ນຕອນຂອງແຕ່ລະພາກສ່ວນ
                ເພື່ອຊ່ວຍໃຫ້ເກີດການເຮັດວຽກປະສານກັນຢ່າງເປັນລະບົບ ແລະມີປະສິດທິພາບ</p> <br />
            <p>The second aspect of UNLOCK addresses the need for clear and concise information. The expo will provide a
                space to address uncertainties surrounding standards, regulations, permitting processes, ethical
                guidelines, and other job-related matters. This focus on clarity will ensure efficient and accurate work
                practices that meet international standards. Furthermore, UNLOCK will solidify the role of the
                Association of Architects and Engineers in Laos as a leader in professional development activities.</p>
        </div>
    </div>

    <div class="mt-5">
        <div class="container">
            <div class="show-google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <h2>Unlock the unity:</h2>
                <div class="horizontal-line">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 intro-row-reverse" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="intro-row-reverse-left">
            <p>“ປົດລັອກ” ທີ່ສາມ ເພື່ອສ້າງການປະສານງານຮ່ວມມື, ເຊື່ອມໂຍງ ແລະເຮັດວຽກຮ່ວມກັນເປັນປຶກແຜ່ນ ແລະ ເປັນຫນຶ່ງດຽວຂອງ 4
                ພາກສ່ວນສໍາຄັນໃນ Ecosystem ວຽກງານສະຖາປັດຕະຍະກໍາ ແລະວິສະວະກໍາລາວ ເຊິ່ງປະກອບດ້ວຍ:
                ກຸ່ມວິຊາການ, ຊ່ຽວຊານ ລວມໄປເຖິງບັນດາຜູ້ອອກແບບຮັບເໝົາຕ່າງໆ
                ກຸ່ມຜູ້ສະໜອງວັດສະດຸ, ເຄື່ອງມື ແລະນະວັດຕະກໍາທີ່ຕິດພັນກັບວຽກງານການກໍ່ສ້າງ
                ກຸ່ມບັນດາລູກຄ້າທົ່ວໄປ ແລະຜູ້ທີ່ສົນໃຈ ຫລືຕ້ອງການການອອກແບບ ແລະກໍ່ສ້າງອາຄານ
                ກຸ່ມນັກສຶກສາ ແລະ ຜູ້ຮຽນຮູ້ ທີ່ຈະເປັນອະນາຄົດຂອງການພັດທະນາສາຍວິຊາຊີບນີ້ໃນຕໍ່ຫນ້າ
                ເປັນການເປີດ ໂອກາດໃນການແລກປ່ຽນຮຽນຮູ້ເຊິ່ງກັນ ແລະກັນ, ສຶກສາວິເຄາະເຖິງຂໍ້ຈໍາກັດ, ຄວາມທ້າທາຍ
                ແລະການຫາທາງອອກຮ່ວມກັນຂອງທັງ 4 ຝ່າຍໃນວຽກງານສະຖາປະນິກ ແລະວິສະວະກອນລາວ ໃຫ້ເປັນສາຍອາຊີບທີ່ມີຄຸນະພາບ
                ແລະສ້າງຄວາມເພິງພໍໃຈໃນຜົນງານໃຫ້ແກ່ທຸກໆຝ່າຍ.</p> <br />
            <p>UNLOCK recognizes the interconnectedness of the Lao architecture and engineering ecosystem. The expo will
                bring together four key stakeholder groups:
                Technical experts and design contractors
                Suppliers of materials, tools, and construction innovations
                General customers and those interested in design and construction services
                Students and future professionals
                Through collaboration and knowledge exchange, these groups can work together more systematically and
                efficiently. UNLOCK provides a unique opportunity to address limitations, identify challenges, and find
                solutions that benefit all stakeholders within the Lao architecture and engineering landscape.
            </p><br />
        </div>
        <div class="intro-row-reverse-right">
        <a href="{{ asset('frontend/assets/img/Home/expo-05.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/Home/expo-05.png') }}" class="img-fliud" style="width: 90%">
            </a>
        </div>
    </div>

    <div class="mt-3">
        <div class="container">
            <div class="show-google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <h2>Unlock the Upside:</h2>
                <div class="horizontal-line">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 intro-row" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="intro-row-left">
        <a href="{{ asset('frontend/assets/img/Home/expo-06.png') }}" data-fancybox="gallery">
                <img src="{{ asset('frontend/assets/img/Home/expo-06.png') }}" class="img-fliud">
            </a>
        </div>
        <div class="intro-row-right">
            <p>“ປົດລັອກ” ໂອກາດໃໝ່ໆໃນການປະກອບອາຊີບ ສາຍສະຖາປະນິກ ແລະ ວິສະວະກອນລາວ
                ທີ່ຈະຊ່ວຍໃຫ້ຜູ້ເຂົ້າຮ່ວມງານເບິ່ງເຫັນໂອກາດໃໝ່ໆ ຫລືເປັນຫານຂະຫຍາຍເພດານຂອງໂອກາດໃນການເຮັດວຽກທີ່ສູງຂື້ນ,
                ບໍ່ຈໍາເພາະເຈາະຈົງໃນວົງແຂບ ຫລືກຸ່ມລູກຄ້າເດີມໆ
                ແຕ່ຍັງສາມາດສ້າງໂອກາດຜ່ານການເຮັດວຽກຮ່ວມກັບຫລາຍພາກສ່ວນທີ່ບໍ່ເຄີຍສໍາພັດມາກ່ອນ ບໍ່ວ່າຈະເປັນພາກສ່ວນຕ່າງປະເທດ,
                ອົງການສາກົນ ແລະອື່ນໆ.
                ສານຕໍ່ຮັບຮູ້ ແລະເຂົ້າໃຈຄວາມຕ້ອງການຂອງຫລາຍໆກຸ່ມຄົນສະເພາະທັງໃນລັກສະນະລູກຄ້າສ່ວນບຸກຄົນ
                ແລະລູກຄ້າທີ່ເປັນກຸ່ມຫລືກົມກອງ ເພື່ອເປັນການເປີດໂອກາດໃນການຂະຫຍາຍການບໍລິການໄດ້ຢ່າງທົ່ວເຖິງ
                ແລະຫລາກຫລາຍຍິ່ງຂື້ນ</p> <br />
            <p>The final aspect of UNLOCK focuses on unlocking new career possibilities for Lao architects and
                engineers. The expo will showcase a broader range of work opportunities, not just traditional
                client-based projects. Participants will gain insights into working with international organizations and
                foreign entities, expanding their professional horizons. By recognizing the diverse needs of various
                client groups, UNLOCK empowers participants to provide a wider range of high-quality services.</p>
        </div>
    </div>
    <div class="container mt-5 expo-08" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <a href="{{ asset('frontend/assets/img/Home/expo-08.png') }}" data-fancybox="gallery">
            <img src="{{ asset('frontend/assets/img/Home/expo-08.png') }}" class="img-fliud" alt="image-01">
        </a>
    </div><br />
    <div class="container mt-5 expo-08" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <a href="{{ asset('frontend/assets/img/Home/timetable.png') }}" data-fancybox="gallery">
            <img src="{{ asset('frontend/assets/img/Home/timetable.png') }}" class="img-fliud" alt="image-01">
        </a>
        
    </div><br />
    <div class="mt-3">
        <div class="container">
            <div class="show-google-map" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <h2>Video for Expo:</h2>
                <div class="horizontal-line">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F346022771918646%2F&show_text=false&width=267&t=0"
                        width="267" height="476" style="border:none;overflow:hidden" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="google-map mt-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4940.504276586235!2d102.6408483884353!3d17.961328184966796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312466357a52aa39%3A0x6430dee0cdc0b8e7!2z4Lqq4Lq54LqZ4LqB4Lqy4LqZ4LqE4LuJ4Lqy4LuE4Lqt4LuA4LqV4Lqx4LqB!5e0!3m2!1slo!2sla!4v1717315862913!5m2!1slo!2sla"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
