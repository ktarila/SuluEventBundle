<?php

declare(strict_types=1);

namespace Manuxi\SuluEventBundle\Content;

use Manuxi\SuluEventBundle\Entity\Event;
use JMS\Serializer\Annotation as Serializer;
use Sulu\Component\SmartContent\ItemInterface;

class EventDataItem implements ItemInterface
{
    /**
     * @Serializer\Exclude
     */
    private $entity;

    public function __construct(Event $entity)
    {
        $this->entity = $entity;
    }

    /**
     * @Serializer\VirtualProperty
     */
    public function getId(): string
    {
        return (string) $this->entity->getId();
    }

    /**
     * @Serializer\VirtualProperty
     */
    public function getTitle(): string
    {
        return (string) $this->entity->getTitle();
    }

    /**
     * @Serializer\VirtualProperty
     */
    public function getImage(): ?string
    {
        return null;
    }

    public function getResource(): Event
    {
        return $this->entity;
    }
}
