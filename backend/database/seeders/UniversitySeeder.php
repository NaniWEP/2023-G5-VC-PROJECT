<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $universities =
            [
                ['name' => 'Western University', 'description' => 'Western University, Cambodia, founded in 2003, is a private higher-education institution located in the capital city of Phnom Penh by its owner', 'website' => 'http://westernuniversity.edu.kh/', 'email' => 'info_wu@westernuniversity.edu.kh', 'phone' => '+855 23 990 699', 'location' => '15, Street 528, Sangkat Beoung Kok1, Khan Toul Kork, Phnom Penh, Phnum Pénh, Cambodia', 'province' => 'Phnom Penh', 'user_id' => 3],
                ['name' => 'Royal University of Phnom Penh', 'description' => 'The first in the list of the best universities in Cambodia is Royal University of Phnom Penh (RUPP). It is Cambodia national university, located in the capital of Phnom Penh.', 'website' => 'http://www.rupp.edu.kh/', 'email' => 'secretary@rupp.edu.kh', 'phone' => '+885 23 883 640', 'location' => 'RUPP Auditorium, Russian Federation Blvd (110), Phnom Penh, Cambodia', 'province' => 'Phnom Penh', 'user_id' => 3],
                ['name' => 'Angkor University', 'description' => 'Angkor University is a higher education and research institution in Siem Reap Province, Cambodia. The university is composed of seven academic faculties and three centers', 'website' => 'https://angkor.edu.kh/', 'email' => 'info@angkorfocus.com.', 'phone' => '+885 092 256 086', 'location' => '7P559V2Q+7X, Borie Seang Nam, ផ្លូវបុរី សៀង ណាំ, Krong Siem Reap', 'province' => 'Siem Reap', 'user_id' => 3],
                ['name' => 'Meanchey University', 'description' => 'Mean Chey University (MCU) is located in Sisophon, Banteay Meanchey, Cambodia. The university was established in 2007. It is accredited by Ministry of Education, Youth and Sports, Cambodia.', 'website' => 'https://nmu.edu.kh/en/home/', 'email' => 'info@nmu.edu.kh', 'phone' => '+885 77 721 930', 'location' => 'National Road No5 Banoy Village Sangkat Teuk Thla Serey Sophorn City Banteay Meanchey province, Cambodia', 'province' => 'Banteay Meanchey', 'user_id' => 4],
                ['name' => 'Paññāsāstra University', 'description' => 'PUC is the first higher learning institution in Cambodia that provides English based education in all subjects, and is officially authorized and accredited', 'website' => 'http://www.puc.edu.kh/', 'email' => 'info@puc.edu.kh', 'phone' => '+885 023 990 153', 'location' => 'Address: No. 42 St: 432, Toul Tumpoung I,Khan Chamkamorn, Phnom Penh,Kingdom of Cambodia.', 'province' => 'Siem Reap', 'user_id' => 3],
                ['name' => 'University of Cambodia', 'description' => 'The University of Cambodia, founded in 2003, is a leading private university that offers Associates, Bachelor, Master and Doctoral degrees.  ', 'website' => ' https://uc.edu.kh/', 'email' => 'info@uc.edu.kh', 'phone' => '+855 23 993 273', 'location' => 'វិថី ណតប្រ៊ីតដ៍, ភូមិ ស្លែងរលឹង, សង្កាត់ ទឹកថ្លា រាជធានីភ្នំពេញ, 12102, Cambodia', 'province' => 'Phnom Penh', 'user_id' => 3],
                ['name' => 'Norton University', 'description' => 'Norton University is a private university in Cambodia registered with the Ministry of Education, Youth and Sport. It was established in 1996.', 'website' => 'https://www.norton-u.com/', 'email' => 'info@norton-u.com', 'phone' => '+855 93 888 569 /+855 93 888 359', 'location' => 'St. Keo Chenda, Sangkat Chroy Changvar, Khan Chroy Changvar, Phnom Penh, Cambodia.', 'province' => ' Phnom Penh', 'user_id' => 4],
                ['name' => 'University of Health Sciences', 'description' => 'The University of Health Sciences is a public university offering degrees in health sciences in Phnom Penh, Cambodia.', 'website' => 'https://www.uhs.edu.kh/', 'email' => 'info@uhs.edu.kh', 'phone' => '+885 23 430 559', 'location' => ' វិថី ណតប្រ៊ីតដ៍, ភូមិ ស្លែងរលឹង, សង្កាត់ ទឹកថ្លា រាជធានីភ្នំពេញ, 12102, Cambodia', 'province' => 'Phnom penh', 'user_id' => 4],
                ['name' => 'National University of CheaSim Kamchaymear', 'description' => 'CSUK is a public higher education institution administered by the Ministry of Education of the Royal Government of Cambodia. Currently, CSUK has 5 faculties, including Faculty of (1) Management; (2) Art, Humanity,', 'website' => 'https://kh.linkedin.com/company/cusk', 'email' => 'info@csuk.edu.kh', 'phone' => '+885 12 478 901', 'location' => 'Kamchay Mear District, Prey Veng Province, Cambodia.', 'province' => 'Prey Veng', 'user_id' => 4],
                ['name' => 'Svay Rieng University', 'description' => 'SVAY RIENG UNIVERSITY (SRU) is a top-tier educational institution in the southeast corner of Cambodia.', 'website' => 'https://sru.edu.kh/', 'email' => 'info@sru.edu.kh', 'phone' => '+885 11 411 778', 'location' => 'National Road No. 1Phumi Chambak, Sangkat Chek,Svay Rieng City, Svay Rieng Province', 'province' => 'Svay Rieng', 'user_id' => 4],
                ['name' => 'National University of Battambang', 'description' => 'National University of Battambang is a biggest state University in Northwest of Cambodia. NUBB goal is to educate the leaders of tomorrow in a wide range', 'website' => 'https://nubb.edu.kh/en/', 'email' => 'info@nubb.edu.kh', 'phone' => '+885 10 711 866', 'location' => 'Sangkat Preaek Preah Sdach, Battambang City, Battambang Province, (Postal code: 021402) KINGDOM OF CAMBODIA', 'province' => 'Battambang', 'user_id' => 3],
                ['name' => 'Saint Paul Institute', 'description' => 'Saint Paul Institute(SPI) is the only Catholic Educational Institution that provides highest level of education in Cambodia. Bishop Olivier has established SPI.', 'website' => 'https://spi.edu.kh/', 'email' => 'https://mail.google.com/', 'phone' => ' +885 96 53 86 889', 'location' => 'Angkorki Village, Tapam Commune, Tramkok District, Takeo Province', 'province' => 'Takeo', 'user_id' => 3],
                ['name' => 'Build Bright University', 'description' => 'Education Focus - Phnom Penh Campus offers the following degrees: Associate Degree, Bachelor Degree, Master Degree and Doctoral Degree.', 'website' => 'https://bbu.edu.kh/', 'email' => 'info@bbu.edu.kh', 'phone' => ' +885 23 987 700', 'location' => 'Phnom Penh Campus, Corner Street 1003 & 1988 (Building A) and Corner Steet 1003 & 1992 (Building B), Sangkat Phnom Penh Thmey, Khan Sensok, Phnom Penh', 'province' => 'Phnom Penh', 'user_id' => 3],
                ['name' => 'BELTEI International University', 'description' => 'BELTEI International University which is the leading university in Cambodia.', 'website' => 'https://www.beltei.edu.kh/biue/', 'email' => 'info@beltei.edu.kh', 'phone' => '+885 78 555 507', 'location' => ' #21, St 360, Boeung Kengkang 3, Boeung Kengkang Phnom Penh, 12304', 'province' => 'Phnom Penh', 'user_id' => 3]

            ];

        foreach ($universities as $university) {
            University::create($university);
        }
    }
}
