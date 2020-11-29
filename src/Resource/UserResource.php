<?php


namespace App\Resource;


use Copper\Component\Resource\CRUDTrait;
use Copper\Component\Resource\Resource;
use Copper\Component\Resource\ResourceEntry;
use Copper\Component\Resource\StatusTrait;

class UserResource extends Resource
{
    use CRUDTrait;
    use StatusTrait;

    // custom entry: GET /user/custom
    public $getCustom;

    // advanced customization for CRUDTrait -> $getList
    public function getList()
    {
        return ResourceEntry::create('list/{page}')
            // multi method support
            ->GET()->POST()
            // default path key value
            ->default('page', 1);
    }
}