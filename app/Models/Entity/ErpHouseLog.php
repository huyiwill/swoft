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
 * @Table(name="erp_house_log")
 * @uses      ErpHouseLog
 * @version   2018年03月15日
 * @author    swoft <https://github.com/swoft-cloud/swoft>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ErpHouseLog extends Model
{
    /**
     * @var int $document_id 
     * @Id()
     * @Column(name="document_id", type=Types::INT)
     */
    private $document_id = '';

    /**
     * @var int $company_id 
     * @Column(name="company_id", type=Types::INT)
     */
    private $company_id = '';

    /**
     * @var int $house_id 
     * @Column(name="house_id", type=Types::INT)
     */
    private $house_id = '';

    /**
     * @var string $house_code 
     * @Column(name="house_code", type=Types::STRING, length=100)
     */
    private $house_code = '';

    /**
     * @var string $subtype 
     * @Column(name="subtype", type=Types::STRING, length=100)
     */
    private $subtype = '';

    /**
     * @var string $content 
     * @Column(name="content", type=Types::STRING, length=65535)
     */
    private $content = '';

    /**
     * @var string $extra 
     * @Column(name="extra", type=Types::STRING, length=1000)
     */
    private $extra = '';

    /**
     * @var int $department_id 
     * @Column(name="department_id", type=Types::INT)
     */
    private $department_id = '';

    /**
     * @var string $username 
     * @Column(name="username", type=Types::STRING, length=20)
     */
    private $username = '';

    /**
     * @var int $user_id 
     * @Column(name="user_id", type=Types::INT)
     */
    private $user_id = '';

    /**
     * @var int $create_time 
     * @Column(name="create_time", type=Types::INT)
     */
    private $create_time = '';

    /**
     * @var int $update_time 
     * @Column(name="update_time", type=Types::INT)
     */
    private $update_time = '';

    /**
     * @var string $erp_fk_id 
     * @Column(name="erp_fk_id", type=Types::STRING, length=100)
     */
    private $erp_fk_id = '';

    /**
     * @var string $erp_userid 
     * @Column(name="erp_userid", type=Types::STRING, length=100)
     */
    private $erp_userid = '';

    /**
     * @var string $erp_department_id 
     * @Column(name="erp_department_id", type=Types::STRING, length=100)
     */
    private $erp_department_id = '';

 
    /**
     * setDocumentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDocumentId(int $value)
    {
        $this->document_id = $value;

        return $this;
    }

    /**
     * setCompanyId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCompanyId(int $value): self
    {
        $this->company_id = $value;

        return $this;
    }

    /**
     * setHouseId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setHouseId(int $value): self
    {
        $this->house_id = $value;

        return $this;
    }

    /**
     * setHouseCode
     *
     * @param string $value
     *
     * @return $this
     */
    public function setHouseCode(string $value): self
    {
        $this->house_code = $value;

        return $this;
    }

    /**
     * setSubtype
     *
     * @param string $value
     *
     * @return $this
     */
    public function setSubtype(string $value): self
    {
        $this->subtype = $value;

        return $this;
    }

    /**
     * setContent
     *
     * @param string $value
     *
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * setExtra
     *
     * @param string $value
     *
     * @return $this
     */
    public function setExtra(string $value): self
    {
        $this->extra = $value;

        return $this;
    }

    /**
     * setDepartmentId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setDepartmentId(int $value): self
    {
        $this->department_id = $value;

        return $this;
    }

    /**
     * setUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * setUserId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->user_id = $value;

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
     * setErpFkId
     *
     * @param string $value
     *
     * @return $this
     */
    public function setErpFkId(string $value): self
    {
        $this->erp_fk_id = $value;

        return $this;
    }

    /**
     * setErpUserid
     *
     * @param string $value
     *
     * @return $this
     */
    public function setErpUserid(string $value): self
    {
        $this->erp_userid = $value;

        return $this;
    }

    /**
     * setErpDepartmentId
     *
     * @param string $value
     *
     * @return $this
     */
    public function setErpDepartmentId(string $value): self
    {
        $this->erp_department_id = $value;

        return $this;
    }

 
    /**
     * getDocumentId
     *
     * @return int
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }

    /**
     * getCompanyId
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * getHouseId
     *
     * @return int
     */
    public function getHouseId()
    {
        return $this->house_id;
    }

    /**
     * getHouseCode
     *
     * @return string
     */
    public function getHouseCode()
    {
        return $this->house_code;
    }

    /**
     * getSubtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * getContent
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * getExtra
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * getDepartmentId
     *
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->department_id;
    }

    /**
     * getUsername
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * getUserId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
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
     * getErpFkId
     *
     * @return string
     */
    public function getErpFkId()
    {
        return $this->erp_fk_id;
    }

    /**
     * getErpUserid
     *
     * @return string
     */
    public function getErpUserid()
    {
        return $this->erp_userid;
    }

    /**
     * getErpDepartmentId
     *
     * @return string
     */
    public function getErpDepartmentId()
    {
        return $this->erp_department_id;
    }

}
