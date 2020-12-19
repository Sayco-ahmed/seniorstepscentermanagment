<?php

use App\University;
use Illuminate\Database\Seeder;

class UniversityTableSeeder extends Seeder
{
    public function run()
    {
        $universities = [
            [
                'id'         => 1,
                'name'       => 'Ain Shams University',
            ],
            [
                'id'         => 2,
                'name'       => 'Alexandria University',
            ],
            [
                'id'         => 3,
                'name'       => 'Assiut University',
            ],
            [
                'id'         => 4,
                'name'       => 'Aswan University',
            ],
            [
                'id'         => 5,
                'name'       => 'Al-Azhar University',
            ],
            [
                'id'         => 6,
                'name'       => 'Banha University',
            ],
            [
                'id'         => 7,
                'name'       => 'Beni-Suef University',
            ],
            [
                'id'         => 8,
                'name'       => 'Damanhour University',
            ],
            [
                'id'         => 9,
                'name'       => 'Cairo University',
            ],
            [
                'id'         => 10,
                'name'       => 'Egypt-Japan University of Science and Technology',
            ],
            [
                'id'         => 11,
                'name'       => 'Fayoum University',
            ],
            [
                'id'         => 12,
                'name'       => 'Helwan University',
            ],
            [
                'id'         => 13,
                'name'       => 'Kafrelsheikh University',
            ],
            [
                'id'         => 14,
                'name'       => 'Mansoura University',
            ],
            [
                'id'         => 15,
                'name'       => 'Minya University',
            ],
            [
                'id'         => 16,
                'name'       => 'Menoufia University',
            ],
            [
                'id'         => 17,
                'name'       => 'Port Said University',
            ],
            [
                'id'         => 18,
                'name'       => 'Sadat Academy for Management Sciences ',
            ],
            [
                'id'         => 19,
                'name'       => 'Sohag University',
            ],
            [
                'id'         => 20,
                'name'       => 'South Valley University',
            ],
            [
                'id'         => 21,
                'name'       => 'Suez Canal University',
            ],
            [
                'id'         => 22,
                'name'       => 'Tanta University',
            ],
            [
                'id'         => 23,
                'name'       => 'University of Sadat City',
            ],
            [
                'id'         => 24,
                'name'       => 'Zagazig University',
            ],
            [
                'id'         => 25,
                'name'       => 'Ahram Canadian University',
            ],
            [
                'id'         => 26,
                'name'       => 'The American University in Cairo',
            ],
            [
                'id'         => 27,
                'name'       => 'Arab Academy for Science and Technology and Maritime Transport',
            ],
            [
                'id'         => 28,
                'name'       => 'Arab Open University',
            ],
            [
                'id'         => 29,
                'name'       => 'British University in Egypt',
            ],
            [
                'id'         => 30,
                'name'       => 'Canadian International College',
            ],
            [
                'id'         => 31,
                'name'       => 'Egyptian Russian University',
            ],
            [
                'id'         => 32,
                'name'       => 'El Asher University',
            ],
            [
                'id'         => 33,
                'name'       => 'El Shorouk Academy',
            ],
            [
                'id'         => 34,
                'name'       => 'French University of Egypt',
            ],
            [
                'id'         => 35,
                'name'       => 'Future University in Egypt',
            ],
            [
                'id'         => 36,
                'name'       => 'German University in Cairo',
            ],
            [
                'id'         => 37,
                'name'       => 'Heliopolis University',
            ],
            [
                'id'         => 38,
                'name'       => 'Higher Technological Institute',
            ],
            [
                'id'         => 39,
                'name'       => 'Misr International University',
            ],
            [
                'id'         => 40,
                'name'       => 'Misr University for Science and Technology',
            ],
            [
                'id'         => 41,
                'name'       => 'Modern Academy In Maadi',
            ],
            [
                'id'         => 42,
                'name'       => 'Modern Sciences and Arts University',
            ],
            [
                'id'         => 43,
                'name'       => 'Nahda University',
            ],
            [
                'id'         => 44,
                'name'       => 'Nile University',
            ],
            [
                'id'         => 45,
                'name'       => 'October 6 University',
            ],
            [
                'id'         => 46,
                'name'       => 'Pharos University in Alexandria',
            ],
            [
                'id'         => 47,
                'name'       => 'Sinai University',
            ],
            [
                'id'         => 48,
                'name'       => 'Alamein University',
            ]
        ];

        University::insert($universities);
    }
}
