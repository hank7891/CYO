<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_account', function (Blueprint $table) {
            $table->increments('id')->comment = '序號代碼';
            $table->integer('employee_id')->default(0)->comment = '員工代碼';
            $table->string('account', 20)->comment = '登入帳號 (當使用狀態不為 x 時，本欄位不可重覆)';
            $table->string('password')->nullable()->comment = '登入密碼';
            $table->string('name', 50)->comment = '姓名';
            $table->string('email', 100)->comment = '電子郵件';
            $table->integer('level')
                ->unsigned()->comment = '身份權限 (1:系統管理員, 2:網站管理員, 3:資料維護人員)';
            $table->string('img_src')->default('')->comment = '頭像檔名';
            $table->timestamp('started_at')->useCurrent()->comment = '帳號期限開始日期';
            $table->dateTime('ended_at')->comment = '帳號期限結束日期';
            $table->char('status', 1)->default('n')->comment = '使用狀態 (y:開放, n:關閉)';
            $table->integer('login_times')->default(0)-> comment = '登入次數';
            $table->ipAddress('last_ip')->default('')-> comment = '最近登入IP';
            $table->dateTime('last_datetime')->nullable()-> comment = '最近登入日期';
            $table->unsignedInteger('created_by')->nullable()->comment = '資料建立人員';
            $table->unsignedInteger('updated_by')->nullable()->comment = '資料更新人員';
            $table->string('two_factor_token')->nullable()->comment = '雙因認證 token';
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syste_account');
    }
}
