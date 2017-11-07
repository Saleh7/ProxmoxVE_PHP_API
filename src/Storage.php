<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2017 Saleh <Saleh7@protonmail.ch>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;
use Proxmox\Request;

// /api2/json/storage
class Storage
{
  /**
    * Storage index.
    * GET /api2/json/storage
    * @param enum     $type   Only list storage of specific type
  */
  public function Storage($type = null)
  {
      $optional['type'] = !empty($type) ? $type : 0;
      return Request::Request("/storage", $optional);
  }
  /**
    * Create a new storage.
    * POST /api2/json/storage
    * @param array    $data
  */
  public function createStorage($data = array())
  {
      return Request::Request("/storage", $data, 'POST');
  }
  /**
    * Read storage configuration.
    * GET /api2/json/storage/{storage}
    * @param string   $storage   The storage identifier.
  */
  public function getStorage($storage)
  {
      return Request::Request("/storage/$storage");
  }
  /**
    * Update storage configuration.
    * PUT /api2/json/storage/{storage}
    * @param string   $storage   The storage identifier.
    * @param array    $data
  */
  public function updateStorage($storage, $data = array())
  {
      return Request::Request("/storage/$storage", $data, 'PUT');
  }
  /**
    * Delete storage configuration.
    * Delete /api2/json/storage/{storage}
    * @param string   $storage   The storage identifier.
  */
  public function deleteStorage($storage)
  {
      return Request::Request("/storage/$storage", null, 'Delete');
  }
}
