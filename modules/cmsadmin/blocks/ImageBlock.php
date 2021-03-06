<?php

namespace cmsadmin\blocks;

use Yii;
use admin\storage\ImageQuery;
use admin\storage\admin\storage;

class ImageBlock extends \cmsadmin\base\Block
{
    public $module = 'cmsadmin';

    public $cacheEnabled = true;
    
    public function name()
    {
        return 'Bild';
    }

    public function icon()
    {
        return 'crop';
    }

    public function config()
    {
        return [
            'vars' => [
                ['var' => 'imageId', 'label' => 'Bild Upload', 'type' => 'zaa-image-upload'],
                ['var' => 'caption', 'label' => 'Bildunterschrift', 'type' => 'zaa-text'],
            ],
        ];
    }

    public function extraVars()
    {
        return [
            'image' => ($image = (new ImageQuery())->findOne($this->getVarValue('imageId'))) ? $image->toArray() : false,
            //'image' => Yii::$app->storage->getImage($this->getVarValue('imageId')),
        ];
    }

    public function twigFrontend()
    {
        return '
            {% if extras.image is not empty %}
                <div class="image">
                    <figure>
                        <img class="img-responsive" src="{{extras.image.source}}" {% if vars.caption is not empty %}alt="{{vars.caption}}" title="{{vars.caption}}"{% endif %} border="0" />
                        {% if vars.caption is not empty %}
                            <figcaption>{{vars.caption}}</figcaption>
                        {% endif %}
                    </figure>
                </div>
            {% endif %}
        ';
    }

    public function twigAdmin()
    {
        $image = '{% if extras.image.source %}<p><img src="{{extras.image.source}}" border="0" style="max-width: 100%;" /><p>{% else %}<span class="block__empty-text">Es wurde noch kein Bild Hochgeladen.</span>{% endif %}';
        $image .= '{% if vars.caption is not empty %}{{vars.caption}}{% endif %}';

        return $image;
    }
}
