<?php


namespace app\models;


use yii\base\Model;
use yii\web\UploadedFile;

class FormUpload extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
            [
                ['file'],
                'file',
                'skipOnEmpty' => false,
                'maxSize' => 1024 * 1024 * 1,
                'tooBig' => 'El tamaño máximo permitido es 1MB',
                'minSize' => 10,
                'tooSmall' => 'El tamaño mínimo permitido son 10 BYTES',
                'extensions' => 'pdf, txt, doc',
                'wrongExtension' => 'El archivo {file} no contiene una extensión permitida {extensions}',
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'file' => 'Seleccionar archivos:',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->file->saveAs('files/' . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }
}