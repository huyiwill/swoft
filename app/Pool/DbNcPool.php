<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Pool;

use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Pool;
use Swoft\Db\Pool\DbPool;
use App\Pool\Config\DbNcPoolConfig;

/**
 * Nc pool
 *
 * @Pool("default.nc")
 */
class DbNcPool extends DbPool
{
    /**
     * @Inject()
     *
     * @var DbNcPoolConfig
     */
    protected $poolConfig;
}