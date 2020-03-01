<?php

interface Hoge
{
    public function hogeMethod();
}

interface Fuga
{
    public function fugaMethod();
}

class HogeFuga implements Hoge, Fuga
{
    public function hogeMethod()
    {
        echo 'hoge';
    }

    public function fugaMethod()
    {
        echo 'fuga';
    }
}

$hogeFuga = new HogeFuga();
