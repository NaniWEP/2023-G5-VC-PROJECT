<?php

namespace Database\Seeders;

use App\Models\WorkshopPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkshopPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $workshopPosts =
        [
            ['name' => 'PUBG tournament PUBG Asia Super Cup 2023 Winter', 'venue' => 'Olapic', 'description' => 'This tournament will take place in 14 regions and has expanded its reach to more countries in Southeast Asia through the PMPL SEA Wild Card,', 'date' => '2023-12-01', 'time' => '01:00 PM to 03:00 PM', 'location' => 'Business Development Center (BDC) Building, 17th Floor, OCIC Blvd, Sangkat Chroy Changva, Khan Chroy Changvar, Phnom Penh','organizer' => 'PUBG: Battlegrounds', 'contact' => 'press@escharts.com', 'variable_ticket' => 2000, 'status' => true, 'user_id' => 3],
            ['name' => 'Development of Digital Libraries', 'venue' => 'CKS Conference Hall', 'description' => 'In order to contribute and support Cambodia digital library initiatives, the CKS library will host a series of annual library workshops centering on aspects of digital library development.', 'date' => '2023-12-01', 'time' => '10:15 AM to 12:00 PM', 'location' => 'Business Development Center (BDC) Building, 17th Floor, OCIC Blvd, Sangkat Chroy Changva, Khan Chroy Changvar, Phnom Penh, Cambodia', 'organizer' => 'Dr.Iryna Kuchma', 'contact' => 'press@escharts.com', 'variable_ticket' => 1000, 'status' => true, 'user_id' => 4],
            ['name' => 'Business Leadership. ', 'venue' => 'CKS Conference Hall', 'description' => 'Business leadership refers to how individuals make decisions, set goals and provide direction in a professional environment.', 'date' => '2023-12-01', 'time' => '2:00 PM to 5:00 PM', 'location' => 'The University of Cambodia Northbridge RoadP.O. Box 917Sangkat Toek Thla, Khan Sen SokPhnom Penh, Kingdom of Cambodia 12000', 'organizer' => 'Kao Kim Hourn', 'contact' => 'admissions@uc.edu.kh', 'variable_ticket' => 4000, 'status' => true, 'user_id' => 4],
            ['name' => 'Tip for interview by effectively', 'venue' => 'Via Zoom', 'description' => 'Practice and preparation may help you have a successful interview, but it is best to act like yourself when you meet with your interviewer..', 'date' => '2023-12-01', 'time' => '5:00 PM to 6:00 PM', 'location' => 'The University of Cambodia Northbridge RoadP.O. Box 917Sangkat Toek Thla, Khan Sen SokPhnom Penh, Kingdom of Cambodia 12000', 'organizer' => 'CDL', 'contact' => 'chhaylon2017@gmail.com', 'variable_ticket' => 4000, 'status' => true, 'user_id' => 3],
            ['name' => 'Cambodia digital economy and business web portal. ', 'venue' => 'Hyatt Regency Phnom Penh Hotel', 'description' => 'In order to contribute and support Cambodia digital library initiatives, the CKS library will host a series of annual library workshops centering on aspects.', 'date' => '2023-12-01', 'time' => '7:00 AM to 8:00 AM', 'location' => 'Business Development Center (BDC) Building, 17th Floor, OCIC Blvd, Sangkat Chroy Changva, Khan Chroy Changvar, Phnom Penh, Cambodia.', 'organizer' => 'Dr. Kong Marry', 'contact' => 'digitaleconomy@mef.gov.kh', 'variable_ticket' => 3000, 'status' => true, 'user_id' => 3],
            ['name' => 'Benefits of becoming a digital host', 'venue' => 'National university of management', 'description' => 'Digital workshops are excellent opportunites for teams to collaborate and exchange knowledge', 'date' => '2023-12-01', 'time' => '9:00 AM to 12:00 PM', 'location' => 'St.96 Christopher Howes Phnom Penh BS16, AP18.', 'organizer' => 'Eschool-Cambodia', 'contact' => 'Telegram : https://t.me/+nety6CspKhVlZTBl', 'variable_ticket' => 1000, 'status' => true, 'user_id' => 3],
            ['name' => 'Concept In Business Education', 'venue' => 'National university of management', 'description' => 'Digital workshops are excellent opportunites for teams to collaborate and exchange knowledge', 'date' => '2023-12-01', 'time' => '9:00 AM to 12:00 PM', 'location' => 'St.96 Christopher Howes Phnom Penh BS16, AP18.', 'organizer' => 'Eschool-Cambodia', 'contact' => 'Telegram : https://t.me/+nety6CspKhVlZTBl', 'variable_ticket' => 2000, 'status' => true, 'user_id' => 3],
            ['name' => 'Motivate speaking activities in the English classroom', 'venue' => 'Via Zoom', 'description' => ' These activities are all designed to motivate lower level learners to speak in pairs or small groups.', 'date' => '2023-12-01', 'time' => '9:00 AM to 12:00 PM', 'location' => 'Register: https://forms.gle/3QTLdaVYEcVbqxmC9 ', 'organizer' => 'CDL', 'contact' => 'cdl.cambodia@gmail.com', 'variable_ticket' => 500, 'status' => true, 'user_id' => 4],
            ['name' => 'Entrepreneur or Intraprenear?', 'venue' => 'The olympia mall(Ground floor)', 'description' => 'An entrepreneur takes a new business idea and starts a company to bring that idea to market.', 'date' => '2023-12-01', 'time' => '8:30 AM to 11:30 AM', 'location' => 'Samdech Monireth Boulevard (217), Phnom Penh, near the NEANG Konghing traffic light.', 'organizer' => 'Eschool-Cambodia', 'contact' => 'Telegram : https://t.me/+nety6CspKhVlZTBl', 'variable_ticket' => 500, 'status' => true, 'user_id' => 4],
            ['name' => 'Procedures for creating KPIs for sales staff', 'venue' => 'Olympia Hotel', 'description' => 'KPI stands for key performance indicator. KPI examples in sales can come in many different forms because they measure specific activities. Sales.', 'date' => '2023-12-01', 'time' => '8:30 AM to 11:30 AM', 'location' => 'SJW2H+GCH, Phnom Penh', 'organizer' => 'KAMKPI', 'contact' => 'kamkpi.office@gmail.com', 'variable_ticket' => 500, 'status' => true, 'user_id' => 3],
        ];

        foreach($workshopPosts as $post)
        {
            WorkshopPost::create($post);
        }
    }
}
