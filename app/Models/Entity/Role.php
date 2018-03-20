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
 * @Table(name="role")
 * @uses      Role
 * @version   2018年03月15日
 * @author    swoft <https://github.com/swoft-cloud/swoft>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Role extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type=Types::INT)
     */
    private $id = '';

    /**
     * @var int $type
     * @Column(name="type", type=Types::INT)
     */
    private $type = '1';

    /**
     * @var string $name
     * @Column(name="name", type=Types::STRING, length=50)
     */
    private $name = '';

    /**
     * @var string $desc
     * @Column(name="desc", type=Types::STRING, length=200)
     */
    private $desc = '';

    /**
     * @var int $create_time
     * @Column(name="create_time", type=Types::INT)
     */
    private $create_time = 0;

    /**
     * @var int $update_time
     * @Column(name="update_time", type=Types::INT)
     */
    private $update_time = 0;

    /**
     * @var int $if_deleted
     * @Column(name="if_deleted", type=Types::INT)
     */
    private $if_deleted = 0;

 
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
     * setType
     *
     * @param int $value
     *
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

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
     * setDesc
     *
     * @param string $value
     *
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

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
     * setIfDeleted
     *
     * @param int $value
     *
     * @return $this
     */
    public function setIfDeleted(int $value): self
    {
        $this->if_deleted = $value;

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
     * getType
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
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
     * getDesc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
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
     * getIfDeleted
     *
     * @return int
     */
    public function getIfDeleted()
    {
        return $this->if_deleted;
    }

}
