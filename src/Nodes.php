<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2017 Saleh <Saleh7@protonmail.ch>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

// /api2/json/nodes
class Nodes
{
  /**
    * Cluster node index.
    * GET /api2/json/nodes
  */
  public function listNodes()
  {
      return Request::Request("/nodes");
  }
  /**
    * Directory index for apt (Advanced Package Tool).
    * GET /api2/json/nodes/{node}/apt
    * @param string   $node     The cluster node name.
  */
  public function Apt($node)
  {
      return Request::Request("/nodes/$node/apt");
  }
  /**
    * Directory index for apt (Advanced Package Tool).
    * GET /api2/json/nodes/{node}/apt
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function updateApt($node, $data = array())
  {
      return Request::Request("/nodes/$node/apt/update", $data, "POST");
  }
  /**
    * Get package changelogs.
    * GET /api2/json/nodes/{node}/apt/changelog
    * @param string   $node     The cluster node name.
    * @param string   $name     Package name.
  */
  public function AptChangelog($node, $name = null)
  {
      $optional['name'] = !empty($name) ? $name : null;
      return Request::Request("/nodes/$node/apt/changelog", $optional);
  }
  /**
    * List available updates.
    * GET /api2/json/nodes/{node}/apt/update
    * @param string   $node     The cluster node name.
  */
  public function AptUpdate($node)
  {
      return Request::Request("/nodes/$node/apt/update");
  }
  /**
    * This is used to resynchronize the package index files from their sources (apt-get update).
    * POST /api2/json/nodes/{node}/apt/update
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createAptUpdate($node, $data = array())
  {
      return Request::Request("/nodes/$node/apt/update", $data, "POST");
  }
  /**
    * Directory index.
    * GET /api2/json/nodes/{node}/ceph
    * @param string   $node     The cluster node name.
  */
  public function Ceph($node)
  {
      return Request::Request("/nodes/$node/ceph");
  }
  /**
    * get all set ceph flags
    * GET /api2/json/nodes/{node}/ceph/flags
    * @param string   $node     The cluster node name.
  */
  public function CephFlags($node)
  {
      return Request::Request("/nodes/$node/ceph/flags");
  }
  /**
    * Set a ceph flag
    * POST /api2/json/nodes/{node}/ceph/flags/{flag}
    * @param string   $node     The cluster node name.
    * @param enum     $flag     The ceph flag to set/unset
    * @param array    $data
  */
  public function setCephFlags($node, $flag, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/flags/$flag", $data, "POST");
  }
  /**
    * Unset a ceph flag
    * DELETE /api2/json/nodes/{node}/ceph/flags/{flag}
    * @param string   $node     The cluster node name.
    * @param enum     $flag     The ceph flag to set/unset
  */
  public function unsetCephFlags($node, $flag)
  {
      return Request::Request("/nodes/$node/ceph/flags/$flag", null, "DELETE");
  }
  /**
    * Create Ceph Manager
    * POST /api2/json/nodes/{node}/ceph/mgr
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createCephMgr($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/mgr", $data, "POST");
  }
  /**
    * Destroy Ceph Manager.
    * DELETE /api2/json/nodes/{node}/ceph/mgr/{id}
    * @param string   $node     The cluster node name.
    * @param string   $id       The ID of the manager
  */
  public function destroyCephMgr($node, $id)
  {
      return Request::Request("/nodes/$node/ceph/mgr/$id", null, "DELETE");
  }
  /**
    * Get Ceph monitor list.
    * GET /api2/json/nodes/{node}/ceph/mon
    * @param string   $node     The cluster node name.
  */
  public function CephMon($node)
  {
      return Request::Request("/nodes/$node/ceph/mon");
  }
  /**
    * Create Ceph Monitor and Manager
    * POST /api2/json/nodes/{node}/ceph/mon
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createCephMon($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/mon", $data, "POST");
  }
  /**
    * Destroy Ceph Monitor and Manager.
    * DELETE /api2/json/nodes/{node}/ceph/mon/{monid}
    * @param string   $node     The cluster node name.
    * @param string   $monid    Monitor ID
  */
  public function destroyCephMon($node, $monid)
  {
      return Request::Request("/nodes/$node/ceph/mgr/$monid", null, "DELETE");
  }
  /**
    * Get Ceph osd list/tree.
    * GET /api2/json/nodes/{node}/ceph/osd
    * @param string   $node     The cluster node name.
  */
  public function CephOsd($node)
  {
      return Request::Request("/nodes/$node/ceph/osd");
  }
  /**
    * Create OSD
    * POST /api2/json/nodes/{node}/ceph/osd
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createCephOsd($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/osd", $data, "POST");
  }
  /**
    * Destroy OSD
    * DELETE /api2/json/nodes/{node}/ceph/osd/{osdid}
    * @param string   $node     The cluster node name.
    * @param string   $osdid    OSD ID
  */
  public function destroyCephOsd($node, $osdid)
  {
      return Request::Request("/nodes/$node/ceph/osd/$osdid", null, "DELETE");
  }
  /**
    * ceph osd in
    * POST /api2/json/nodes/{node}/ceph/osd/{osdid}/in
    * @param string   $node     The cluster node name.
    * @param string   $osdid    OSD ID
    * @param array    $data
  */
  public function CephOsdIn($node, $osdid, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/osd/$osdid/in", $data, "POST");
  }
  /**
    * ceph osd out
    * POST /api2/json/nodes/{node}/ceph/osd/{osdid}/out
    * @param string   $node     The cluster node name.
    * @param string   $osdid    OSD ID
    * @param array    $data
  */
  public function CephOsdOut($node, $osdid, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/osd/$osdid/out", $data, "POST");
  }
  /**
    * List all pools.
    * GET /api2/json/nodes/{node}/ceph/pools
    * @param string   $node     The cluster node name.
  */
  public function getCephPools($node)
  {
      return Request::Request("/nodes/$node/ceph/pools");
  }
  /**
    * Create POOL
    * POST /api2/json/nodes/{node}/ceph/pools
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createCephPool($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/pools", $data, "POST");
  }
  /**
    * Destroy POOL
    * DELETE /api2/json/nodes/{node}/ceph/pools
    * @param string   $node     The cluster node name.
  */
  public function destroyCephPool($node)
  {
      return Request::Request("/nodes/$node/ceph/pools", null, "DELETE");
  }
  /**
    * Get Ceph configuration.
    * GET /api2/json/nodes/{node}/ceph/config
    * @param string   $node     The cluster node name.
  */
  public function CephConfig($node)
  {
      return Request::Request("/nodes/$node/ceph/config");
  }
  /**
    * Get OSD crush map
    * GET /api2/json/nodes/{node}/ceph/crush
    * @param string   $node     The cluster node name.
  */
  public function CephCrush($node)
  {
      return Request::Request("/nodes/$node/ceph/crush");
  }
  /**
    * List local disks.
    * GET /api2/json/nodes/{node}/ceph/disks
    * @param string   $node     The cluster node name.
  */
  public function CephDisks($node)
  {
      return Request::Request("/nodes/$node/ceph/disks");
  }
  /**
    * Create initial ceph default configuration and setup symlinks.
    * POST /api2/json/nodes/{node}/ceph/init
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createCephInit($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/init", $data, "POST");
  }
  /**
    * Read ceph log
    * GET /api2/json/nodes/{node}/ceph/log
    * @param string   $node     The cluster node name.
    * @param integer  $limit
    * @param integer  $start
  */
  public function CephLog($node, $limit = null, $start = null)
  {
      $optional['limit'] = !empty($limit) ? $limit : 50;
      $optional['start'] = !empty($start) ? $start : 0;
      return Request::Request("/nodes/$node/ceph/log", $optional);
  }
  /**
    * List ceph rules.
    * GET /api2/json/nodes/{node}/ceph/rules
    * @param string   $node     The cluster node name.
  */
  public function CephRules($node)
  {
      return Request::Request("/nodes/$node/ceph/rules");
  }
  /**
    * Start ceph services.
    * POST /api2/json/nodes/{node}/ceph/start
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function CephStart($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/start", $data, "POST");
  }
  /**
    * Stop ceph services.
    * POST /api2/json/nodes/{node}/ceph/stop
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function CephStop($node, $data = array())
  {
      return Request::Request("/nodes/$node/ceph/stop", $data, "POST");
  }
  /**
    * Get ceph status.
    * GET /api2/json/nodes/{node}/ceph/status
    * @param string   $node     The cluster node name.
  */
  public function CephStatus($node)
  {
      return Request::Request("/nodes/$node/ceph/status");
  }
  /**
    * Node index.
    * GET /api2/json/nodes/{node}/disks
    * @param string   $node     The cluster node name.
  */
  public function getDisks($node)
  {
      return Request::Request("/nodes/$node/disks");
  }
  /**
    * Initialize Disk with GPT
    * POST /api2/json/nodes/{node}/disks
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function Disk($node, $data = array())
  {
      return Request::Request("/nodes/$node/disks", $data, "POST");
  }
  /**
    * List local disks.
    * GET /api2/json/nodes/{node}/disks/list
    * @param string   $node     The cluster node name.
  */
  public function disksList($node)
  {
      return Request::Request("/nodes/$node/disks/list");
  }
  /**
    * Get SMART Health of a disk.
    * GET /api2/json/nodes/{node}/disks/smart
    * @param string   $node     The cluster node name.
    * @param string   $disk     Block device name
  */
  public function disksSmart($node, $disk = null)
  {
      $optional['disk'] = !empty($disk) ? $disk : null;
      return Request::Request("/nodes/$node/disks/smart", $optional);
  }
  /**
    * Directory index.
    * GET /api2/json/nodes/{node}/firewall
    * @param string   $node     The cluster node name.
  */
  public function Firewall($node)
  {
      return Request::Request("/nodes/$node/firewall");
  }
  /**
    * List rules.
    * GET /api2/json/nodes/{node}/firewall/rules
    * @param string   $node     The cluster node name.
  */
  public function firewallRules($node)
  {
      return Request::Request("/nodes/$node/firewall/rules");
  }
  /**
    * Create new rule
    * POST /api2/json/nodes/{node}/firewall/rules
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createFirewallRule($node, $data = array())
  {
      return Request::Request("/nodes/$node/firewall/rules", $data, "POST");
  }
  /**
    * Get single rule data.
    * GET /api2/json/nodes/{node}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $pos      Update rule at position <pos>.
  */
  public function firewallRulesPos($node, $pos)
  {
      return Request::Request("/nodes/$node/firewall/rules/$pos");
  }
  /**
    * Modify rule data.
    * PUT /api2/json/nodes/{node}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $pos      Update rule at position <pos>.
    * @param array    $data
  */
  public function setFirewallRulePos($node, $pos, $data = array())
  {
      return Request::Request("/nodes/$node/firewall/rules/$pos", $data, "PUT");
  }
  /**
    * Delete rule.
    * DELETE /api2/json/nodes/{node}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $pos      Update rule at position <pos>.
  */
  public function deleteFirewallRulePos($node, $pos)
  {
      return Request::Request("/nodes/$node/firewall/rules/$pos", null, 'DELETE');
  }
  /**
    * Read firewall log
    * GET /api2/json/nodes/{node}/firewall/rules/log
    * @param string   $node     The cluster node name.
  */
  public function firewallRulesLog($node)
  {
      return Request::Request("/nodes/$node/firewall/rules/log");
  }
  /**
    * Get host firewall options.
    * GET /api2/json/nodes/{node}/firewall/rules/options
    * @param string   $node     The cluster node name.
  */
  public function firewallRulesOptions($node)
  {
      return Request::Request("/nodes/$node/firewall/rules/options");
  }
  /**
    * Set Firewall options.
    * PUT /api2/json/nodes/{node}/firewall/rules/options
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function setFirewallRuleOptions($node, $data = array())
  {
      return Request::Request("/cluster/firewall/options", $data, "PUT");
  }
  /**
    * LXC container index (per node).
    * GET /api2/json/nodes/{node}/lxc
    * @param string   $node     The cluster node name.
  */
  public function Lxc($node)
  {
      return Request::Request("/nodes/$node/lxc");
  }
  /**
    * Create or restore a container.
    * POST /api2/json/nodes/{node}/lxc
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createLxc($node, $data = array())
  {
      return Request::Request("/nodes/$node/lxc", $data, "POST");
  }
  /**
    * Directory index
    * GET /api2/json/nodes/{node}/lxc/{vmid}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function LxcVmid($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid");
  }
  /**
    * Destroy the container (also delete all uses files).
    * DELETE /api2/json/nodes/{node}/lxc/{vmid}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function deleteLxc($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid", null,"DELETE");
  }
  /**
    * Directory index.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/aliases
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFirewall($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall");
  }
  /**
    * List aliases
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/aliases
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFirewallAliases($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/aliases");
  }
  /**
    * Create IP or Network Alias
    * POST /api2/json/nodes/{node}/lxc/{vmid}/firewall/aliases
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createLxcFirewallAliase($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/aliases", $data, 'POST');
  }
  /**
    * Read alias.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/aliases/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     Alias name.
  */
  public function lxcFirewallAliasesName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/aliases/$name");
  }
  /**
    * Update IP or Network alias
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/firewall/aliases/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     Alias name.
    * @param array    $data
  */
  public function updateLxcFirewallAliaseName($node, $vmid, $name, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/aliases/$name", $data, 'PUT');
  }
  /**
    * Remove IP or Network alias.
    * DELETE /api2/json/nodes/{node}/lxc/{vmid}/firewall/aliases/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     Alias name.
  */
  public function deleteLxcFirewallAliaseName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/aliases/$name", null, 'DELETE');
  }
  /**
    * List IPSets
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFirewallIpset($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset");
  }
  /**
    * Create new IPSet
    * POST /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createLxcFirewallIpset($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset", $data, "POST");
  }
  /**
    * List IPSet content
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
  */
  public function lxcFirewallIpsetName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset/$name");
  }
  /**
    * Add IP or Network to IPSet.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param array    $data
  */
  public function addLxcFirewallIpsetName($node, $vmid, $name, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset/$name", $data, 'POST');
  }
  /**
    * Delete IPSet
    * DELETE /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
  */
  public function deleteLxcFirewallIpsetName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset/$name", null, 'DELETE');
  }
  /**
    * Read IP or Network settings from IPSet.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset/{name}/{cidr}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param string   $cidr     Network/IP specification in CIDR format.
  */
  public function lxcFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset/$name/$cidr");
  }
  /**
    * Update IP or Network settings
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset/{name}/{cidr}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param string   $cidr     Network/IP specification in CIDR format.
    * @param array    $data
  */
  public function updateLxcFirewallIpsetNameCidr($node, $vmid, $name, $cidr, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset/$name/$cidr", $data, 'PUT');
  }
  /**
    * Remove IP or Network settings
    * DELETE /api2/json/nodes/{node}/lxc/{vmid}/firewall/ipset/{name}/{cidr}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param string   $cidr     Network/IP specification in CIDR format.
  */
  public function deleteLxcFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/ipset/$name/$cidr", null, 'DELETE');
  }
  /**
    * List rules.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/rules
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFirewallRules($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/rules");
  }
  /**
    * Create new rule.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/firewall/rules
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createLxcFirewallRules($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/rules", $data, 'POST');
  }
  /**
    * Get single rule data.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFirewallRulesPos($node, $vmid, $pos)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/rules/$pos");
  }
  /**
    * Modify rule data.
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function setLxcFirewallRulesPos($node, $vmid, $pos, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/rules/$pos", $data, "PUT");
  }
  /**
    * Delete rule.
    * DELETE /api2/json/nodes/{node}/lxc/{vmid}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function deleteLxcFirewallRulesPos($node, $vmid, $pos)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/rules/$pos", null, "DELETE");
  }
  /**
    * Read firewall log
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/log
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param integer  $limit
    * @param integer  $start
  */
  public function lxcFirewallLog($node, $vmid, $limit = null, $start = null)
  {
      $optional['limit'] = !empty($limit) ? $limit : 50;
      $optional['start'] = !empty($start) ? $start : 0;
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/log", $optional);
  }
  /**
    * Get VM firewall options.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/firewall/options
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFirewallOptions($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/options");
  }
  /**
    * Set Firewall options.
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/firewall/options
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function setLxcFirewallOptions($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/firewall/options", $data, 'PUT');
  }
  /**
    * List all snapshots.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/snapshot
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcSnapshot($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot");
  }
  /**
    * Snapshot a container.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/snapshot
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createLxcSnapshot($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot", $data, 'POST');
  }
  /**
    * List all snapshots.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/snapshot/{snapname}
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param string   $snapname     The name of the snapshot.
  */
  public function lxcSnapname($node, $vmid, $snapname)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot/$snapname");
  }
  /**
    * Delete a LXC snapshot.
    * DELETE /api2/json/nodes/{node}/lxc/{vmid}/snapshot/{snapname}
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param string   $snapname     The name of the snapshot.
  */
  public function deleteLxcSnapshot($node, $vmid, $snapname)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot/$snapname", null, 'DELETE');
  }
  /**
    * Get snapshot configuration
    * GET /api2/json/nodes/{node}/lxc/{vmid}/snapshot/{snapname}/config
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param string   $snapname     The name of the snapshot.
  */
  public function lxcSnapnameConfig($node, $vmid, $snapname)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot/$snapname/config");
  }
  /**
    * Update snapshot metadata.
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/snapshot/{snapname}/config
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param string   $snapname     The name of the snapshot.
    * @param array    $data
  */
  public function lxcSnapshotConfig($node, $vmid, $snapname, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot/$snapname/config", $data, 'PUT');
  }
  /**
    * Rollback LXC state to specified snapshot.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/snapshot/{snapname}/rollback
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param string   $snapname    The name of the snapshot.
    * @param array    $data
  */
  public function lxcSnapshotRollback($node, $vmid, $snapname, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/snapshot/$snapname/rollback", $data, 'POST');
  }
  /**
    * Directory index
    * GET /api2/json/nodes/{node}/lxc/{vmid}/status
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcStatus($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status");
  }
  /**
    * Get virtual machine status.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/status/current
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcCurrent($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/current");
  }
  /**
    * Resume the container.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/status/resume
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcResume($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/resume", $data, 'POST');
  }
  /**
    * Shutdown the container. This will trigger a clean shutdown of the container, see lxc-stop(1) for details.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/status/shutdown
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcShutdown($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/shutdown", $data, 'POST');
  }
  /**
    * Start the container.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/status/start
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcStart($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/start", $data, 'POST');
  }
  /**
    * Stop the container. This will abruptly stop all processes running in the container.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/status/stop
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcStop($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/stop", $data, 'POST');
  }
  /**
    * Suspend the container.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/status/suspend
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
    public function lxcReboot($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/reboot", $data, 'POST');
  }
    /**
    * Reboot the container.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/status/reboot
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcSuspend($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/status/suspend", $data, 'POST');
  }
  /**
    * Create a container clone/copy
    * POST /api2/json/nodes/{node}/lxc/{vmid}/clone
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcClone($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/clone", $data, 'POST');
  }
  /**
    * Get container configuration.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/config
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcConfig($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/config");
  }
  /**
    * Set container options.
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/config
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function setLxcConfig($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/config", $data, 'PUT');
  }
  /**
    * Check if feature for virtual machine is available.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/feature
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function lxcFeature($node, $vmid)
  {
      return Request::Request("/nodes/$node/lxc/$vmid/feature");
  }
  /**
    * Migrate the container to another node. Creates a new migration task.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/migrate
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcMigrate($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/migrate", $data, 'POST');
  }
  /**
    * Resize a container mount point.
    * PUT /api2/json/nodes/{node}/lxc/{vmid}/resize
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcResize($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/resize", $data, 'PUT');
  }
  /**
    * Read VM RRD statistics (returns PNG)
    * GET /api2/json/nodes/{node}/lxc/{vmid}/rrd
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param string   $ds           The list of datasources you want to display.
    * @param enum     $timeframe    Specify the time frame you are interested in.
  */
  public function lxcRrd($node, $vmid, $ds = null, $timeframe = null)
  {
      $optional['ds'] = !empty($ds) ? $ds : null;
      $optional['timeframe'] = !empty($timeframe) ? $timeframe : null;
      return Request::Request("/nodes/$node/lxc/$vmid/rrd", $optional);
  }
  /**
    * Read VM RRD statistics
    * GET /api2/json/nodes/{node}/lxc/{vmid}/rrddata
    * @param string   $node         The cluster node name.
    * @param integer  $vmid         The (unique) ID of the VM.
    * @param enum     $timeframe    Specify the time frame you are interested in.
  */
  public function lxcRrddata($node, $vmid, $timeframe = null)
  {
      $optional['timeframe'] = !empty($timeframe) ? $timeframe : null;
      return Request::Request("/nodes/$node/lxc/$vmid/rrddata", $optional);
  }
  /**
    * Returns a SPICE configuration to connect to the CT.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/spiceproxy
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function lxcSpiceproxy($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/spiceproxy", $data, 'POST');
  }
  /**
    * Create a Template.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/template
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createLxcTemplate($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/template", $data, 'POST');
  }
  /**
    * Creates a TCP VNC proxy connections.
    * POST /api2/json/nodes/{node}/lxc/{vmid}/vncproxy
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createLxcVncproxy($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/lxc/$vmid/vncproxy", $data, 'POST');
  }
  /**
    * Opens a weksocket for VNC traffic.
    * GET /api2/json/nodes/{node}/lxc/{vmid}/vncwebsocket
    * @param string   $node       The cluster node name.
    * @param integer  $vmid       The (unique) ID of the VM.
    * @param integer  $port       Port number returned by previous vncproxy call.
    * @param string   $vncticket  Ticket from previous call to vncproxy.
  */
  public function lxcVncwebsocket($node, $vmid, $port = null, $vncticket = null)
  {
      $optional['port'] = !empty($port) ? $port : null;
      $optional['vncticket'] = !empty($vncticket) ? $vncticket : null;
      return Request::Request("/nodes/$node/lxc/$vmid/vncwebsocket", $optional);
  }
  /**
    * get List available networks
    * GET /api2/json/nodes/{node}/network
    * @param string   $node       The cluster node name.
    * @param enum     $type       Only list specific interface types.
  */
  public function Network($node, $type = null)
  {
      $optional['type'] = !empty($type) ? $type : null;
      return Request::Request("/nodes/$node/network", $optional);
  }
  /**
    * Create network device configuration
    * POST /api2/json/nodes/{node}/network
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createNetwork($node, $data = array())
  {
      return Request::Request("/nodes/$node/network", $data, 'POST');
  }
  /**
    * Revert network configuration changes.
    * DELETE /api2/json/nodes/{node}/network
    * @param string   $node     The cluster node name.
  */
  public function revertNetwork($node)
  {
      return Request::Request("/nodes/$node/network", null, 'DELETE');
  }
  /**
    * Network interface name.
    * GET /api2/json/nodes/{node}/network/{iface}
    * @param string   $node     The cluster node name.
    * @param string   $iface
  */
  public function networkIface($node, $iface)
  {
      return Request::Request("/nodes/$node/network/$iface");
  }
  /**
    * Update network device configuration
    * PUT /api2/json/nodes/{node}/network/{iface}
    * @param string   $node     The cluster node name.
    * @param string   $iface
    * @param array    $data
  */
  public function updateNetworkIface($node, $iface, $data = array())
  {
      return Request::Request("/nodes/$node/network/$iface", $data, 'PUT');
  }
  /**
    * Delete network device configuration
    * DELETE /api2/json/nodes/{node}/network/{iface}
    * @param string   $node     The cluster node name.
    * @param string   $iface
  */
  public function deleteNetworkIface($node, $iface)
  {
      return Request::Request("/nodes/$node/network/$iface", null, 'DELETE');
  }
  /**
    * Virtual machine index (per node).
    * GET /api2/json/nodes/{node}/qemu
    * @param string   $node     The cluster node name.
  */
  public function Qemu($node)
  {
      return Request::Request("/nodes/$node/qemu");
  }
  /**
    * Create or restore a virtual machine.
    * POST /api2/json/nodes/{node}/qemu
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createQemu($node, $data = array())
  {
      return Request::Request("/nodes/$node/qemu", $data, "POST");
  }
  /**
    * Directory index
    * GET /api2/json/nodes/{node}/qemu/{vmid}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function QemuVmid($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid");
  }
  /**
    * Destroy the vm (also delete all used/owned volumes)
    * DELETE /api2/json/nodes/{node}/qemu/{vmid}
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function deleteQemu($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid", $data, "DELETE");
  }
  /**
    * Directory index.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/aliases
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuFirewall($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall");
  }
  /**
    * List aliases
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/aliases
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuFirewallAliases($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/aliases");
  }
  /**
    * Create IP or Network Alias
    * POST /api2/json/nodes/{node}/qemu/{vmid}/firewall/aliases
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuFirewallAliase($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/aliases", $data, 'POST');
  }
  /**
    * Read alias.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/aliases/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     Alias name.
  */
  public function qemuFirewallAliasesName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/aliases/$name");
  }
  /**
    * Update IP or Network alias
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/firewall/aliases/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     Alias name.
    * @param array    $data
  */
  public function updateQemuFirewallAliaseName($node, $vmid, $name, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/aliases/$name", $data, 'PUT');
  }
  /**
    * Remove IP or Network alias.
    * DELETE /api2/json/nodes/{node}/qemu/{vmid}/firewall/aliases/{name}
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   $name    Alias name.
  */
  public function deleteQemuFirewallAliaseName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/aliases/$name", null, 'DELETE');
  }
  /**
    * List IPSets
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function qemuFirewallIpset($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset");
  }
  /**
    * Create new IPSet
    * POST /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuFirewallIpset($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset", $data, "POST");
  }
  /**
    * List IPSet content
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
  */
  public function qemuFirewallIpsetName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset/$name");
  }
  /**
    * Add IP or Network to IPSet.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param array    $data
  */
  public function addQemuFirewallIpsetName($node, $vmid, $name, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset/$name", $data, 'POST');
  }
  /**
    * Delete IPSet
    * DELETE /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset/{name}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
  */
  public function deleteQemuFirewallIpsetName($node, $vmid, $name)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset/$name", null, 'DELETE');
  }
  /**
    * Read IP or Network settings from IPSet.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset/{name}/{cidr}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param string   $cidr     Network/IP specification in CIDR format.
  */
  public function qemuFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset/$name/$cidr");
  }
  /**
    * Update IP or Network settings
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset/{name}/{cidr}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param string   $cidr     Network/IP specification in CIDR format.
    * @param array    $data
  */
  public function updateQemuFirewallIpsetNameCidr($node, $vmid, $name, $cidr, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset/$name/$cidr", $data, 'PUT');
  }
  /**
    * Remove IP or Network settings
    * DELETE /api2/json/nodes/{node}/qemu/{vmid}/firewall/ipset/{name}/{cidr}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param string   $name     IP set name.
    * @param string   $cidr     Network/IP specification in CIDR format.
  */
  public function deleteQemuFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/ipset/$name/$cidr", null, 'DELETE');
  }
  /**
    * List rules.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/rules
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function qemuFirewallRules($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/rules");
  }
  /**
    * Create new rule.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/firewall/rules
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuFirewallRules($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/rules", $data, 'POST');
  }
  /**
    * Get single rule data.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function qemuFirewallRulesPos($node, $vmid, $pos)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/rules/$pos");
  }
  /**
    * Modify rule data.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function updateQemuFirewallRulesPos($node, $vmid, $pos, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/rules/$pos", $data, "PUT");
  }
  /**
    * Delete rule.
    * DELETE /api2/json/nodes/{node}/qemu/{vmid}/firewall/rules/{pos}
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function deleteQemuFirewallRulesPos($node, $vmid, $pos)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/rules/$pos", null, "DELETE");
  }
  /**
    * Read firewall log
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/log
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param integer  $limit
    * @param integer  $start
  */
  public function qemuFirewallLog($node, $vmid, $limit = null, $start = null)
  {
      $optional['limit'] = !empty($limit) ? $limit : 50;
      $optional['start'] = !empty($start) ? $start : 0;
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/log", $optional);
  }
  /**
    * Get VM firewall options.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/options
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function qemuFirewallOptions($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/options");
  }
  /**
    * Set Firewall options.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/firewall/options
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function setQemuFirewallOptions($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/options", $data, 'PUT');
  }
  /**
    * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/firewall/refs
    * @param string   $node    The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function qemuFirewallRefs($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/firewall/refs");
  }
  /**
    * List all snapshots.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/snapshot
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public function qemuSnapshot($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot");
  }
  /**
    * Snapshot a VM.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/snapshot
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuSnapshot($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot", $data, 'POST');
  }
  /**
    * List all snapshots.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/snapshot/{snapname}
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   snapname The name of the snapshot.
  */
  public function qemuSnapname($node, $vmid, $snapname)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot/$snapname");
  }
  /**
    * Delete a VM snapshot.
    * DELETE /api2/json/nodes/{node}/qemu/{vmid}/snapshot/{snapname}
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   snapname The name of the snapshot.
  */
  public function deleteQemuSnapshot($node, $vmid, $snapname)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot/$snapname", null, 'DELETE');
  }
  /**
    * Get snapshot configuration
    * GET /api2/json/nodes/{node}/qemu/{vmid}/snapshot/{snapname}/config
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   snapname The name of the snapshot.
  */
  public function qemuSnapnameConfig($node, $vmid, $snapname)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot/$snapname/config");
  }
  /**
    * Update snapshot metadata.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/snapshot/{snapname}/config
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   snapname The name of the snapshot.
    * @param array    $data
  */
  public function updateQemuSnapshotConfig($node, $vmid, $snapname, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot/$snapname/config", $data, 'PUT');
  }
  /**
    * Rollback VM state to specified snapshot.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/snapshot/{snapname}/rollback
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   snapname The name of the snapshot.
    * @param array    $data
  */
  public function QemuSnapshotRollback($node, $vmid, $snapname, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/snapshot/$snapname/rollback", $data, 'POST');
  }
  /**
    * Directory index
    * GET /api2/json/nodes/{node}/qemu/{vmid}/status
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuStatus($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status");
  }
  /**
    * Get virtual machine status.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/status/current
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuCurrent($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/current");
  }
  /**
    * Resume the virtual machine.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/resume
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuResume($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/resume", $data, 'POST');
  }
  /**
    * Reset the virtual machine.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/reset
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuReset($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/reset", $data, 'POST');
  }
  /**
    * Shutdown virtual machine. This is similar to pressing the power button on a physical machine.This will send an ACPI event for the guest OS, which should then proceed to a clean shutdown.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/shutdown
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuShutdown($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/shutdown", $data, 'POST');
  }
  /**
    * Start the virtual machine.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/start
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuStart($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/start", $data, 'POST');
  }
  /**
    * Stop virtual machine. The qemu process will exit immediately. Thisis akin to pulling the power plug of a running computer and may damage the VM data
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/stop
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuStop($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/stop", $data, 'POST');
  }
  /**
    * Reboot virtual machine.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/reboot
    * @param string   $node     The cluster node name.
    * @param integer  $vmid     The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuReboot($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/reboot", $data, 'POST');
  }
  /**
    * Suspend the  virtual machine.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/suspend
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuSuspend($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/suspend", $data, 'POST');
  }
  /**
    * Execute Qemu Guest Agent commands.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/agent
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuAgent($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/status/agent", $data, 'POST');
  }
  /**
    * Execute command via Qemu Guest Agent.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/status/agent/exec
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuAgentExec($node, $vmid, $data = array())
  {
    return Request::Request("/nodes/$node/qemu/$vmid/agent/exec", $data, 'POST');
  }
  /**
    * Change user password via Qemu Guest Agent.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/agent/set-user-password
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuAgentSetUserPassword($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/agent/set-user-password", $data, 'POST');
  }
  /**
    * Create a copy of virtual machine/template
    * POST /api2/json/nodes/{node}/qemu/{vmid}/clone
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuClone($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/clone", $data, 'POST');
  }
  /**
    * Get current virtual machine configuration. This does not include pending configuration changes (see 'pending' API).
    * GET /api2/json/nodes/{node}/qemu/{vmid}/config
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuConfig($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/config");
  }
  /**
    * Set virtual machine options (asynchrounous API).
    * POST /api2/json/nodes/{node}/qemu/{vmid}/config
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuConfig($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/config", $data, 'POST');
  }
  /**
    * Set virtual machine options (synchrounous API) - You should consider using the POST method instead for any actions involving hotplug or storage allocation.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/config
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function setQemuConfig($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/config", $data, 'PUT');
  }
  /**
    * Check if feature for virtual machine is available.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/feature
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuFeature($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/feature");
  }
  /**
    * Migrate virtual machine. Creates a new migration task.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/migrate
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuMigrate($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/migrate", $data, 'POST');
  }
  /**
    * Execute Qemu monitor commands.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/monitor
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuMonitor($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/monitor", $data, 'POST');
  }
  /**
    * Move volume to different storage.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/move_disk
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuMoveDisk($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/move_disk", $data, 'POST');
  }
  /**
    * Get virtual machine configuration, including pending changes.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/pending
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
  */
  public function qemuPending($node, $vmid)
  {
      return Request::Request("/nodes/$node/qemu/$vmid/pending");
  }
  /**
    * Extend volume size.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/resize
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuResize($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/resize", $data, 'PUT');
  }
  /**
    * Read VM RRD statistics (returns PNG)
    * GET /api2/json/nodes/{node}/qemu/{vmid}/rrd
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param string   $ds      The list of datasources you want to display.
    * @param enum     $timeframe   Specify the time frame you are interested in.
  */
  public function qemuRrd($node, $vmid, $ds = null, $timeframe = null)
  {
      $optional['ds'] = !empty($ds) ? $ds : null;
      $optional['timeframe'] = !empty($timeframe) ? $timeframe : null;
      return Request::Request("/nodes/$node/qemu/$vmid/rrd", $optional);
  }
  /**
    * Read VM RRD statistics
    * GET /api2/json/nodes/{node}/qemu/{vmid}/rrddata
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param enum     $timeframe   Specify the time frame you are interested in.
  */
  public function qemuRrddata($node, $vmid, $timeframe = null)
  {
      $optional['timeframe'] = !empty($timeframe) ? $timeframe : null;
      return Request::Request("/nodes/$node/qemu/$vmid/rrddata", $optional);
  }
  /**
    * Send key event to virtual machine.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/sendkey
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuSendkey($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/sendkey", $data, 'PUT');
  }
  /**
    * Returns a SPICE configuration to connect to the CT.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/spiceproxy
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuSpiceproxy($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/spiceproxy", $data, 'POST');
  }
  /**
    * Create a Template.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/template
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuTemplate($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/template", $data, 'POST');
  }
  /**
    * Unlink/delete disk images.
    * PUT /api2/json/nodes/{node}/qemu/{vmid}/unlink
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function qemuUnlink($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/unlink", $data, 'PUT');
  }
  /**
    * Creates a TCP VNC proxy connections.
    * POST /api2/json/nodes/{node}/qemu/{vmid}/vncproxy
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param array    $data
  */
  public function createQemuVncproxy($node, $vmid, $data = array())
  {
      return Request::Request("/nodes/$node/qemu/$vmid/vncproxy", $data, 'POST');
  }
  /**
    * Opens a weksocket for VNC traffic.
    * GET /api2/json/nodes/{node}/qemu/{vmid}/vncwebsocket
    * @param string   $node    The cluster node name.
    * @param integer  $vmid    The (unique) ID of the VM.
    * @param integer  $port    Port number returned by previous vncproxy call.
    * @param string   $vncticket  Ticket from previous call to vncproxy.
  */
  public function qemuVncwebsocket($node, $vmid, $port = null, $vncticket = null)
  {
      $optional['port'] = !empty($port) ? $port : null;
      $optional['vncticket'] = !empty($vncticket) ? $vncticket : null;
      return Request::Request("/nodes/$node/qemu/$vmid/vncwebsocket", $optional);
  }
  /**
    * List HA resources.
    * GET /api2/json/nodes/{node}/replication
    * @param string   $node    The cluster node name.
  */
  public function Replication($node)
  {
      return Request::Request("/nodes/$node/replication");
  }
  /**
    * Read replication job configuration.
    * GET /api2/json/nodes/{node}/replication/{id}
    * @param string   $node    The cluster node name.
    * @param string   $id      Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public function replicationId($node, $id)
  {
      return Request::Request("/nodes/$node/replication/$id");
  }
  /**
    * Read replication job log.
    * GET /api2/json/nodes/{node}/replication/{id}/log
    * @param string   $node    The cluster node name.
    * @param string   $id      Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public function replicationLog($node, $id)
  {
      return Request::Request("/nodes/$node/replication/$id/log");
  }
  /**
    * Schedule replication job to start as soon as possible.
    * POST /api2/json/nodes/{node}/replication/{id}/schedule_now
    * @param string   $node    The cluster node name.
    * @param string   $id      Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
    * @param array    $data
  */
  public function replicationScheduleNow($node, $id, $data = array())
  {
      return Request::Request("/nodes/$node/replication/$id/schedule_now", $data, 'POST');
  }
  /**
    * Get replication job status.
    * GET /api2/json/nodes/{node}/replication/{id}/status
    * @param string   $node    The cluster node name.
    * @param string   $id      Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public function replicationStatus($node, $id)
  {
      return Request::Request("/nodes/$node/replication/$id/status");
  }
  /**
    * Index of available scan methods
    * GET /api2/json/nodes/{node}/scan
    * @param string   $node    The cluster node name.
  */
  public function Scan($node)
  {
      return Request::Request("/nodes/$node/scan");
  }
  /**
    * Scan remote GlusterFS server.
    * GET /api2/json/nodes/{node}/scan/glusterfs
    * @param string   $node    The cluster node name.
  */
  public function scanGlusterfs($node)
  {
      return Request::Request("/nodes/$node/scan/glusterfs");
  }
  /**
    * Scan remote iSCSI server.
    * GET /api2/json/nodes/{node}/scan/iscsi
    * @param string   $node    The cluster node name.
  */
  public function scanIscsi($node)
  {
      return Request::Request("/nodes/$node/scan/iscsi");
  }
  /**
    * List local LVM volume groups.
    * GET /api2/json/nodes/{node}/scan/lvm
    * @param string   $node    The cluster node name.
  */
  public function scanLvm($node)
  {
      return Request::Request("/nodes/$node/scan/lvm");
  }
  /**
    * List local LVM Thin Pools.
    * GET /api2/json/nodes/{node}/scan/lvmthin
    * @param string   $node    The cluster node name.
  */
  public function scanLvmthin($node)
  {
      return Request::Request("/nodes/$node/scan/lvmthin");
  }
  /**
    * List local USB devices.
    * GET /api2/json/nodes/{node}/scan/usb
    * @param string   $node    The cluster node name.
  */
  public function scanUsb($node)
  {
      return Request::Request("/nodes/$node/scan/usb");
  }
  /**
    * Scan zfs pool list on local node.
    * GET /api2/json/nodes/{node}/scan/zfs
    * @param string   $node    The cluster node name.
  */
  public function scanZfs($node)
  {
      return Request::Request("/nodes/$node/scan/zfs");
  }
  /**
    * Service list.
    * GET /api2/json/nodes/{node}/services
    * @param string   $node    The cluster node name.
  */
  public function Services($node)
  {
      return Request::Request("/nodes/$node/services");
  }
  /**
    * Service list.
    * GET /api2/json/nodes/{node}/services/{service}/reload
    * @param string   $node     The cluster node name.
    * @param enum     $service  Service ID
  */
  public function listService($node, $service)
  {
      return Request::Request("/nodes/$node/services/$service");
  }
  /**
    * Reload service.
    * POST /api2/json/nodes/{node}/services/{service}/reload
    * @param string   $node     The cluster node name.
    * @param enum     $service  Service ID
    * @param array    $data
  */
  public function servicesReload($node, $service, $data = array())
  {
      return Request::Request("/nodes/$node/services/$service/reload", $data, 'POST');
  }
  /**
    * Restart service.
    * POST /api2/json/nodes/{node}/services/{service}/restart
    * @param string   $node     The cluster node name.
    * @param enum     $service  Service ID
    * @param array    $data
  */
  public function servicesRestart($node, $service, $data = array())
  {
      return Request::Request("/nodes/$node/services/$service/restart", $data, 'POST');
  }
  /**
    * Start service.
    * POST /api2/json/nodes/{node}/services/{service}/start
    * @param string   $node     The cluster node name.
    * @param enum     $service  Service ID
    * @param array    $data
  */
  public function servicesStart($node, $service, $data = array())
  {
      return Request::Request("/nodes/$node/services/$service/start", $data, 'POST');
  }
  /**
    * Stop service.
    * POST /api2/json/nodes/{node}/services/{service}/stop
    * @param string   $node     The cluster node name.
    * @param enum     $service  Service ID
    * @param array    $data
  */
  public function servicesStop($node, $service, $data = array())
  {
      return Request::Request("/nodes/$node/services/$service/stop", $data, 'POST');
  }
  /**
    * Read service properties
    * GET /api2/json/nodes/{node}/services
    * @param string   $node     The cluster node name.
    * @param enum     $service  Service ID
  */
  public function servicesState($node, $service)
  {
      return Request::Request("/nodes/$node/services/$service/state");
  }
  /**
    * Get status for all datastores.
    * GET /api2/json/nodes/{node}/storage
    * @param string   $node     The cluster node name.
    * @param string   $content  Only list stores which support this content type.
    * @param string   $storage  Only list status for specified storage
    * @param string   $target   If target is different to 'node', we only lists shared storages which content is accessible on this 'node' and the specified 'target' node.
    * @param boolean  $enabled  Only list stores which are enabled (not disabled in config).
  */
  public function Storage($node, $content = null, $storage = null, $target = null, $enabled = null)
  {
      $optional['content']  = !empty($content) ? $content : null;
      $optional['storage']  = !empty($storage) ? $storage : null;
      $optional['target']   = !empty($target) ? $target : null;
      $optional['enabled']  = !empty($enabled) ? $enabled : null;
      return Request::Request("/nodes/$node/storage", $optional);
  }
  /**
    * Get status datastores.
    * GET /api2/json/nodes/{node}/storage/{storage}
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function getStorage($node, $storage)
  {
      return Request::Request("/nodes/$node/storage/$storage");
  }
  /**
    * List storage content.
    * GET /api2/json/nodes/{node}/storage/{storage}/content
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function listStorageContent($node, $storage)
  {
      return Request::Request("/nodes/$node/storage/$storage/content");
  }
  /**
    * Allocate disk images.
    * POST /api2/json/nodes/{node}/storage/{storage}/content
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
    * @param array    $data
  */
  public function storageContent($node, $storage, $data = array())
  {
      return Request::Request("/nodes/$node/storage/$storage/content", $data, "POST");
  }
  /**
    * GET volume attributes
    * GET /api2/json/nodes/{node}/storage/{storage}/content/{volume}
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function storageContentVolume($node, $storage, $volume)
  {
      return Request::Request("/nodes/$node/storage/$storage/content/$volume");
  }
  /**
    * Copy a volume. This is experimental code - do not use.
    * POST /api2/json/nodes/{node}/storage/{storage}/content/{volume}
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
    * @param array    $data
  */
  public function copyStorageContentVolume($node, $storage, $volume, $data = array())
  {
      return Request::Request("/nodes/$node/storage/$storage/content/$volume", $data, "POST");
  }
  /**
    * Delete volume
    * DELETE /api2/json/nodes/{node}/storage/{storage}/content/{volume}
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function deleteStorageContentVolume($node, $storage, $volume)
  {
      return Request::Request("/nodes/$node/storage/$storage/content/$volume", null, "DELETE");
  }
  /**
    * Read storage RRD statistics (returns PNG)
    * GET /api2/json/nodes/{node}/storage/rrd
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function storageRRD($node)
  {
      return Request::Request("/nodes/$node/storage/rrd");
  }
  /**
    * Read storage RRD statistics.
    * GET /api2/json/nodes/{node}/storage/rrddata
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function storageRRDdata($node)
  {
      return Request::Request("/nodes/$node/storage/rrddata");
  }
  /**
    * Read storage status.
    * GET /api2/json/nodes/{node}/storage/status
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
  */
  public function storageStatus($node)
  {
      return Request::Request("/nodes/$node/storage/status");
  }
  /**
    * Upload templates and ISO images.
    * GET /api2/json/nodes/{node}/storage/upload
    * @param string   $node     The cluster node name.
    * @param string   $storage  The storage identifier.
    * @param array    $data
  */
  public function storageUpload($node, $data = array())
  {
      return Request::Request("/nodes/$node/storage/upload", $data, "POST");
  }
  /**
    * Read task list for one node (finished tasks).
    * GET /api2/json/nodes/{node}/tasks
    * @param string   $node     The cluster node name.
    * @param boolean  $errors
    * @param integer  $limit
    * @param integer  $vmid     Only list tasks for this VM.
    * @param integer  $start
  */
  public function Tasks($node, $errors = null, $limit = null, $vmid = null, $start = null)
  {
      $optional['errors']  = !empty($errors) ? $errors : false;
      $optional['limit']   = !empty($limit) ? $limit : null;
      $optional['vmid']    = !empty($vmid) ? $vmid : null;
      $optional['start']   = !empty($start) ? $start : null;
      return Request::Request("/nodes/$node/tasks", $optional);
  }
  /**
    * Read task upid
    * GET /api2/json/nodes/{node}/tasks/{upid}
    * @param string   $node     The cluster node name.
    * @param string   $upid
  */
  public function tasksUpid($node, $upid)
  {
      return Request::Request("/nodes/$node/tasks/$upid");
  }
  /**
    * Stop a task.
    * DELETE /api2/json/nodes/{node}/tasks/{upid}
    * @param string   $node     The cluster node name.
    * @param string   $upid
  */
  public function tasksStop($node, $upid)
  {
      return Request::Request("/nodes/$node/tasks/$upid", null, "DELETE");
  }
  /**
    * Read task log.
    * GET /api2/json/nodes/{node}/tasks/{upid}/log
    * @param string   $node     The cluster node name.
    * @param string   $upid
    * @param integer  $limit
    * @param integer  $start
  */
  public function tasksLog($node, $upid, $limit = null, $start = null)
  {
      $optional['limit']   = !empty($limit) ? $limit : null;
      $optional['start']   = !empty($start) ? $start : null;
      return Request::Request("/nodes/$node/tasks/$upid/log", $optional);
  }
  /**
    * Read task status.
    * GET /api2/json/nodes/{node}/tasks/{upid}/status
    * @param string   $node     The cluster node name.
    * @param string   $upid
  */
  public function tasksStatus($node, $upid)
  {
      return Request::Request("/nodes/$node/tasks/$upid/status");
  }
  /**
    * Create backup.
    * POST /api2/json/nodes/{node}/vzdump
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createVzdump($node, $data = array())
  {
      return Request::Request("/nodes/$node/vzdump", $data, "POST");
  }
  /**
    * Extract configuration from vzdump backup archive
    * GET /api2/json/nodes/{node}/vzdump/extractconfig
    * @param string   $node     The cluster node name.
  */
  public function VzdumpExtractConfig($node)
  {
      return Request::Request("/nodes/$node/vzdump/extractconfig");
  }
  /**
    * Get list of appliances.
    * GET /api2/json/nodes/{node}/aplinfo
    * @param string   $node     The cluster node name.
  */
  public function Aplinfo($node)
  {
      return Request::Request("/nodes/$node/aplinfo");
  }
  /**
    * Download appliance templates.
    * POST /api2/json/nodes/{node}/aplinfo
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function downloadTemplate($node, $data = array())
  {
      return Request::Request("/nodes/$node/aplinfo", $data, "POST");
  }
  /**
    * Get list of appliances.
    * GET /api2/json/nodes/{node}/dns
    * @param string   $node     The cluster node name.
  */
  public function Dns($node)
  {
      return Request::Request("/nodes/$node/dns");
  }
  /**
    * Write DNS settings.
    * PUT /api2/json/nodes/{node}/dns
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function setDns($node, $data = array())
  {
      return Request::Request("/nodes/$node/dns", $data, "PUT");
  }
  /**
    * Execute multiple commands in order
    * POST /api2/json/nodes/{node}/execute
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function Execute($node, $data = array())
  {
      return Request::Request("/nodes/$node/execute", $data, "POST");
  }
  /**
    * Migrate all VMs and Containers
    * POST /api2/json/nodes/{node}/migrateall
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function MigrateAll($node, $data = array())
  {
      return Request::Request("/nodes/$node/migrateall", $data, "POST");
  }
  /**
    * Read tap/vm network device interface counters
    * GET /api2/json/nodes/{node}/netstat
    * @param string   $node     The cluster node name.
  */
  public function Netstat($node)
  {
      return Request::Request("/nodes/$node/netstat");
  }
  /**
    * Gather various systems information about a node
    * GET /api2/json/nodes/{node}/report
    * @param string   $node     The cluster node name.
  */
  public function Report($node)
  {
      return Request::Request("/nodes/$node/report");
  }
  /**
    * Read node RRD statistics (returns PNG)
    * GET /api2/json/nodes/{node}/rrd
    * @param string   $node         The cluster node name.
    * @param string   $ds           The list of datasources you want to display.
    * @param enum     $timeframe    Specify the time frame you are interested in.
  */
  public function Rrd($node, $ds = null, $timeframe = null)
  {
      $optional['ds'] = !empty($ds) ? $ds : null;
      $optional['timeframe'] = !empty($timeframe) ? $timeframe : null;
      return Request::Request("/nodes/$node/rrd", $optional);
  }
  /**
    * Read node RRD statistics
    * GET /api2/json/nodes/{node}/rrddata
    * @param string   $node         The cluster node name.
    * @param enum     $timeframe    Specify the time frame you are interested in.
  */
  public function Rrddata($node, $timeframe = null)
  {
      $optional['timeframe'] = !empty($timeframe) ? $timeframe : null;
      return Request::Request("/nodes/$node/rrddata", $optional);
  }
  /**
    * Creates a SPICE shell
    * POST /api2/json/nodes/{node}/spiceshell
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function SpiceShell($node, $data = array())
  {
      return Request::Request("/nodes/$node/spiceshell", $data, "POST");
  }
  /**
    * Start all VMs and containers (when onboot=1)
    * POST /api2/json/nodes/{node}/startall
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function StartAll($node, $data = array())
  {
      return Request::Request("/nodes/$node/startall", $data, "POST");
  }
  /**
    * Reboot or shutdown a node
    * POST /api2/json/nodes/{node}/status
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function Reboot($node, $data = array())
  {
      return Request::Request("/nodes/$node/status", $data, "POST");
  }
  /**
    * Stop all VMs and Containers.
    * POST /api2/json/nodes/{node}/stopall
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function StopAll($node, $data = array())
  {
      return Request::Request("/nodes/$node/stopall", $data, "POST");
  }
  /**
    * Read subscription info.
    * GET /api2/json/nodes/{node}/subscription
    * @param string   $node     The cluster node name.
  */
  public function Subscription($node)
  {
      return Request::Request("/nodes/$node/subscription");
  }
  /**
    * Update subscription info.
    * POST /api2/json/nodes/{node}/subscription
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function updateSubscription($node, $data = array())
  {
      return Request::Request("/nodes/$node/subscription", $data, "POST");
  }
  /**
    * Set subscription key.
    * PUT /api2/json/nodes/{node}/subscription
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function setSubscription($node, $data = array())
  {
      return Request::Request("/nodes/$node/subscription", $data, "PUT");
  }
  /**
    * Read system log
    * GET /api2/json/nodes/{node}/syslog
    * @param string   $node     The cluster node name.
    * @param integer  $limit
    * @param integer  $start
    * @param string   $since    Display all log since this date-time string.
    * @param string   $until    Display all log until this date-time string.
  */
  public function Syslog($node, $limit = null, $start = null, $since = null, $until = null)
  {
      $optional['limit'] = !empty($limit) ? $limit : 50;
      $optional['start'] = !empty($start) ? $start : null;
      $optional['since'] = !empty($since) ? $since : null;
      $optional['until'] = !empty($until) ? $until : null;
      return Request::Request("/nodes/$node/syslog", $optional);
  }
  /**
    * Read server time and time zone settings.
    * GET /api2/json/nodes/{node}/time
    * @param string   $node     The cluster node name.
  */
  public function Time($node)
  {
      return Request::Request("/nodes/$node/time");
  }
  /**
    * PUT time zone.
    * PUT /api2/json/nodes/{node}/time
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function setTime($node, $data = array())
  {
      return Request::Request("/nodes/$node/time", $data, "PUT");
  }
  /**
    * API version details
    * GET /api2/json/nodes/{node}/version
    * @param string   $node     The cluster node name.
  */
  public function Version($node)
  {
      return Request::Request("/nodes/$node/version");
  }
  /**
    * Creates a VNC Shell proxy.
    * POST /api2/json/nodes/{node}/vncshell
    * @param string   $node     The cluster node name.
    * @param array    $data
  */
  public function createVNCShell($node, $data = array())
  {
      return Request::Request("/nodes/$node/vncshell", $data, "POST");
  }
  /**
    * Opens a weksocket for VNC traffic.
    * GET /api2/json/nodes/{node}/vncwebsocket
    * @param string   $node       The cluster node name.
    * @param integer  $port       Port number returned by previous vncproxy call.
    * @param string   $vncticket  Ticket from previous call to vncproxy.
  */
  public function VNCWebSocket($node, $port = null, $vncticket = null)
  {
      $optional['port'] = !empty($port) ? $port : null;
      $optional['vncticket'] = !empty($vncticket) ? $vncticket : null;
      return Request::Request("/nodes/$node/vncwebsocket", $optional);
  }
}
