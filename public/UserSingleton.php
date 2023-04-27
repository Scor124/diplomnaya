<?php
namespace App;
class User
{
    public $FIO;
    public $Password;
    public $level;
    public function __construct($FIO, $Password, $level)
    {
        $this->FIO = $FIO;
        $this->Password = $Password;
        $this->level = $level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    /**
     * @param mixed $FIO
     */
    public function setFIO($FIO): void
    {
        $this->FIO = $FIO;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password): void
    {
        $this->Password = $Password;
    }
}
