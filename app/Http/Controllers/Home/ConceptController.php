<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class ConceptController extends Controller
{
    public function Concept()
    {
        $data = [
            'items' => [
                [
                    'topic' => 'COLLECTIVE LANGUAGE',
                    'description' => 'ຫົວ​ຂໍ້​ຂອງ​ງານ​ວາງສະ​ແດງ: ພາສາ​ລວມ: ປະສົບ​ການ​ສະຖາປັດຕະຍະກຳ ຄູ​ອາຈານ​ໃຫຍ່: Jerry Hong (Jenchieh Hung) ຜູ້ບໍລິຫານ: ນາດາ ອິນ​ທະ​ພັນ...',
                    'year' => "2024",
                    'image1' => "Concept/concept1.png",
                    'image2' => "Concept/concept2.png",
                    'image3' => "Concept/concept3.png",
                ],
            ],
        ];

        return view('frontend.concept', compact('data'));
    }
}
