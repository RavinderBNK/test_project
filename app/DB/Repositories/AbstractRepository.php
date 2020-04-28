<?php

namespace App\DB\Repositories;

use App\DB\DB;

abstract class AbstractRepository
{
    /**
     * @var DB
     */
    protected $db;

    public function __construct(DB $db)
    {
        $this->db = $db;
    }
}