<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        var_dump(Db::query('select * from user'));
    }
}
