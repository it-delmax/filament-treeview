<?php

namespace IT_Delmax\FilamentTreeView\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use IT_Delmax\FilamentTreeView\Tree;

interface HasTree
{
    public function tree(Tree $tree): Tree;

    public function getTree(): Tree;

    public function getTreeQuery(): Builder|Relation;
}
