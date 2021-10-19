![ProxmoxVE_PHP_API](https://upload.wikimedia.org/wikipedia/en/thumb/2/25/Proxmox-VE-logo.svg/600px-Proxmox-VE-logo.svg.png)

# ProxmoxVE PHP API

## Table of Contents
- [ProxmoxVE PHP API](#proxmoxve-php-api)
  - [Table of Contents](#table-of-contents)
  - [Installation](#installation)
  - [Usage](#usage)
    - [Quick Usage](#quick-usage)
    - [Use API Token](#use-api-token)
    - [Example](#example)
    - [Create LXC container](#create-lxc-container)
    - [Delete LXC container](#delete-lxc-container)
    - [Create VM](#create-vm)
    - [Delete VM](#delete-vm)
  - [Request](#request)
  - [Access](#access)
  - [Domains](#domains)
  - [Groups](#groups)
  - [Roles](#roles)
  - [Users](#users)
  - [Cluster](#cluster)
  - [Backup](#backup)
  - [Config](#config)
  - [Firewall](#firewall)
  - [HA](#ha)
  - [Replication](#replication)
  - [Pools](#pools)
  - [Storage](#storage)
  - [Nodes](#nodes)
  - [Apt](#apt)
  - [Ceph](#ceph)
  - [Disks](#disks)
  - [Nodes Firewall](#nodes-firewall)
  - [Lxc](#lxc)
  - [Network](#network)
  - [Qemu](#qemu)
  - [Nodes Replication](#nodes-replication)
  - [Scan](#scan)
  - [Service](#service)
  - [Nodes Storage](#nodes-storage)
  - [Tasks](#tasks)
  - [Vzdump](#vzdump)


## Installation
To install ProxmoxVE_PHP_API, simply:

```bash
composer require saleh7/proxmox-ve_php_api @dev
```

## Usage

### Quick Usage

```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;

$configure = [
    'hostname' => '0.0.0.0',
    'username' => 'root',
    'password' => 'password'
];
Request::Login($configure); // Login ..

// Request($path, array $params = null, $method="GET")
print_r( Request::Request('/nodes', null, 'GET') ); // List Nodes
```

### Use API Token
```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;
use Proxmox\Access;
use Proxmox\Cluster;
use Proxmox\Nodes;
use Proxmox\Pools;
use Proxmox\Storage;

$configure = [
    'hostname' => '0.0.0.0',
    'username' => 'root',
    'token_name' => 'apitoken',
    'token_value' => '00000000-0000-0000-0000-000000000000'
];
Request::Login($configure); // Login ..
print_r( Access::listNodes() ); // List Nodes
```

### Example
```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;
use Proxmox\Access;
use Proxmox\Cluster;
use Proxmox\Nodes;
use Proxmox\Pools;
use Proxmox\Storage;

$configure = [
    'hostname' => '0.0.0.0',
    'username' => 'root',
    'password' => 'password',
];
Request::Login($configure); // Login ..
print_r( Access::listNodes() ); // List Nodes
```

### Create LXC container

```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;
use Proxmox\Cluster;
use Proxmox\Nodes;

$configure = [
  'hostname' => '0.0.0.0',
  'username' => 'root',
  'password' => 'password',
];
Request::Login($configure); // Login ..

# Create container
$nextId = Cluster::nextVmid(); // get next vmid
$create = [
  'vmid'        => $nextId->data,
  'cores'       => 1,
  'hostname'    => 'testApi',
  'rootfs'      => 'local:8',
  'memory'      => 512,
  'swap'        => 512,
  'ostemplate'  => 'local:vztmpl/ubuntu-16.04-standard_16.04-1_amd64.tar.gz',
  'net0'        => 'bridge=vmbr0,hwaddr=00:00:00:00:00:00,name=eth0,ip=0.0.0.0/32,gw=0.0.0.0'
];
# Get first node name.
$firstNode = Nodes::listNodes()->data[0]->node;
print_r( Nodes::createLxc($firstNode, $create) );
// print_r( Nodes::createLxc('Name_Nodes', $create) );

```

### Delete LXC container

```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;
use Proxmox\Nodes;

$configure = [
  'hostname' => '0.0.0.0',
  'username' => 'root',
  'password' => 'password',
];
Request::Login($configure); // Login ..

# Get first node name.
$firstNode = Nodes::listNodes()->data[0]->node;
# Delete container
$vmid = 106;
print_r( Nodes::deleteLxc($firstNode, $vmid) );
// print_r( Nodes::deleteLxc('Name_Nodes', $vmid) );
```

### Create VM

```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;
use Proxmox\Cluster;
use Proxmox\Nodes;

$configure = [
  'hostname' => '0.0.0.0',
  'username' => 'root',
  'password' => 'password',
];
Request::Login($configure); // Login ..

# Create VM
$nextId = Cluster::nextVmid(); // get next vmid
$create = [
  'vmid'        => $nextId->data,
  'cores'       => 1,
  'name'        => 'testApi',
  'scsi0'       => 'local:32,format=qcow2'
];
# Get first node name.
$firstNode = Nodes::listNodes()->data[0]->node;
print_r( Nodes::createQemu($firstNode, $create) );
// print_r( Nodes::createQemu('Name_Nodes', $create) );
```

### Delete VM

```php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;
use Proxmox\Nodes;

$configure = [
  'hostname' => '0.0.0.0',
  'username' => 'root',
  'password' => 'password',
];
Request::Login($configure); // Login ..

# Get first node name.
$firstNode = Nodes::listNodes()->data[0]->node;
# Delete VM
$vmid = 104;
print_r( Nodes::deleteQemu($firstNode, $vmid) );
// print_r( Nodes::deleteQemu('Name_Nodes', $vmid) );
```
## Request

```php
Request::Login(array $configure, $verifySSL = false)
Request::Request($path, array $params = null, $method="GET")
```

## Access

```php
Access::Access()
Access::Acl()
Access::updateAcl($data = array())
Access::createTicket($data = array())
```

## Domains

```php
Access::Domains()
Access::addDomain($data = array())
Access::domainsRealm($realm)
Access::updateDomain($realm, $data = array())
Access::deleteDomain($realm)
```

## Groups

```php
Access::Groups()
Access::createGroup($data = array())
Access::GroupId($groupid)
Access::updateGroup($groupid, $data = array())
Access::deleteGroup($groupid)
```

## Roles

```php
Access::Roles()
Access::createRole($data = array())
Access::RoleId($roleid)
Access::updateRole($roleid, $data = array())
Access::deleteRole($roleid)
```

## Users

```php
Access::Users()
Access::createUser($data = array())
Access::getUser($userid)
Access::updateUser($userid, $data = array())
Access::deleteUser($userid)
Access::changeUserPassword($data = array())
```

## Cluster

```php
Cluster::Cluster()
Cluster::Log($max = null)
Cluster::nextVmid($vmid = null)
Cluster::Options()
Cluster::setOptions($data = array())
Cluster::Resources($type = null)
Cluster::Status()
Cluster::Tasks()
```

## Backup

```php
Cluster::ListBackup()
Cluster::createBackup($data = array())
Cluster::BackupId($id)
Cluster::updateBackup($id, $data = array())
Cluster::deleteBackup($id)
```

## Config

```php
Cluster::Config()
Cluster::listConfigNodes()
Cluster::configTotem()
```

## Firewall

```php
Cluster::Firewall()
Cluster::firewallListAliases()
Cluster::createFirewallAliase($data = array())
Cluster::getFirewallAliasesName($name)
Cluster::updateFirewallAliase($name, $data = array())
Cluster::removeFirewallAliase($name)
Cluster::firewallListGroups()
Cluster::createFirewallGroup($data = array())
Cluster::firewallGroupsGroup($group)
Cluster::createRuleFirewallGroup($group, $data = array())
Cluster::removeFirewallGroup($group)
Cluster::firewallGroupsGroupPos($group, $pos)
Cluster::setFirewallGroupPos($group, $pos, $data = array())
Cluster::removeFirewallGroupPos($group, $pos)
Cluster::firewallListIpset()
Cluster::createFirewallIpset($data = array())
Cluster::firewallIpsetName($name)
Cluster::addFirewallIpsetName($name, $data = array())
Cluster::deleteFirewallIpsetName($name)
Cluster::firewallListRules()
Cluster::createFirewallRules($data = array())
Cluster::firewallRulesPos($pos)
Cluster::setFirewallRulesPos($pos, $data = array())
Cluster::deleteFirewallRulesPos($pos)
Cluster::firewallListMacros()
Cluster::firewallListOptions()
Cluster::setFirewallOptions($data = array())
Cluster::firewallListRefs()
```

## HA

```php
Cluster::getHaGroups()
Cluster::HaGroups($group)
Cluster::HaResources()
```

## Replication

```php
Cluster::Replication()
Cluster::createReplication($data = array())
Cluster::replicationId($id)
Cluster::updateReplication($id, $data = array())
Cluster::deleteReplication($id)
```

## Pools

```php
Pools::Pools()
Pools::PoolsID($poolid)
```

## Storage

```php
Storage::Storage($type = null)
Storage::createStorage($data = array())
Storage::getStorage($storage)
Storage::updateStorage($storage, $data = array())
Storage::deleteStorage($storage)
```

## Nodes

```php
Nodes::listNodes()
Nodes::Aplinfo($node)
Nodes::downloadTemplate($node, $data = array())
Nodes::Dns($node)
Nodes::setDns($node, $data = array())
Nodes::Execute($node, $data = array())
Nodes::MigrateAll($node, $data = array())
Nodes::Netstat($node)
Nodes::Report($node)
Nodes::Rrd($node, $ds = null, $timeframe = null)
Nodes::Rrddata($node, $timeframe = null)
Nodes::SpiceShell($node, $data = array())
Nodes::StartAll($node, $data = array())
Nodes::Reboot($node, $data = array())
Nodes::StopAll($node, $data = array())
Nodes::Subscription($node)
Nodes::updateSubscription($node, $data = array())
Nodes::setSubscription($node, $data = array())
Nodes::Syslog($node, $limit = null, $start = null, $since = null, $until = null)
Nodes::Time($node)
Nodes::setTime($node, $data = array())
Nodes::Version($node)
Nodes::createVNCShell($node, $data = array())
Nodes::VNCWebSocket($node, $port = null, $vncticket = null)
```

## Apt

```php
Nodes::Apt($node)
Nodes::updateApt($node, $data = array())
Nodes::AptChangelog($node, $name = null)
Nodes::AptUpdate($node)
Nodes::createAptUpdate($data = array())
```

## Ceph

```php
Nodes::Ceph($node)
Nodes::CephFlags($node)
Nodes::setCephFlags($node, $flag, $data = array())
Nodes::unsetCephFlags($node, $flag)
Nodes::createCephMgr($node, $data = array())
Nodes::destroyCephMgr($node, $id)
Nodes::CephMon($node)
Nodes::createCephMon($node, $data = array())
Nodes::destroyCephMon($node, $monid)
Nodes::CephOsd($node)
Nodes::createCephOsd($node, $data = array())
Nodes::destroyCephOsd($node, $osdid)
Nodes::CephOsdIn($node, $osdid, $data = array())
Nodes::CephOsdOut($node, $osdid, $data = array())
Nodes::getCephPools($node)
Nodes::createCephPool($node, $data = array())
Nodes::destroyCephPool($node)
Nodes::CephConfig($node)
Nodes::CephCrush($node)
Nodes::CephDisks($node)
Nodes::createCephInit($node, $data = array())
Nodes::CephLog($node, $limit = null, $start = null)
Nodes::CephRules($node)
Nodes::CephStart($node, $data = array())
Nodes::CephStop($node, $data = array())
Nodes::CephStatus($node)
```

## Disks

```php
Nodes::getDisks($node)
Nodes::Disk($node, $data = array())
Nodes::disksList($node)
Nodes::disksSmart($node, $disk = null)
```

## Nodes Firewall

```php
Nodes::Firewall($node)
Nodes::firewallRules($node)
Nodes::createFirewallRule($node, $data = array())
Nodes::firewallRulesPos($node, $pos)
Nodes::setFirewallRulePos($node, $pos, $data = array())
Nodes::deleteFirewallRulePos($node, $pos)
Nodes::firewallRulesLog($node)
Nodes::firewallRulesOptions($node)
Nodes::setFirewallRuleOptions($node, $data = array())
```

## Lxc

```php
Nodes::Lxc($node)
Nodes::createLxc($node, $data = array())
Nodes::LxcVmid($node, $vmid)
Nodes::deleteLxc($node, $vmid)
Nodes::lxcFirewall($node, $vmid)
Nodes::lxcFirewallAliases($node, $vmid)
Nodes::createLxcFirewallAliase($node, $vmid, $data = array())
Nodes::lxcFirewallAliasesName($node, $vmid, $name)
Nodes::updateLxcFirewallAliaseName($node, $vmid, $name, $data = array())
Nodes::deleteLxcFirewallAliaseName($node, $vmid, $name)
Nodes::lxcFirewallIpset($node, $vmid)
Nodes::createLxcFirewallIpset($node, $vmid, $data = array())
Nodes::lxcFirewallIpsetName($node, $vmid, $name)
Nodes::addLxcFirewallIpsetName($node, $vmid, $name, $data = array())
Nodes::deleteLxcFirewallIpsetName($node, $vmid, $name)
Nodes::lxcFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
Nodes::updateLxcFirewallIpsetNameCidr($node, $vmid, $name, $cidr, $data = array())
Nodes::deleteLxcFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
Nodes::lxcFirewallRules($node, $vmid)
Nodes::createLxcFirewallRules($node, $vmid, $data = array())
Nodes::lxcFirewallRulesPos($node, $vmid, $pos)
Nodes::setLxcFirewallRulesPos($node, $vmid, $pos, $data = array())
Nodes::deleteLxcFirewallRulesPos($node, $vmid, $pos)
Nodes::lxcFirewallLog($node, $vmid, $limit = null, $start = null)
Nodes::lxcFirewallOptions($node, $vmid)
Nodes::setLxcFirewallOptions($node, $vmid, $data = array())
Nodes::lxcSnapshot($node, $vmid)
Nodes::createLxcSnapshot($node, $vmid, $data = array())
Nodes::lxcSnapname($node, $vmid, $snapname)
Nodes::deleteLxcSnapshot($node, $vmid, $snapname)
Nodes::lxcSnapnameConfig($node, $vmid, $snapname)
Nodes::lxcSnapshotConfig($node, $vmid, $snapname, $data = array())
Nodes::lxcSnapshotRollback($node, $vmid, $snapname, $data = array())
Nodes::lxcStatus($node, $vmid)
Nodes::lxcCurrent($node, $vmid)
Nodes::lxcResume($node, $vmid, $data = array())
Nodes::lxcShutdown($node, $vmid, $data = array())
Nodes::lxcStart($node, $vmid, $data = array())
Nodes::lxcStop($node, $vmid, $data = array())
Nodes::lxcReboot($node, $vmid, $data = array())
Nodes::lxcSuspend($node, $vmid, $data = array())
Nodes::lxcClone($node, $vmid, $data = array())
Nodes::lxcConfig($node, $vmid)
Nodes::setLxcConfig($node, $vmid, $data = array())
Nodes::lxcFeature($node, $vmid)
Nodes::lxcMigrate($node, $vmid, $data = array())
Nodes::lxcResize($node, $vmid, $data = array())
Nodes::lxcRrd($node, $vmid, $ds = null, $timeframe = null)
Nodes::lxcRrddata($node, $vmid, $timeframe = null)
Nodes::lxcSpiceproxy($node, $vmid, $data = array())
Nodes::createLxcTemplate($node, $vmid, $data = array())
Nodes::createLxcVncproxy($node, $vmid, $data = array())
Nodes::lxcVncwebsocket($node, $vmid, $port = null, $vncticket = null)
```

## Network

```php
Nodes::Network($node, $type = null)
Nodes::createNetwork($node, $data = array())
Nodes::revertNetwork($node)
Nodes::networkIface($node, $iface)
Nodes::updateNetworkIface($node, $iface, $data = array())
Nodes::deleteNetworkIface($node, $iface)
```

## Qemu

```php
Nodes::Qemu($node)
Nodes::createQemu($node, $data = array())
Nodes::QemuVmid($node, $vmid)
Nodes::deleteQemu($node, $vmid, $data = array())
Nodes::qemuFirewall($node, $vmid)
Nodes::qemuFirewallAliases($node, $vmid)
Nodes::createQemuFirewallAliase($node, $vmid, $data = array())
Nodes::qemuFirewallAliasesName($node, $vmid, $name)
Nodes::updateQemuFirewallAliaseName($node, $vmid, $name, $data = array())
Nodes::deleteQemuFirewallAliaseName($node, $vmid, $name)
Nodes::qemuFirewallIpset($node, $vmid)
Nodes::createQemuFirewallIpset($node, $vmid, $data = array())
Nodes::qemuFirewallIpsetName($node, $vmid, $name)
Nodes::addQemuFirewallIpsetName($node, $vmid, $name, $data = array())
Nodes::deleteQemuFirewallIpsetName($node, $vmid, $name)
Nodes::qemuFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
Nodes::updateQemuFirewallIpsetNameCidr($node, $vmid, $name, $cidr, $data = array())
Nodes::deleteQemuFirewallIpsetNameCidr($node, $vmid, $name, $cidr)
Nodes::qemuFirewallRules($node, $vmid)
Nodes::createQemuFirewallRules($node, $vmid, $data = array())
Nodes::qemuFirewallRulesPos($node, $vmid, $pos)
Nodes::updateQemuFirewallRulesPos($node, $vmid, $pos, $data = array())
Nodes::deleteQemuFirewallRulesPos($node, $vmid, $pos)
Nodes::qemuFirewallLog($node, $vmid, $limit = null, $start = null)
Nodes::qemuFirewallOptions($node, $vmid)
Nodes::setQemuFirewallOptions($node, $vmid, $data = array())
Nodes::qemuFirewallRefs($node, $vmid)
Nodes::qemuSnapshot($node, $vmid)
Nodes::createQemuSnapshot($node, $vmid, $data = array())
Nodes::qemuSnapname($node, $vmid, $snapname)
Nodes::deleteQemuSnapshot($node, $vmid, $snapname)
Nodes::qemuSnapnameConfig($node, $vmid, $snapname)
Nodes::updateQemuSnapshotConfig($node, $vmid, $snapname, $data = array())
Nodes::QemuSnapshotRollback($node, $vmid, $snapname, $data = array())
Nodes::qemuStatus($node, $vmid)
Nodes::qemuCurrent($node, $vmid)
Nodes::qemuResume($node, $vmid, $data = array())
Nodes::qemuReset($node, $vmid, $data = array())
Nodes::qemuShutdown($node, $vmid, $data = array())
Nodes::qemuStart($node, $vmid, $data = array())
Nodes::qemuStop($node, $vmid, $data = array())
Nodes::qemuReboot($node, $vmid, $data = array())
Nodes::qemuSuspend($node, $vmid, $data = array())
Nodes::qemuAgent($node, $vmid, $data = array())
Nodes::qemuAgentExec($node, $vmid, $data = array())
Nodes::qemuAgentSetUserPassword($node, $vmid, $data = array())
Nodes::qemuClone($node, $vmid, $data = array())
Nodes::qemuConfig($node, $vmid)
Nodes::createQemuConfig($node, $vmid, $data = array())
Nodes::setQemuConfig($node, $vmid, $data = array())
Nodes::qemuFeature($node, $vmid)
Nodes::qemuMigrate($node, $vmid, $data = array())
Nodes::qemuMonitor($node, $vmid, $data = array())
Nodes::qemuMoveDisk($node, $vmid, $data = array())
Nodes::qemuPending($node, $vmid)
Nodes::qemuResize($node, $vmid, $data = array())
Nodes::qemuRrd($node, $vmid, $ds = null, $timeframe = null)
Nodes::qemuRrddata($node, $vmid, $timeframe = null)
Nodes::qemuSendkey($node, $vmid, $data = array())
Nodes::qemuSpiceproxy($node, $vmid, $data = array())
Nodes::createQemuTemplate($node, $vmid, $data = array())
Nodes::qemuUnlink($node, $vmid, $data = array())
Nodes::createQemuVncproxy($node, $vmid, $data = array())
Nodes::qemuVncwebsocket($node, $vmid, $port = null, $vncticket = null)
```

## Nodes Replication

```php
Nodes::Replication($node)
Nodes::replicationId($node, $id)
Nodes::replicationLog($node, $id)
Nodes::replicationScheduleNow($node, $id, $data = array())
Nodes::replicationStatus($node, $id)
```

## Scan

```php
Nodes::Scan($node)
Nodes::scanGlusterfs($node)
Nodes::scanIscsi($node)
Nodes::scanLvm($node)
Nodes::scanLvmthin($node)
Nodes::scanUsb($node)
Nodes::scanZfs($node)
```

## Service

```php
Nodes::Services($node)
Nodes::listService($node, $service)
Nodes::servicesReload($node, $service, $data = array())
Nodes::servicesRestart($node, $service, $data = array())
Nodes::servicesStart($node, $service, $data = array())
Nodes::servicesStop($node, $service, $data = array())
Nodes::servicesState($node, $service)
```

## Nodes Storage

```php
Nodes::Storage($node, $content = null, $storage = null, $target = null, $enabled = null)
Nodes::getStorage($node, $storage)
Nodes::listStorageContent($node, $storage)
Nodes::storageContent($node, $storage, $data = array())
Nodes::storageContentVolume($node, $storage, $volume)
Nodes::copyStorageContentVolume($node, $storage, $volume, $data = array())
Nodes::deleteStorageContentVolume($node, $storage, $volume)
Nodes::storageRRD($node)
Nodes::storageRRDdata($node)
Nodes::storageStatus($node)
Nodes::storageUpload($node, $data = array())
```

## Tasks

```php
Nodes::Tasks($node, $errors = null, $limit = null, $vmid = null, $start = null)
Nodes::tasksUpid($node, $upid)
Nodes::tasksStop($node, $upid)
Nodes::tasksLog($node, $upid, $limit = null, $start = null)
Nodes::tasksStatus($node, $upid)
```

## Vzdump

```php
Nodes::createVzdump($node, $data = array())
Nodes::VzdumpExtractConfig($node)
```
