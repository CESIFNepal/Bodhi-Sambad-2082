<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Speaker::insert([
            ['name' => 'Dr. Maya Shrestha', 'role' => 'Panel Chair', 'organization' => 'Professor of International Relations, Tribhuvan University', 'image_url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=900&q=80'],
            ['name' => 'Mr. Li Wei', 'role' => 'Keynote Speaker', 'organization' => 'Senior Research Fellow, Asia Policy Institute', 'image_url' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'],
            ['name' => 'Dr. Ayesha Patel', 'role' => 'Panelist', 'organization' => 'Economist, Regional Development Council', 'image_url' => 'https://images.unsplash.com/photo-1525097487452-6278ff080c31?auto=format&fit=crop&w=900&q=80'],
            ['name' => 'Mr. Rajiv Thapa', 'role' => 'Panelist', 'organization' => 'Senior Analyst, Global Affairs Forum', 'image_url' => 'https://images.unsplash.com/photo-1524503033411-c9566986fc8f?auto=format&fit=crop&w=900&q=80']
        ]);

        \App\Models\Schedule::insert([
            ['day' => 'Day 1', 'time_slot' => '09:00 – 10:00', 'title' => 'Opening & welcome', 'description' => 'Opening ceremony, keynote remarks, and the first panel discussion on connectivity and infrastructure.'],
            ['day' => 'Day 1', 'time_slot' => '10:15 – 11:30', 'title' => 'Keynote: China’s vision in South Asia', 'description' => 'Addressing China\'s multifaceted engagement in South Asia.'],
            ['day' => 'Day 1', 'time_slot' => '12:30 – 14:00', 'title' => 'Panel: Belt and Road implications', 'description' => 'Discussion regarding debt, transparency, and regional sovereignty.'],
            ['day' => 'Day 2', 'time_slot' => '09:00 – 10:30', 'title' => 'Track A: Trade & investment', 'description' => 'Discussion tracks on economic partnerships, trade policy, and regional cooperation.'],
            ['day' => 'Day 2', 'time_slot' => '11:00 – 12:30', 'title' => 'Track B: Security & diplomacy', 'description' => 'Shifting security landscape and soft power influences.'],
            ['day' => 'Day 2', 'time_slot' => '14:00 – 15:30', 'title' => 'Roundtables & breakout sessions', 'description' => 'Group discussions with international experts.'],
            ['day' => 'Day 3', 'time_slot' => '09:30 – 11:00', 'title' => 'Plenary: Regional frameworks', 'description' => 'Closing sessions, executive summary, and next steps for collective action.'],
            ['day' => 'Day 3', 'time_slot' => '11:30 – 13:00', 'title' => 'Policy recommendations workshop', 'description' => 'Information warfare, disinformation campaigns, and democratic resilience.'],
            ['day' => 'Day 3', 'time_slot' => '14:00 – 15:30', 'title' => 'Closing remarks & networking', 'description' => 'Farewell and next steps.']
        ]);

        \App\Models\Sponsor::insert([
            ['name' => 'Sponsor 1', 'logo_url' => 'https://via.placeholder.com/180x60?text=Sponsor+1'],
            ['name' => 'Sponsor 2', 'logo_url' => 'https://via.placeholder.com/180x60?text=Sponsor+2'],
            ['name' => 'Sponsor 3', 'logo_url' => 'https://via.placeholder.com/180x60?text=Sponsor+3'],
            ['name' => 'Sponsor 4', 'logo_url' => 'https://via.placeholder.com/180x60?text=Sponsor+4'],
            ['name' => 'Sponsor 5', 'logo_url' => 'https://via.placeholder.com/180x60?text=Sponsor+5'],
            ['name' => 'Sponsor 6', 'logo_url' => 'https://via.placeholder.com/180x60?text=Sponsor+6'],
        ]);
    }
}
