<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('tbl_claim', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('claimNo')->unsigned()->index()->nullable();    
            $table->string('claimName',150);
            $table->string('caseFile',100);

            $table->date('da');

            $table->string('insurance');
            $table->boolean('insured')->default(false);
            $table->string('coverageType');

            $table->string('location');
            $table->date('transDate');
            $table->string('transTime',30);

            $table->string('examType',100);
            $table->string('Provider');

            $table->string('avatar');
            $table->string('password',50);
            $table->string('remember_token',50);

        

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
         Schema::dropIfExists('tbl_claim');
    }
}
