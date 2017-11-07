<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2017 Saleh <Saleh7@protonmail.ch>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

// /api2/json/cluster
class Cluster
{
  /**
    * Cluster index.
    * GET /api2/json/cluster
  */
  public function Cluster()
  {
      return Request::Request("/cluster");
  }
  /**
    * List vzdump backup schedule.
    * GET /api2/json/cluster/backup
  */
  public function ListBackup()
  {
      return Request::Request("/cluster/backup");
  }
  /**
    * Create new vzdump backup job.
    * POST /api2/json/cluster/backup
    * @param array    $data
  */
  public function createBackup($data = array())
  {
      return Request::Request("/cluster/backup", $data, 'POST');
  }
  /**
    * Read vzdump backup job definition.
    * GET /api2/json/cluster/backup/{id}
    * @param string   $id    The job ID.
  */
  public function BackupId($id)
  {
      return Request::Request("/cluster/backup/$id");
  }
  /**
    * Update vzdump backup job definition.
    * PUT /api2/json/cluster/backup/{id}
    * @param string   $id    The job ID.
    * @param array    $data
  */
  public function updateBackup($id, $data = array())
  {
      return Request::Request("/cluster/backup/$id", $data, 'PUT');
  }
  /**
    * Delete vzdump backup job definition.
    * DELETE /api2/json/cluster/backup/{id}
    * @param string   $id    The job ID.
  */
  public function deleteBackup($id)
  {
      return Request::Request("/cluster/backup/$id", null, 'DELETE');
  }
  /**
    * Read vzdump backup job definition.
    * GET /api2/json/cluster/config
  */
  public function Config()
  {
      return Request::Request("/cluster/config");
  }
  /**
    * Corosync node list.
    * GET /api2/json/cluster/config/nodes
  */
  public function listConfigNodes()
  {
      return Request::Request("/cluster/config/nodes");
  }
  /**
    * Get corosync totem protocol settings.
    * GET /api2/json/cluster/config/totem
  */
  public function configTotem()
  {
      return Request::Request("/cluster/config/totem");
  }
  /**
    * Directory index.
    * GET /api2/json/cluster/firewall
  */
  public function Firewall()
  {
      return Request::Request("/cluster/firewall");
  }
  /**
    * List aliases
    * GET /api2/json/cluster/firewall/aliases
  */
  public function firewallListAliases()
  {
      return Request::Request("/cluster/firewall/aliases");
  }
  /**
    * Create IP or Network Alias.
    * POST /api2/json/cluster/firewall/aliases
    * @param array    $data
  */
  public function createFirewallAliase($data = array())
  {
      return Request::Request("/cluster/firewall/aliases", $data, 'POST');
  }
  /**
    * Read alias.
    * GET /api2/json/cluster/firewall/aliases/{name}
    * @param string   $name    Alias name.
  */
  public function getFirewallAliasesName($name)
  {
      return Request::Request("/cluster/firewall/aliases/$name");
  }
  /**
    * Update IP or Network alias.
    * PUT /api2/json/cluster/firewall/aliases/{name}
    * @param string   $name    Alias name.
    * @param array    $data
  */
  public function updateFirewallAliase($name, $data = array())
  {
      return Request::Request("/cluster/firewall/aliases/$name", $data, 'PUT');
  }
  /**
    * Update IP or Network alias.
    * PUT /api2/json/cluster/firewall/aliases/{name}
    * @param string   $name    Alias name.
  */
  public function removeFirewallAliase($name)
  {
      return Request::Request("/cluster/firewall/aliases/$name", null, 'DELETE');
  }
  /**
    * List security groups.
    * GET /api2/json/cluster/firewall/groups
  */
  public function firewallListGroups()
  {
      return Request::Request("/cluster/firewall/groups");
  }
  /**
    * Create new security group.
    * POST /api2/json/cluster/firewall/groups
    * @param array    $data
  */
  public function createFirewallGroup($data = array())
  {
      return Request::Request("/cluster/firewall/groups", $data, 'POST');
  }
  /**
    * List rules
    * GET /api2/json/cluster/firewall/groups/{group}
    * @param string   $group    Security Group name.
  */
  public function firewallGroupsGroup($group)
  {
      return Request::Request("/cluster/firewall/groups/$group");
  }
  /**
    * Create new rule.
    * POST /api2/json/cluster/firewall/groups/{group}
    * @param string   $group    Security Group name.
    * @param array    $data
  */
  public function createRuleFirewallGroup($group, $data = array())
  {
      return Request::Request("/cluster/firewall/groups/$group", $data, 'POST');
  }
  /**
    * Delete security group.
    * PUT /api2/json/cluster/firewall/aliases/{name}
    * @param string   $group    Security Group name.
  */
  public function removeFirewallGroup($group)
  {
      return Request::Request("/cluster/firewall/groups/$group", null, 'DELETE');
  }
  /**
    * Get single rule data.
    * GET /api2/json/cluster/firewall/groups/{group}/{pos}
    * @param string   $group    Security Group name.
    * @param integer  $pos      Update rule at position <pos>.
  */
  public function firewallGroupsGroupPos($group, $pos)
  {
      return Request::Request("/cluster/firewall/groups/$group/$pos");
  }
  /**
    * Modify rule data
    * PUT /api2/json/cluster/firewall/groups/{group}/{pos}
    * @param string   $group    Security Group name.
    * @param integer  $pos      Update rule at position <pos>.
    * @param array    $data
  */
  public function setFirewallGroupPos($group, $pos, $data = array())
  {
      return Request::Request("/cluster/firewall/groups/$group/$pos", $data, 'PUT');
  }
  /**
    * Delete rule.
    * DELETE /api2/json/cluster/firewall/groups/{group}/{pos}
    * @param string   $group    Security Group name.
    * @param integer  $pos      Update rule at position <pos>.
  */
  public function removeFirewallGroupPos($group, $pos)
  {
      return Request::Request("/cluster/firewall/groups/$group/$pos", null, 'DELETE');
  }
  /**
    * List IPSets
    * GET /api2/json/cluster/firewall/ipset
  */
  public function firewallListIpset()
  {
      return Request::Request("/cluster/firewall/ipset");
  }
  /**
    * Create new IPSet
    * POST /api2/json/cluster/firewall/ipset
    * @param array    $data
  */
  public function createFirewallIpset($data = array())
  {
      return Request::Request("/cluster/firewall/ipset", $data, 'POST');
  }
  /**
    * List IPSet content
    * GET /api2/json/cluster/firewall/ipset/{name}
    * @param string   $name    IP set name.
  */
  public function firewallIpsetName($name)
  {
      return Request::Request("/cluster/firewall/ipset/$name");
  }
  /**
    * Add IP or Network to IPSet.
    * GET /api2/json/cluster/firewall/ipset/{name}
    * @param string   $name    IP set name.
    * @param array    $data
  */
  public function addFirewallIpsetName($name, $data = array())
  {
      return Request::Request("/cluster/firewall/ipset/$name", $data, 'POST');
  }
  /**
    * Delete IPSet
    * GET /api2/json/cluster/firewall/ipset/{name}
    * @param string   $name    IP set name.
  */
  public function deleteFirewallIpsetName($name)
  {
      return Request::Request("/cluster/firewall/ipset/$name", null, 'DELETE');
  }
  /**
    * List rules.
    * GET /api2/json/cluster/firewall/rules
  */
  public function firewallListRules()
  {
      return Request::Request("/cluster/firewall/rules");
  }
  /**
    * Create new rule.
    * GET /api2/json/cluster/firewall/rules
    * @param array    $data
  */
  public function createFirewallRules($data = array())
  {
      return Request::Request("/cluster/firewall/rules", $data, 'POST');
  }
  /**
    * Get single rule data.
    * GET /api2/json/cluster/firewall/rules/{pos}
    * @param integer  $pos      Update rule at position <pos>.
  */
  public function firewallRulesPos($pos)
  {
      return Request::Request("/cluster/firewall/rules/$pos");
  }
  /**
    * Modify rule data.
    * PUT /api2/json/cluster/firewall/rules/{pos}
    * @param integer  $pos      Update rule at position <pos>.
    * @param array    $data
  */
  public function setFirewallRulesPos($pos, $data = array())
  {
      return Request::Request("/cluster/firewall/rules/$pos", $data, 'PUT');
  }
  /**
    * Delete rule.
    * DELETE /api2/json/cluster/firewall/rules/{pos}
    * @param integer  $pos      Update rule at position <pos>.
  */
  public function deleteFirewallRulesPos($pos)
  {
      return Request::Request("/cluster/firewall/rules/$pos", null, 'DELETE');
  }
  /**
    * List available macros
    * GET /api2/json/cluster/firewall/macros
  */
  public function firewallListMacros()
  {
      return Request::Request("/cluster/firewall/macros");
  }
  /**
    * Get Firewall options.
    * GET /api2/json/cluster/firewall/options
  */
  public function firewallListOptions()
  {
      return Request::Request("/cluster/firewall/options");
  }
  /**
    * Set Firewall options.
    * PUT /api2/json/cluster/firewall/options
    * @param array    $data
  */
  public function setFirewallOptions($data = array())
  {
      return Request::Request("/cluster/firewall/options", $data, 'PUT');
  }
  /**
    * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
    * GET /api2/json/cluster/firewall/refs
  */
  public function firewallListRefs()
  {
      return Request::Request("/cluster/firewall/refs");
  }
  /**
    * Get HA groups.
    * GET /api2/json/cluster/ha/groups
  */
  public function getHaGroups()
  {
      return Request::Request("/cluster/ha/groups");
  }
  /**
    * Read ha group configuration.
    * GET /api2/json/cluster/ha/groups/{group}
    * @param string   $group      The HA group identifier.
  */
  public function HaGroups($group)
  {
      return Request::Request("/cluster/ha/groups/$group");
  }
  /**
    * List HA resources.
    * GET /api2/json/cluster/ha/resources
  */
  public function HaResources()
  {
      return Request::Request("/cluster/ha/resources");
  }
  /**
    * List HA resources.
    * GET /api2/json/cluster/ha/resources
  */
  public function Replication()
  {
      return Request::Request("/cluster/replication");
  }
  /**
    * Create a new replication job
    * POST /api2/json/cluster/ha/resources
    * @param array    $data
  */
  public function createReplication($data = array())
  {
      return Request::Request("/cluster/replication", $data, "POST");
  }
  /**
    * Read replication job configuration.
    * GET /api2/json/cluster/replication/{id}
    * @param string   $id     Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public function replicationId($id)
  {
      return Request::Request("/cluster/replication/$id");
  }
  /**
    * Update replication job configuration.
    * PUT /api2/json/cluster/replication/{id}
    * @param string   $id     Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
    * @param array    $data
  */
  public function updateReplication($id, $data = array())
  {
      return Request::Request("/cluster/replication/$id", $data, "PUT");
  }
  /**
    * Mark replication job for removal.
    * DELETE /api2/json/cluster/replication/{id}
    * @param string   $id     Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public function deleteReplication($id)
  {
      return Request::Request("/cluster/replication/$id", null, "DELETE");
  }
  /**
    * Read cluster log
    * GET /api2/json/cluster/log
    * @param integer  $max     Maximum number of entries.
  */
  public function Log($max = null)
  {
      $optional['max'] = !empty($max) ? $max : null;
      return Request::Request("/cluster/log", $optional);
  }
  /**
    * Get next free VMID. If you pass an VMID it will raise an error if the ID is already used.
    * GET /api2/json/cluster/nextid
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function nextVmid($vmid = null)
  {
      $optional['vmid'] = !empty($vmid) ? $vmid : null;
      return Request::Request("/cluster/nextid", $optional);
  }
  /**
    * Get datacenter options.
    * GET /api2/json/cluster/options
  */
  public function Options()
  {
      return Request::Request("/cluster/options");
  }
  /**
    * Set datacenter options.
    * PUT /api2/json/cluster/options
    * @param array    $data
  */
  public function setOptions($data = array())
  {
      return Request::Request("/cluster/options", $data, "PUT");
  }
  /**
    * Resources index (cluster wide).
    * GET /api2/json/cluster/resources
    * @param enum     $type    vm | storage | node
  */
  public function Resources($type = null)
  {
      $optional['type'] = !empty($type) ? $type : null;
      return Request::Request("/cluster/resources", $optional);
  }
  /**
    * Get cluster status informations.
    * GET /api2/json/cluster/status
  */
  public function Status()
  {
      return Request::Request("/cluster/status");
  }
  /**
    * List recent tasks (cluster wide).
    * GET /api2/json/cluster/tasks
  */
  public function Tasks()
  {
      return Request::Request("/cluster/tasks");
  }
}
