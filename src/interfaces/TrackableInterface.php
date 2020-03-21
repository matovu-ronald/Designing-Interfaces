<?php

interface TrackableInterface 
{
    public function getAuthor();
    public function getDateTime($format);
}