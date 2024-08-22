<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # 指定したデータを挿入
        $schools = [
            ['school_name' => '愛知大学'],
            ['school_name' => '名古屋国際工科専門職大学'],
            ['school_name' => '信州大学'],
            ['school_name' => '東京大学'],
            ['school_name' => '岐阜大学'],
        ];

        # データを一括で挿入
        foreach ($schools as $school) {
            School::create($school);
        }
    }
}
