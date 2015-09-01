<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LoanUsers;

/**
 * LoanUsersSearch represents the model behind the search form about `app\models\LoanUsers`.
 */
class LoanUsersSearch extends LoanUsers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'personalCode', 'phone'], 'integer'],
            [['firstName', 'lastName', 'email', 'lang'], 'safe'],
            [['active', 'isDead'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = LoanUsers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'userId' => $this->userId,
            'personalCode' => $this->personalCode,
            'phone' => $this->phone,
            'active' => $this->active,
            'isDead' => $this->isDead,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'lang', $this->lang]);

        return $dataProvider;
    }
}
