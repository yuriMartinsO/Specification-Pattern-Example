<?php

namespace SpecificationExample\Notebook\Specifications;

use SpecificationExample\Notebook\Notebook;

class NotebookIsForGamersSpecification
{
    /**
     * Return if the condition is satisfield
     *
     * @param Notebook $notebook
     * @return bool
     */
    public function isSatisfiedBy(Notebook $notebook): bool
    {
        return $notebook->getDiskSize() >= 500
            && $notebook->getRamMemory() >= 8
            && $notebook->getWeight() <= 2
            && $notebook->getReleaseYear() >= 2021;
    }
}
