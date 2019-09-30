<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

class Enemy
{
    public static function getList() : array
    {
        return
        [
            new Enemy
            (
                'Pufferbee',
                '',
                '<p>A bee bloated with excitement. Sometimes they fly round, but most o’ them time they just fritter in place nervously. Either way, don’t run into 1 or its spiky hide will hurt you.</p>'
            )
        ];
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getImage() : string
    {
        return $this->image;
    }

    public function getDesc() : string
    {
        return $this->desc;
    }

    private function __construct( string $name, string $image, string $desc )
    {
        $this->name = $name;
        $this->image = $image;
        $this->desc = $desc;
    }
}