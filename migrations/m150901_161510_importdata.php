<?php

use yii\db\Schema;
use yii\db\Migration;

class m150901_161510_importdata extends Migration
{
	public function up()
	{
		$users = file_get_contents('users.json');
		$users = json_decode($users, true);

		foreach($users as $user) {
			$this->insert('Users',[
				'userId' => $user['userId'],
				'firstName' => $user['firstName'],
				'lastName' => $user['lastName'],
				'email' => $user['email'],
				'personalCode' => $user['personalCode'],
				'phone' => $user['phone'],
				'active' => $user['active'],
				'isDead' => $user['isDead'],
				'lang' => $user['lang']
			]);
		}

		$loans = file_get_contents('loans.json');
		$loans = json_decode($loans, true);

		foreach($loans as $loan) {
			$this->insert('Loans',[
				'loanId' => $loan['loanId'],
				'userId' => $loan['userId'],
				'amount' => $loan['amount'],
				'interest' => $loan['interest'],
				'duration' => $loan['duration'],
				'dateApplied' => date('Y-m-d', $loan['dateApplied']),
				'dateLoanEnds' => date('Y-m-d', $loan['dateLoanEnds']),
				'campaign' => $loan['campaign'],
				'status' => $loan['status']
			]);
		}
	}

    public function down()
    {
        echo "m150901_161510_importdata cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
