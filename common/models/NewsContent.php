<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news_content".
 *
 * @property int $id
 * @property string $title
 * @property string|null $banner
 * @property string|null $description
 * @property string $content
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 * @property int|null $news_type_id
 *
 * @property NewsType $newsType
 */
class NewsContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'news_type_id'], 'required'],
            [['banner', 'content'], 'string'],
            [['created_by', 'created_at', 'updated_by', 'updated_at', 'news_type_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['news_type_id'], 'exist', 'skipOnError' => false, 'targetClass' => NewsType::class, 'targetAttribute' => ['news_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'title' => 'หัวข้อ',
            'banner' => 'แบนเนอร์',
            'content' => 'เนื้อหา',
            'created_by' => 'สร้างโดย',
            'created_at' => 'สร้างเมื่อ',
            'updated_by' => 'แก้ไขล่าสุดโดย',
            'updated_at' => 'แก้ไขล่าสุดเมื่อ',
            'news_type_id' => 'รหัสหมวดหมู่ข่าว',
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
     * Gets query for [[NewsType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsType()
    {
        return $this->hasOne(NewsType::class, ['id' => 'news_type_id']);
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

    
