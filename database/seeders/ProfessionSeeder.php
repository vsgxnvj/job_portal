<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professions = [
            // Technology & IT
            'Software Engineer',
            'Data Scientist',
            'Cybersecurity Analyst',
            'Web Developer',
            'UI/UX Designer',
            'IT Support Specialist',
            'Network Engineer',
            'Cloud Engineer',
            'AI Engineer',
            'Database Administrator',

            // Healthcare & Medicine
            'Doctor',
            'Surgeon',
            'Nurse',
            'Pharmacist',
            'Dentist',
            'Physical Therapist',
            'Radiologist',
            'Psychiatrist',
            'Paramedic',
            'Medical Researcher',

            // Engineering & Construction
            'Civil Engineer',
            'Mechanical Engineer',
            'Electrical Engineer',
            'Architect',
            'Structural Engineer',
            'Environmental Engineer',
            'Surveyor',
            'Construction Manager',
            'HVAC Technician',
            'Industrial Engineer',

            // Education & Academia
            'Teacher',
            'Professor',
            'Tutor',
            'School Principal',
            'Special Education Teacher',
            'Researcher',
            'Librarian',
            'Educational Consultant',
            'Academic Advisor',

            // Finance & Business
            'Accountant',
            'Financial Analyst',
            'Auditor',
            'Investment Banker',
            'Business Consultant',
            'Tax Consultant',
            'Risk Analyst',
            'Economist',
            'Actuary',
            'Venture Capitalist',

            // Legal & Law Enforcement
            'Lawyer',
            'Judge',
            'Paralegal',
            'Legal Consultant',
            'Police Officer',
            'Detective',
            'Correctional Officer',
            'Private Investigator',
            'Forensic Scientist',

            // Creative & Media
            'Graphic Designer',
            'Photographer',
            'Journalist',
            'Copywriter',
            'Video Editor',
            'Animator',
            'Interior Designer',
            'Fashion Designer',
            'Musician',
            'Actor',

            // Hospitality & Tourism
            'Hotel Manager',
            'Chef',
            'Bartender',
            'Travel Agent',
            'Tour Guide',
            'Event Planner',
            'Housekeeping Supervisor',
            'Flight Attendant',

            // Manufacturing & Trades
            'Welder',
            'Plumber',
            'Electrician',
            'Carpenter',
            'Machinist',
            'Auto Mechanic',
            'Factory Worker',
            'Blacksmith',

            // Agriculture & Environment
            'Farmer',
            'Agricultural Engineer',
            'Veterinarian',
            'Environmental Scientist',
            'Wildlife Biologist',
            'Horticulturist',
            'Fisherman',

            // Transport & Logistics
            'Truck Driver',
            'Pilot',
            'Ship Captain',
            'Train Operator',
            'Logistics Manager',
            'Warehouse Supervisor',
            'Delivery Driver',
        ];

        foreach ($professions as $profession) {
            $prof = new Profession();
            $prof->name = $profession;
            $prof->save();
        }
    }
}
