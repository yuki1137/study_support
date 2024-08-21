<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); #ユーザID
            $table->string('student_name'); #ユーザ名
            $table->string('password'); #パスワード
            $table->foreignId('school_id')->constrained(); #大学ID取得
            $table->timestamps(); #登録日と更新日
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
