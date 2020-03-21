<?php

class Pages extends Collection
{
    protected function setEntity()
    {
        $this->entity = 'pages';
    }
    public function getTitle()
    {
        return $this->current()->title;
    }

    public function featuredImage()
    {
        return $this->current()->image;
    }
}