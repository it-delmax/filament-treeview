<?php

namespace ItDelmax\FilamentTreeView\Tree\Concerns;

use ItDelmax\FilamentTreeView\Contracts\HasTree;

trait BelongsToLivewire
{
    protected HasTree $livewire;

    public function livewire(HasTree $livewire): static
    {
        $this->livewire = $livewire;

        return $this;
    }

    public function getLivewire(): HasTree
    {
        return $this->livewire;
    }
}
