<?php

namespace Kunstmaan\MediaBundle\Tests\Helper\RemoteAudio;

use Kunstmaan\MediaBundle\Entity\Media;
use Kunstmaan\MediaBundle\Helper\RemoteAudio\RemoteAudioHandler;
use Kunstmaan\MediaBundle\Helper\RemoteAudio\RemoteAudioHelper;
use PHPUnit\Framework\TestCase;

class RemoteAudioHelperTest extends TestCase
{
    /**
     * @var Media
     */
    protected $media;

    /**
     * @var RemoteAudioHelper
     */
    protected $object;

    protected function setUp(): void
    {
        $this->media = new Media();
        $this->object = new RemoteAudioHelper($this->media);
    }

    public function testGetMedia()
    {
        $this->assertEquals(RemoteAudioHandler::CONTENT_TYPE, $this->object->getMedia()->getContentType());
    }
}
