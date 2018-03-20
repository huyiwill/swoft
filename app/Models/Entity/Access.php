<?php

namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 
 *
 * @Entity()
 * @Table(name="access")
 * @uses      Access
 * @version   2018年03月15日
 * @author    swoft <https://github.com/swoft-cloud/swoft>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Access extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type=Types::INT)
     */
    private $id = '';

    /**
     * @var string $name 
     * @Column(name="name", type=Types::STRING, length=32)
     */
    private $name = '';

    /**
     * @var int $is_choice 
     * @Column(name="is_choice", type=Types::INT)
     */
    private $is_choice = '0';

    /**
     * @var string $access 
     * @Column(name="access", type=Types::STRING, length=128)
     */
    private $access = '';

    /**
     * @var string $group 
     * @Column(name="group", type=Types::STRING, length=32)
     */
    private $group = '';

    /**
     * @var string $menu 
     * @Column(name="menu", type=Types::STRING, length=32)
     */
    private $menu = '';

    /**
     * @var int $create_time 
     * @Column(name="create_time", type=Types::INT)
     */
    private $create_time = '0';

    /**
     * @var int $update_time 
     * @Column(name="update_time", type=Types::INT)
     */
    private $update_time = '0';

    /**
     * @var string $controller 
     * @Column(name="controller", type=Types::STRING, length=25)
     */
    private $controller = '';

    /**
     * @var string $action 
     * @Column(name="action", type=Types::STRING, length=25)
     */
    private $action = '';

 
    /**
     * setId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * setName
     *
     * @param string $value
     *
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * setIsChoice
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIsChoice(int $value): self
    {
        $this->is_choice = $value;

        return $this;
    }

    /**
     * setAccess
     *
     * @param string $value
     *
     * @return $this
     */
    public function setAccess(string $value): self
    {
        $this->access = $value;

        return $this;
    }

    /**
     * setGroup
     *
     * @param string $value
     *
     * @return $this
     */
    public function setGroup(string $value): self
    {
        $this->group = $value;

        return $this;
    }

    /**
     * setMenu
     *
     * @param string $value
     *
     * @return $this
     */
    public function setMenu(string $value): self
    {
        $this->menu = $value;

        return $this;
    }

    /**
     * setCreateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->create_time = $value;

        return $this;
    }

    /**
     * setUpdateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->update_time = $value;

        return $this;
    }

    /**
     * setController
     *
     * @param string $value
     *
     * @return $this
     */
    public function setController(string $value): self
    {
        $this->controller = $value;

        return $this;
    }

    /**
     * setAction
     *
     * @param string $value
     *
     * @return $this
     */
    public function setAction(string $value): self
    {
        $this->action = $value;

        return $this;
    }

 
    /**
     * getId
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getName
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * getIsChoice
     *
     * @return int
     */
    public function getIsChoice()
    {
        return $this->is_choice;
    }

    /**
     * getAccess
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * getGroup
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * getMenu
     *
     * @return string
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * getCreateTime
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * getUpdateTime
     *
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * getController
     *
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * getAction
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

}
