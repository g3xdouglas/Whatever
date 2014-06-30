<?php

namespace Whatever\Dao;

use Whatever\Model\Entity;

interface Crud
{
    public function insert(Entity $filme);

    public function findAll();

    public function findById($id);

    public function delete();
}