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
        Schema::create('admins', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('工号/学号');
            $table->string('name')->comment('姓名');
            $table->string('email')->nullable()->unique()->comment('邮箱地址');
            $table->string('phone')->nullable()->unique()->comment('手机号码');
            $table->string('id_card')->nullable()->comment('身份证号码');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('gender')->nullable()->comment('性别');
            $table->string('department_id')->nullable()->comment('部门/系所 ID');
            $table->string('department')->nullable()->comment('部门/系所');
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
