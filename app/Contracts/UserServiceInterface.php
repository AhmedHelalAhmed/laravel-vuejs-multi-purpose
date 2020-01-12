<?php


namespace App\Contracts;


interface UserServiceInterface
{
    public function store($data);
    public function all();
    public function destroy($user);
}
