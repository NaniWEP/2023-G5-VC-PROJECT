<?php

namespace Database\Seeders;

use App\Models\UniversityPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversityPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts =
            [
                ['title' => 'Wep Programming Opportunity', 'description' => 'Programming languages have been classified into several programming language generations.', 'date' => '2023-09-01', 'variable_student' => 50, 'status' => 1, 'image' => 'https://oneandonlydesign.in/wp-content/uploads/2023/05/Challenges-and-Opportunities-for-Web-Development-in-Digital-Transformation.jpg', 'major_id' => 1, 'user_id' => 3],
                ['title' => 'Systems Network Administrator', 'description' => 'The System Network Administrator role is responsible for designing and installing well-functioning computer networks and systems.', 'date' => '2023-09-01', 'variable_student' => 25, 'status' => 1, 'image' => 'https://rms.koenig-solutions.com/Sync_data/CCE_Logo/2889-administratornetworking.jpgL.jpg', 'major_id' => 2, 'user_id' => 3],
                ['title' => 'Marketing', 'description' => 'Generational marketing is a strategy for understanding how a certain age group behaves as consumers.', 'date' => '2023-09-10', 'variable_student' => 30, 'status' => 1, 'image' => 'https://www.lucidadvertising.com/wp-content/uploads/2020/06/marketing.jpg', 'major_id' => 3, 'user_id' => 3],
                ['title' => 'Banking and Finance', 'description' => 'Unlike previous generations, Gen Z is more eager to embrace industrial change.', 'date' => '2023-08-13', 'variable_student' => 40, 'status' => 1, 'image' => 'https://www.loyensloeff.com/contentassets/7ca5076ac555499c84ceedf4553233de/money-2.jpg?width=580&height=387','major_id' => 4, 'user_id' => 3],
                ['title' => 'World History of Tourism', 'description' => 'The 19th century saw the creation of the first travel agencies.', 'date' => '2023-08-10', 'variable_student' => 28, 'status' => 1, 'image' => 'https://www.tandfonline.com/doi/cover-img/10.1080/rjth20.v010.i03', 'major_id' => 5, 'user_id' => 3],
                ['title' => 'Electronics and Electricity', 'description' => 'Electricity generation is the process of generating electric power from sources of primary energy.', 'date' => '2023-08-30', 'variable_student' => 68, 'status' => 1,'image' => 'https://www.galaxyeduworld.com/storage/blogs/1602856090_5f89a49a4edf2_750_351.jpg', 'major_id' => 6, 'user_id' => 3],
                ['title' => 'Engineering and Architecture', 'description' => 'Technological innovation in architecture and engineering education an investigation on three generations from Turkey', 'date' => '2023-07-30', 'variable_student' => 58, 'status' => 1, 'image' => 'https://www.cfostrategiesllc.com/wp-content/uploads/2020/08/architecture-and-engineering.jpg', 'major_id' => 7, 'user_id' => 3],
                ['title' => 'Accounting', 'description' => 'Generational accounting is a method of measuring the fiscal burdens facing current and future generations', 'date' => '2023-10-30', 'variable_student' => 70, 'status' => 1, 'image' => 'https://cdn.corporatefinanceinstitute.com/assets/accounting.jpeg', 'major_id' => 8, 'user_id' => 4],
                ['title' => 'Administration', 'description' => 'the people in an organization who manage its business and operations.', 'date' => '2023-10-20', 'variable_student' => 70, 'status' => 1, 'image' => 'https://research-methodology.net/wp-content/uploads/2014/11/Role-of-Administration-in-Management.png', 'major_id' => 9, 'user_id' => 4],
                ['title' => 'Mathematics', 'description' => 'The study of mathematics as a "demonstrative discipline" began in the 6th century BC with the Pythagoreans.', 'date' => '2023-10-20', 'variable_student' => 70, 'status' => 1, 'image' => 'https://static.scientificamerican.com/blogs/cache/file/15E43A6F-3941-471A-BF4A81AECDC8C8AA_source.jpg?w=590&h=800&19535223-FF51-4AE3-A05064AFC6E375F5', 'major_id' => 10, 'user_id' => 4],
                ['title' => 'International Relations', 'description' => 'International relations (IR) are the interactions among sovereign states.', 'date' => '2023-11-20', 'variable_student' => 80, 'status' => 1, 'image' => 'https://www.master-and-more.eu/fileadmin/user_upload/InternationalRelations.jpg', 'major_id' => 11, 'user_id' => 4],
                ['title' => 'History', 'description' => 'The concept of a generation can be used to locate particular birth cohorts in specific historical and cultural circumstances.', 'date' => '2023-11-20', 'variable_student' => 60, 'status' => 1, 'image' => 'https://media.istockphoto.com/id/1092170968/vector/open-book-with-history-doodles-and-lettering.jpg?s=612x612&w=0&k=20&c=SvXn0O25eHC8ARjwlcn83kahxjMGl2ti_DDFGozBKqg=', 'major_id' => 12, 'user_id' => 4],
                ['title' => 'Computer Software Engineering', 'description' => 'Software Engineering has grown and developed from the 1960 till now a lot as our knowledge and understanding of software.', 'date' => '2023-11-20', 'variable_student' => 70, 'status' => 1, 'image' => 'https://images.ctfassets.net/szez98lehkfm/5RPbDihFheFvN1RWhyRfbY/fb286bb568a3d5c093419dee333113e8/MyIC_Article_114191?w=730&h=410&fm=jpg&fit=fill', 'major_id' => 13, 'user_id' => 4],
                ['title' => 'Journalism', 'description' => 'Journalism is the production and distribution of reports on the interaction of events, facts, ideas, and people that are the "news of the day.', 'date' => '2023-12-20', 'variable_student' => 80, 'status' => 1, 'image' => 'https://www.brainwareuniversity.ac.in/blog/wp-content/uploads/2022/01/Journalism.jpg', 'major_id' => 14, 'user_id' => 3],
                ['title' => 'Civil Engineering', 'description' => 'Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment.', 'date' => '2023-10-20', 'variable_student' => 80, 'status' => 1, 'image' => 'https://www.constructionplacements.com/wp-content/uploads/2022/10/Civil-Engineering-Basic-Knowledge-Everything-you-need-to-know-about.jpg.webp', 'major_id' => 15, 'user_id' => 3],
            ];

        foreach ($posts as $post) {
            UniversityPost::create($post);
        }
    }
}
