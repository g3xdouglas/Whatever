<?php
/**
 *
 * @author douglas2
 */
namespace Whatever\Dao;

use Whatever\Model\Entity;

interface DataAccess
{
    public function insert(Entity $filme);

    public function getAll();

    public function getById($id);

    public function delete();
}