<?php

namespace SpecificationExample\Notebook\Specifications;

use PHPUnit\Framework\TestCase;
use SpecificationExample\Notebook\Notebook;
use SpecificationExample\Notebook\Specifications\NotebookIsForGamersSpecification;

class NotebookIsForGamersSpecificationTest extends TestCase
{
    public function testIfFunctionisSatisfiedByReturnTrue()
    {
        $notebook = new Notebook();
        $notebook->setDiskSize(500);
        $notebook->setRamMemory(8);
        $notebook->setWeight(2);
        $notebook->setReleaseYear(2021);

        $this->assertTrue((new NotebookIsForGamersSpecification())->isSatisfiedBy($notebook));
    }

    public function testIfFunctionisSatisfiedByReturnFalse()
    {
        $notebook = new Notebook();
        $notebook->setDiskSize(200);
        $notebook->setRamMemory(4);
        $notebook->setWeight(2);
        $notebook->setReleaseYear(2013);

        $this->assertFalse((new NotebookIsForGamersSpecification())->isSatisfiedBy($notebook));
    }
}
