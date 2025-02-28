<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IndustryType;

class IndustryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industryTypes = ['Manufacturing', 'Technology', 'Healthcare', 'Financial Services', 'Energy', 'Retail', 'Telecommunications', 'Agriculture', 'Transportation and Logistics', 'Entertainment and Media', 'Construction', 'Automotive', 'Tourism and Hospitality', 'Education', 'Real Estate', 'Pharmaceutical', 'Consumer Goods', 'Environmental', 'Defense and Aerospace', 'Legal and Professional Services'];

        foreach ($industryTypes as $type) {
            $industryType = new IndustryType();
            $industryType->name = $type;
            $industryType->save();
        }
    }
}