<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Link;

class LinkTransformer extends TransformerAbstract
{
    public function transform(Link $link){
        return [
            'id' => $link->id,
            'title' => $link->title,
            'link' => $link->link,
        ];
    }
}