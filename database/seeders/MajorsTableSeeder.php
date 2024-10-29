<?php

namespace Database\Seeders;

use App\Models\University;
use App\Models\Major;
use App\Models\MajorTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $university = University::where('id', 1)->first();

        $major1 = Major::create([
            'duration_local' => 2,
            'duration_abroad' => 2,
        ]);

        MajorTranslation::create([
            'major_id' => $major1->id,
            'locale' => 'en',
            'name' => 'Communication Engineering',
            'summary' => 'A 4-year bachelor degree in telecommunications',
            'detailed_description' => 'This is a detailed description of the major',
        ]);

        MajorTranslation::create([
            'major_id' => $major1->id,
            'locale' => 'cn',
            'name' => '通讯工程',
            'summary' => '四年制电讯学士学位',
            'detailed_description' => '这是对专业的详细描述',
        ]);

        $university->majors()->attach($major1->id);

        $major2 = Major::create([
            'duration_local' => 2,
            'duration_abroad' => 2,
        ]);

        MajorTranslation::create([
            'major_id' => $major2->id,
            'locale' => 'en',
            'name' => 'Music',
            'summary' => 'A 4-year bachelor degree in music',
            'detailed_description' => 'This is a detailed description of the major',
        ]);

        MajorTranslation::create([
            'major_id' => $major2->id,
            'locale' => 'cn',
            'name' => '音乐',
            'summary' => '四年制音乐学士学位',
            'detailed_description' => '这是对专业的详细描述',
        ]);

        $university->majors()->attach($major2->id);
    }
}
