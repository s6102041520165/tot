<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $thumbnail
 * @property string $name
 * @property string $content
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thumbnail', 'name', 'content'], 'required'],
            [['content'], 'string'],
            [['created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['thumbnail', 'name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'thumbnail' => 'รูปภาพ',
            'name' => 'หัวเรื่อง',
            'content' => 'เนื้อหา',
            'created_by' => 'เขียนโดย',
            'updated_by' => 'แก้ไขโดย',
            'created_at' => 'เขียนเมื่อ',
            'updated_at' => 'แก้ไขเมื่อ',
        ];
    }

    public function behaviors()
    {
        return [
            BlameableBehavior::class,
            TimestampBehavior::class
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
}
