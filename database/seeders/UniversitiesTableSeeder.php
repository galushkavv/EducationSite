<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\University;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Найдем страны по их названиям
        $rus = Country::where('name', 'Russia')->first();
        $bel = Country::where('name', 'Belarus')->first();

        // Добавление университетов России
        University::create([
            'name' => '俄罗斯人民友谊大学',
            'summary' => '俄罗斯人民友谊大学（莫斯科）创办于1960年，坐落于莫斯科州,Москва，地理位置优越，环境优美。该校开设本科层次的学位教育，在校学生人数23000人,作为被中国教育部认可的大学',
            'logo_path' => 'logos/rudn.jpg',
            'article' => '学校介绍SCHOOL INTRODUCTION

俄罗斯人民友谊大学（Российский университет дружбы народов），原名为卢蒙巴(Lumumba)人民友谊大学，当时被命名为国立帕特里斯·卢蒙巴人民友谊大学是第三世界国家被压迫人民独立和解放斗争事业的象征.总共有来自160多个国家的，超过50000名外国留学生在这所把传统的高等教育和对青年的爱国主义精神教育充分结合的大学里接受并完成了高等教育.

俄罗斯人民友谊大学是俄罗斯的“长春藤”大学，排名仅在国立莫斯科大学和圣彼得堡大学之后，是俄罗斯综合排名第三大的大学，师资水平排第二，同时俄罗斯人民友谊大学与莫斯科国立大学以及圣彼得堡国立大学是全俄仅有的三所可以自主设立及自主控制教学计划的高校。每年都有来自160多个国家和地区的的公派留学生、自费留学生和校际交换生报名入读。大学在世界范围内享有盛誉。大学是一个重要的科研中心，超过500人拥有自己的发明和创新。',
            'country_id' => $rus->id,
        ]);

        University::create([
            'name' => '莫斯科国立柴可夫斯基音乐学院',
            'summary' => '莫斯科国立柴可夫斯基音乐学院（Московская государственная консерватория имени П.И.Чайковского ），中文简称 “柴院” ，创建于 1866 年 9 月 1 日',
            'logo_path' => 'logos/msk_cons.jpg',
            'article' => 'Article about Sorbonne University.',
            'country_id' => $rus->id,
        ]);

        University::create([
            'name' => '俄罗斯格涅辛音乐学院',
            'summary' => '以格涅辛命名的俄罗斯音乐学院是莫斯科联邦音乐教育机构，位于莫斯科。该学院是俄罗斯音乐艺术教育领域的两所基础高等教育机构之一，另外一所是莫斯科音乐学院。',
            'logo_path' => 'logos/20201202141045.jpg',
            'article' => 'Article about ENS.',
            'country_id' => $rus->id,
        ]);

        // Добавление университетов Беларуси
        University::create([
            'name' => '白俄罗斯国立大学',
            'summary' => '白俄罗斯国立大学 正式建于1921年10月，坐落于白俄罗斯首都明斯克，白俄罗斯***公立研究型大学。前苏联四大***国立大学之一，独联体国家***高校之一。',
            'logo_path' => 'logos/20201202143629.jpg',
            'article' => 'Article about Harvard University.',
            'country_id' => $bel->id,
        ]);

        University::create([
            'name' => '白俄罗斯国立师范大学',
            'summary' => '白俄罗斯国立师范大学成立于1914年6月，是白俄罗斯***的科学、文化及师范教育中心，是白俄罗斯教育部和财政部重点建设和拨款单位的百年高校。2007年白俄罗斯国立师范大学成为欧洲大学组织会员，是白俄罗斯师范教育类高校的***学府，担负着白俄罗斯共和国教师进修和再培训的重要使命。',
            'logo_path' => 'logos/20201202143903.jpg',
            'article' => 'Article about Stanford University.',
            'country_id' => $bel->id,
        ]);

        University::create([
            'name' => '白俄罗斯国立信息技术与无线电电子大学',
            'summary' => '白俄罗斯国立信息技术与无线电电子大学1964始建于明斯克，原为明斯克无线电工程学院，1993年正式改名为白俄罗斯国立信息技术与无线电电子大学',
            'logo_path' => 'logos/20201202143947.jpg',
            'article' => 'Article about MIT.',
            'country_id' => $bel->id,
        ]);
    }
}
