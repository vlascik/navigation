<?php

declare(strict_types = 1);

namespace Everlution\Navigation;

/**
 * Interface Navigation.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
class RootNavigationItem implements Item
{
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return 'navigation root';
    }

    /** @var Item[] */
    private $children;

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param Item $item
     * @return Item
     */
    public function addChild(Item $item)
    {
        $this->children[] = $item;

        return $this;
    }

    /**
     * @param Item $parent
     * @return Item
     * @throws \Exception
     */
    public function setParent(Item $parent)
    {
        throw new \Exception(sprintf('%s cannot have parent', self::class));
    }

    /**
     * @return Item|null
     */
    public function getParent()
    {
        return null;
    }
}
