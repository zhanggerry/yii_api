<?php

namespace app\models;

use yii\db\ActiveRecord;

class Device extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%device}}';
    }
}
