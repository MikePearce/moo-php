<?php
namespace MooPhp\MooInterface\Data;

use Weasel\JsonMarshaller\JsonMapper;
use Weasel\JsonMarshaller\Config\AnnotationDriver;

class ImageBasketItemTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \MooPhp\MooInterface\Data\ImageBasketItem
     */
    public function testMarshallImageBasketItem()
    {
        $om = new JsonMapper(new AnnotationDriver());

        $imageBasketItem = new ImageBasketItem();
        $imageBasketItem->setCacheId("asdasdasdasd");
        $imageBasketItem->setCopyrightOwner("Dave McCheese");
        $imageBasketItem->setCroppable(true);
        $imageBasketItem->setRemovable(true);
        $imageBasketItem->setShouldEnhance(true);
        $imageBasketItem->setType("foo");
        $imageBasketItem->setResourceUri("foobarbaz");
        $imageBasketItem->setImageItems(array(new ImageBasketItemImage("foobar")));

        $json = $om->writeString($imageBasketItem);

        $this->assertEquals($imageBasketItem, $om->readString($json, '\MooPhp\MooInterface\Data\ImageBasketItem'));

    }

}
