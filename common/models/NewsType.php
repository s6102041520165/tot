<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news_type".
 *
 * @property int $id
 * @property string $name_type
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property NewsContent[] $newsContents
 */
class NewsType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_type'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by', 'mode'], 'integer'],
            [['name_type'], 'string', 'max' => 255],
            [['name_type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'name_type' => 'ชื่อหมวดหมู่',
            'created_at' => 'สร้างเมื่อ',
            'updated_at' => 'แก้ไขล่าสุดเมื่อ',
            'created_by' => 'สร้างโดย',
            'updated_by' => 'แก้ไขล่าสุดโดย',
            'mode' => 'โหมด',
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
     * Gets query for [[NewsContents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsContents()
    {
        return $this->hasMany(NewsContent::class, ['news_type_id' => 'id']);
    }

    public function getCreator()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    public function getEditor()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
    
}
