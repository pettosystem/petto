<?php
namespace app\models;
use Yii;
use yii\base\model;
class FormSearch extends model{
    public $q;
    //vaida que solo puedas buscar numeros o letras
    public function rules()
    {
        return [
            ["q", "match", "pattern" => "/^[0-9a-záéíóúñ\s]+$/i", "message" => "Sólo se aceptan letras y números"]
        ];
    }
    public function attributeLabels()
    {
        return [
            'q' => "Buscar:",
        ];
    }
}
?>
