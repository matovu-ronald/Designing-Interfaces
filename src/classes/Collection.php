<?php

abstract class Collection implements CollectionInterface
{
    protected $repo;
    protected $entity;
    public $collection;

    public function __construct(RepositoryInterface $repo, $id = null, $field = 'id')
    {
        $this->repo = $repo;
        $this->setEntity();
        if (!empty($id)) {
            $this->collection = $this->repo->find($this->entity, $id, $field);
        } else {
            $this->collection = $this->repo->all($this->entity);
        }
    }

    public function current()
    {
        return current($this->collection);
    }

    public function key()
    {
        return key($this->collection);
    }

    public function next()
    {
        return next($this->collection);
    }

    public function rewind()
    {
        return reset($this->collection);
    }
    public function valid()
    {
        return key($this->collection) !== null;
    }

    public function count()
    {
        return count($this->collection);
    }

    public function shortDescription()
    {
        if (strlen($this->current()->details < 510)) {
            return strip_tags($this->current()->details);
        }

        return strip_tags(
            substr(
                $this->current()->details, 
                0,
                strpos($this->current()->details, ' ', 500)
            ),
            ). '...';
    }

    abstract protected function setEntity();
}
