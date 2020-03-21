<?php

class sqliteRepository implements RepositoryInterface
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function all($entity)
    {
        return '';
    }

    public function find($entity, $value, $field = 'id')
    {
        return '';
    }
}