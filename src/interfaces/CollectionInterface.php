<?php

interface CollectionInterface extends Iterator, Countable
{
    public function shortDescription();
}