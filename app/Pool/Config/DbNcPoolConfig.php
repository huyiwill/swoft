<?php

namespace App\Pool\Config;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Value;
use Swoft\Db\Driver\Driver;
use Swoft\Sg\BalancerSelector;
use Swoft\Sg\ProviderSelector;
use Swoft\Db\Pool\Config\DbPoolProperties;

/**
 * the slave config of database
 *
 * @Bean()
 */
class DbNcPoolConfig extends DbPoolProperties
{
    /**
     * @Value(name="${config.db.nc.name}", env="${DB_NC_NAME}")
     * @var string
     */
    protected $name = '';

    /**
     * @Value(name="${config.db.nc.minActive}", env="${DB_NC_MIN_ACTIVE}")
     * @var int
     */
    protected $minActive = 5;
    /**
     * @Value(name="${config.db.nc.maxActive}", env="${DB_NC_MAX_ACTIVE}")
     * @var int
     */
    protected $maxActive = 10;

    /**
     * @Value(name="${config.db.nc.maxWait}", env="${DB_NC_MAX_WAIT}")
     * @var int
     */
    protected $maxWait = 20;

    /**
     * @Value(name="${config.db.nc.maxWaitTime}", env="${DB_NC_MAX_WAIT_TIME}")
     * @var int
     */
    protected $maxWaitTime = 3;

    /**
     * @Value(name="${config.db.nc.maxIdleTime}", env="${DB_NC_MAX_IDLE_TIME}")
     * @var int
     */
    protected $maxIdleTime = 60;

    /**
     * @Value(name="${config.db.nc.timeout}", env="${DB_NC_TIMEOUT}")
     * @var int
     */
    protected $timeout = 3;

    /**
     * the addresses of connection
     *
     * <pre>
     * [
     *  '127.0.0.1:88',
     *  '127.0.0.1:88'
     * ]
     * </pre>
     *
     * @Value(name="${config.db.nc.uri}", env="${DB_NC_URI}")
     * @var array
     */
    protected $uri = [];

    /**
     * whether to user provider(consul/etcd/zookeeper)
     *
     * @Value(name="${config.db.nc.useProvider}", env="${DB_NC_USE_PROVIDER}")
     * @var bool
     */
    protected $useProvider = false;

    /**
     * the default balancer is random balancer
     *
     * @Value(name="${config.db.nc.balancer}", env="${DB_NC_BALANCER}")
     * @var string
     */
    protected $balancer = BalancerSelector::TYPE_RANDOM;

    /**
     * the default provider is consul provider
     *
     * @Value(name="${config.db.nc.provider}", env="${DB_NC_PROVIDER}")
     * @var string
     */
    protected $provider = ProviderSelector::TYPE_CONSUL;

    /**
     * the default driver is mysql
     *
     * @Value(name="${config.db.driver.provider}", env="${DB_NC_DRIVER}")
     * @var string
     */
    protected $driver = Driver::MYSQL;
}
