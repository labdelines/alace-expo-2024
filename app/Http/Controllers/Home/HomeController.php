<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function HomeMain()
    {
        $data = [
            'items' => [
                [
                    'topic' => 'COLLECTIVE LANGUAGE',
                    'description' => 'ຫົວ​ຂໍ້​ຂອງ​ງານ​ວາງສະ​ແດງ: ພາສາ​ລວມ: ປະສົບ​ການ​ສະຖາປັດຕະຍະກຳ ຄູ​ອາຈານ​ໃຫຍ່: Jerry Hong (Jenchieh Hung) ຜູ້ບໍລິຫານ: ນາດາ ອິນ​ທະ​ພັນ...',
                    'year' => "2024",
                    'image' => "Home/home1.png",
                ],
                [
                    'topic' => 'ASA ALL MEMBER',
                    'description' => 'ງານວາງສະແດງ 2024 ASA ALL MEMBER ມີຈຸດປະສົງເພື່ອໃຫ້ຜູ້ເຂົ້າຊົມງານວາງສະແດງທີ່ເປັນທັງຜູ້ທີ່ຢູ່ໃນອຸດສາຫະກໍາ, ນັກອອກແບບແລະປະຊາຊົນທົ່ວໄປໄດ້ປະສົບການ.',
                    'year' => "2023",
                    'image' => "Home/home2.png",
                ],
            ],
        ];
        return view('frontend.index', compact('data'));
    }

    public function expo()
    {
        $data = [
            'items' => [
                [
                    'topic' => 'COLLECTIVE LANGUAGE',
                    'description' => 'ຫົວ​ຂໍ້​ຂອງ​ງານ​ວາງສະ​ແດງ: ພາສາ​ລວມ: ປະສົບ​ການ​ສະຖາປັດຕະຍະກຳ ຄູ​ອາຈານ​ໃຫຍ່: Jerry Hong (Jenchieh Hung) ຜູ້ບໍລິຫານ: ນາດາ ອິນ​ທະ​ພັນ...',
                    'year' => "2024",
                    'image1' => "Concept1.png",
                    'image2' => "Concept/concept2.png",
                    'image3' => "Concept/concept3.png",
                ],
            ],
        ];
        return view('frontend.expo', compact('data'));
    }
    public function congressForum()
    {
        return view('frontend.congress-forum');
    }
    public function unLock()
    {
        return view('frontend.unlock');
    }
    public function conTact()
    {
        return view('frontend.contact');
    }
    public function expoFactSheet()
    {
        return view('frontend.expo-fact-sheet');
    }
    public function themDesign()
    {
        return view('frontend.them-design');
    }
    public function sponsorshipPackage()
    {
        $data = [
            'items' => [
                [
                    'image' => "sponsirship-01.png",
                ],
                [
                    'image' => "sponsirship-02.png",
                ],
                [
                    'image' => "sponsirship-03.png",
                ],
                [
                    'image' => "sponsirship-04.png",
                ],
                [
                    'image' => "sponsirship-05.png",
                ],
                [
                    'image' => "sponsirship-06.png",
                ],
                [
                    'image' => "sponsirship-07.png",
                ],
                [
                    'image' => "sponsirship-08.png",
                ],
            ],
        ];
        return view('frontend.sponsorship-package',compact('data'));
    }
    public function zoningDesign()
    {
        return view('frontend.zoning-design');
    }

    public function siminarWorkShop()
    {
        return view("frontend.siminar-workshop");
    }

    public function compitition()
    {
        return view('frontend.compitition');
    }
}
