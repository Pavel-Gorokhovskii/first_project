<?php

namespace Model;

interface CRUDInterface
{
    /**
     * read 
     */
    public function get(int $id = null): array;

    /**
     * create
     */
    public function add(array $data): int;

    /**
     * update
     */
    public function edit(int $id, array $data);

    /**
     * delete
     */
    public function del(int $id);
}
