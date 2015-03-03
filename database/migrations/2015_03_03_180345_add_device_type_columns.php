<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeviceTypeColumns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('installations', function(Blueprint $table)
		{
			$table->string('device_type',10)->default('ios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('installations', function(Blueprint $table)
		{
			$table->dropColumn('device_type');
		});
	}

}
