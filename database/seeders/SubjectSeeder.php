<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # 指定したデータを挿入
        $subjects = [
            ['subject_name' => '英語'],
            ['subject_name' => '国語'],
            ['subject_name' => '数学'],
            ['subject_name' => '理科'],
            ['subject_name' => '社会'],
        ];

        # データを一括で挿入
        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}