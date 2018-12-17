<?php
/**
 * Created by PhpStorm.
 * User: jeanchagas
 * Date: 12/17/18
 * Time: 11:05 AM
 */

namespace Api\Entity;


abstract class AbstractEntity
{
    abstract function equals($obj);
    abstract function toString();
    abstract function toArray();
}