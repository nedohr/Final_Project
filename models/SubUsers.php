<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_users".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $gender
 * @property string $email
 * @property string $password
 * @property string $address
 */
class SubUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'gender', 'email', 'password', 'address'], 'required'],
            [['firstName', 'lastName'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 1],
            [['email', 'password'], 'string', 'max' => 150],
            [['address'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'gender' => 'Gender',
            'email' => 'Email',
            'password' => 'Password',
            'address' => 'Address',
        ];
    }
    
    /* public function mailer($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }*/
}
