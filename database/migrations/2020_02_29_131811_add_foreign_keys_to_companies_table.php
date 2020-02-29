<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			$table->foreign('account_id')->references('id')->on('accounts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('currency_id', 'companies_ibfk_1')->references('id')->on('currencies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('country_id', 'companies_ibfk_2')->references('id')->on('countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			$table->dropForeign('companies_account_id_foreign');
			$table->dropForeign('companies_ibfk_1');
			$table->dropForeign('companies_ibfk_2');
			$table->dropForeign('companies_user_id_foreign');
		});
	}

}