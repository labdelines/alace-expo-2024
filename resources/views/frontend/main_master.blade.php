<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ແນວຄວາມຄິດຂອງງານວາງສະແດງ ຂອງ ສສວ ໃນປີນີ້ ນໍາສະເໜີພາຍໃຕ້ຫົວຂໍ້ 'ປົດລ໊ອກ' ເປັນການເນັ້ນໄປທີ່ການສົ່ງເສີມ ແລະ ເຜີຍແຜ່ມາດຕະຖານ ແລະເຄື່ອງມື ໃຫ້ແກ່ ສະຖາປະນິກ ແລະ ວິສະວະກອນໂຍທາ ໃນຂອບເຂດທົ່ວປະເທດ ເພື່ອໃຫ້ສາມາດຮັບມືກັບສີ່ງທ້າທາຍທີ່ເກີດຂຶ້ນໃນທົດສະວັດທີ່ກຳລັງຈະມາເຖິງ. ທັງໃນງານປະຊຸມ ແລະງານວາງສະແດງຂອງປີນີ້ ຈະເປັນເວທີສຳການປຶກສາຫາລື ແລະການທຳຄວາມເຂົ້າໃຈກ່ຽວກັບ ມາດຕະຖານ ກົດລະບຽບ ສະບັບອັບເດດ ທີ່ຈະນຳໃຊ້ໃນການປະກອບວີຊາຊີບໃນອະນາຄົດ"/>
    <meta property="og:url" content="https://alace-expo.com">
    <meta property="og:title" content=" ສໍາມະນາວິຊາການ ກ່ຽວກັບວຽກສະຖາປັດຕະຍະກໍາ ແລະວິສະວະກໍາໂຍທາລາວ"/>
    <meta property="og:image" content="{{ asset('frontend/assets/img/Home/expo-01.png') }}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    {{-- animated css link --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>

    <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>

    <div>
        @include('frontend.body.header')
    </div>
    <main class="main-section">
        @yield('main')
    </main>
    <div>
        @include('frontend.body.footer')
    </div>


    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/element-in-view.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- animated script  --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif

        $('.lightBoxGallery a').fancybox({
            fitToView : true,
            width   : '90%',
            height    : '90%',
            autoSize  : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
            pixelRatio: 2,
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
    </script>
</body>
</html>
