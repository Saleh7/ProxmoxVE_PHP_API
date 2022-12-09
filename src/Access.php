<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2017 Saleh <Saleh7@protonmail.ch>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

// /api2/json/access
class Access
{
  /**
    * Directory index.
    * GET /api2/json/access
  */
  public static function Access()
  {
      return Request::Request("/access");
  }
  /**
    * Authentication domain index
    * GET /api2/json/access/domains
  */
  public static function Domains()
  {
      return Request::Request("/access/domains");
  }
  /**
    * Add an authentication server.
    * POST /api2/json/access/domains
    * @param array    $data
  */
  public static function addDomain($data = array())
  {
      return Request::Request("/access/domains", $data, 'POST');
  }
  /**
    * Authentication domain index
    * GET /api2/json/access/domains/{realm}
    * @param string   $realm   Authentication domain ID
  */
  public static function domainsRealm($realm)
  {
      return Request::Request("/access/domains/$realm");
  }
  /**
    * Update authentication server settings.
    * PUT /api2/json/access/domains/{realm}
    * @param string   $realm   Authentication domain ID
    * @param array    $data
  */
  public static function updateDomain($realm, $data = array())
  {
      return Request::Request("/access/domains/$realm", $data, 'PUT');
  }
  /**
    * Delete an authentication server
    * DELETE /api2/json/access/domains/{realm}
    * @param string   $realm   Authentication domain ID
  */
  public static function deleteDomain($realm)
  {
      return Request::Request("/access/domains/$realm", null, 'DELETE');
  }
  /**
    * Get groups
    * GET /api2/json/access/groups
  */
  public static function Groups()
  {
      return Request::Request("/access/groups");
  }
  /**
    * Create new group.
    * POST /api2/json/access/groups
    * @param array    $data
  */
  public static function createGroup($data = array())
  {
      return Request::Request("/access/groups", $data, 'POST');
  }
  /**
    * Get group configuration
    * GET /api2/json/access/groups/{groupid}
    * @param string   $groupid
  */
  public static function GroupId($groupid)
  {
      return Request::Request("/access/groups/$groupid");
  }
  /**
    * Update group data.
    * POST /api2/json/access/groups/{groupid}
    * @param string   $groupid
    * @param array    $data
  */
  public static function updateGroup($groupid, $data = array())
  {
      return Request::Request("/access/groups/$groupid", $data, 'POST');
  }
  /**
    * Delete group.
    * DELETE /api2/json/access/groups/{groupid}
    * @param string   $groupid
  */
  public static function deleteGroup($groupid)
  {
      return Request::Request("/access/groups/$groupid", null, 'DELETE');
  }
  /**
    * Get roles
    * GET /api2/json/access/roles
  */
  public static function Roles()
  {
      return Request::Request("/access/roles");
  }
  /**
    * Create new role.
    * POST /api2/json/access/roles
    * @param array    $data
  */
  public static function createRole($data = array())
  {
      return Request::Request("/access/roles", $data, 'POST');
  }
  /**
    * Get role configuration
    * GET /api2/json/access/roles/{roleid}
    * @param string   $roleid
  */
  public static function RoleId($roleid)
  {
      return Request::Request("/access/roles/$roleid");
  }
  /**
    * Get role configuration
    * PUT /api2/json/access/roles/{roleid}
    * @param string   $roleid
    * @param array    $data
  */
  public static function updateRole($roleid, $data = array())
  {
      return Request::Request("/access/roles/$roleid", $data, 'PUT');
  }
  /**
    * Delete role.
    * DELETE /api2/json/access/roles/{roleid}
    * @param string   $roleid
  */
  public static function deleteRole($roleid)
  {
      return Request::Request("/access/roles/$roleid", null, 'DELETE');
  }
  /**
    * Get users
    * GET /api2/json/access/users
  */
  public static function Users()
  {
      return Request::Request("/access/users");
  }
  /**
    * Create new user.
    * POST /api2/json/access/users
    * @param array    $data
  */
  public static function createUser($data = array())
  {
      return Request::Request("/access/users", $data, 'POST');
  }
  /**
    * Get user configuration
    * GET /api2/json/access/users/{userid}
    * @param string   $userid
  */
  public static function getUser($userid)
  {
      return Request::Request("/access/users/$userid");
  }
  /**
    * Update user configuration.
    * PUT /api2/json/access/users/{userid}
    * @param string   $userid
    * @param array    $data
  */
  public static function updateUser($userid, $data = array())
  {
      return Request::Request("/access/users/$userid", $data, 'PUT');
  }
  /**
    * Delete user.
    * DELETE /api2/json/access/users/{userid}
    * @param string   $userid
  */
  public static function deleteUser($userid)
  {
      return Request::Request("/access/users/$userid", null, 'DELETE');
  }
  /**
    * Change user password.
    * PUT /api2/json/access/password
    * @param array    $data
  */
  public static function changeUserPassword($data = array())
  {
      return Request::Request("/access/password", $data, 'PUT');
  }
  /**
    * Get Access Control List (ACLs).
    * GET /api2/json/access/acl
  */
  public static function Acl()
  {
      return Request::Request("/access/acl");
  }
  /**
    * Update Access Control List (add or remove permissions).
    * PUT /api2/json/access/acl
    * @param array    $data
  */
  public static function updateAcl($data = array())
  {
      return Request::Request("/access/acl", $data, 'PUT');
  }
  /**
    * Create or verify authentication ticket.
    * POST /api2/json/access/ticket
    * @param array    $data
  */
  public static function createTicket($data = array())
  {
      return Request::Request("/access/ticket", $data, 'POST');
  }
}
