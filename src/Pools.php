<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2025 AS23Project <a.sigit2303@gmail.com>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

// /api2/json/pools
class Pools
{
  /**
   * Read system log
   * GET /api2/json/pools
   */
  public function Pools()
  {
    return Request::Request("/pools");
  }
  /**
   * Read system log
   * GET /api2/json/pools/{poolid}
   * @param string   $poolid
   */
  public function PoolsID($poolid)
  {
    return Request::Request("/pools/$poolid");
  }
  /**
   * Read system log
   * GET /api2/json/pools/{poolid}
   * @param string   $poolid
   */
  public function PutPool($poolid, $data = array())
  {
    return Request::Request("/pools/$poolid", $data, "PUT");
  }
}
