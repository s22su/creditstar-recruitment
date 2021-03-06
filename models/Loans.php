<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Loans".
 *
 * @property integer $loanId
 * @property integer $userId
 * @property string $amount
 * @property string $interest
 * @property integer $duration
 * @property string $dateApplied
 * @property string $dateLoanEnds
 * @property integer $campaign
 * @property boolean $status
 *
 * @property Users $user
 */
class Loans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Loans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'amount', 'interest', 'duration', 'dateApplied', 'dateLoanEnds', 'campaign'], 'required'],
            [['userId', 'duration', 'campaign'], 'integer'],
            [['amount', 'interest'], 'number'],
            [['dateApplied', 'dateLoanEnds'], 'safe'],
            [['status'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loanId' => 'Loan ID',
            'userId' => 'User ID',
            'amount' => 'Amount',
            'interest' => 'Interest',
            'duration' => 'Duration',
            'dateApplied' => 'Date Applied',
            'dateLoanEnds' => 'Date Loan Ends',
            'campaign' => 'Campaign',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Loanusers::className(), ['userId' => 'userId']);
    }
}
