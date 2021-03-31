<?php

namespace Manuxi\SuluEventBundle\Entity\Interfaces;

use Doctrine\Common\Collections\Collection;
use Sulu\Bundle\CategoryBundle\Entity\CategoryInterface;
use Sulu\Bundle\MediaBundle\Entity\MediaInterface;
use Sulu\Bundle\TagBundle\Tag\TagInterface;

interface ExcerptTranslatableInterface
{
    public function getLocale(): string;
    public function setLocale(string $locale);
    public function getTitle(): ?string;
    public function setTitle(?string $title);
    public function getMore(): ?string;
    public function setMore(?string $more);
    public function getDescription(): ?string;
    public function setDescription(?string $description);
    public function getCategories(): ?Collection;
    public function addCategory(CategoryInterface $category);
    public function removeCategories();
    public function getTags(): ?array;
    public function addTag(TagInterface $tag);
    public function removeTags();
    public function getIcons(): ?array;
    public function addIcon(MediaInterface $icon);
    public function removeIcons();
    public function getImages(): ?array;
    public function addImage(MediaInterface $image);
    public function removeImages();
}
