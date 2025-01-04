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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('工号/学号');
            $table->string('name')->comment('姓名');
            $table->string('email')->nullable()->unique()->comment('邮箱地址');
            $table->string('phone')->nullable()->unique()->comment('手机号码');
            $table->string('id_card')->nullable()->comment('身份证号码');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('gender')->nullable()->comment('性别');
            $table->string('category')->nullable()->comment('分类');
            $table->string('department_id')->nullable()->comment('部门/系所 ID');
            $table->string('department')->nullable()->comment('部门/系所');
            $table->string('major_id')->nullable()->comment('专业 ID');
            $table->string('major')->nullable()->comment('专业');
            $table->string('class_id')->nullable()->comment('班级 ID');
            $table->string('class')->nullable()->comment('班级');
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
