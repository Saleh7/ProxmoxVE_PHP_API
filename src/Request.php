<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2017 Saleh <Saleh7@protonmail.ch>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

use \Curl\Curl;

class Request
{
  protected static $hostname;
  protected static $username;
  protected static $password;
  protected static $token_name = false;
  protected static $token_value = false;
  protected static $realm;
  protected static $port;
  protected static $ticket;
  protected static $Client;

  /**
   * Proxmox Api client
   * @param array $configure   hostname, username, password, realm, port
   */
  public static function Login(array $configure, $verifySSL = false, $verifyHost = false)
  {
    $check = false;

    if (empty($configure['password'])) {
      if (empty($configure['token_name']) || empty($configure['token_value'])) {
        $check = true;
      } else {
        self::$token_name = $configure['token_name'];
        self::$token_value = $configure['token_value'];
      }
    } else {
      self::$password = $configure['password'];
    }

    self::$hostname     = !empty($configure['hostname'])      ? $configure['hostname']    : $check = true;
    self::$username     = !empty($configure['username'])      ? $configure['username']    : $check = true;
    self::$realm        = !empty($configure['realm'])         ? $configure['realm']       : 'pam'; // pam - pve - ..
    self::$port         = !empty($configure['port'])          ? $configure['port']        : 8006;

    if ($check) {
      throw new ProxmoxException(
        'Require in array [hostname], [username], [password] or [token_name] and [token_value], [realm], [port]'
      );
    }
    self::ticket($verifySSL, $verifyHost);
  }
  /**
   * Create or verify authentication ticket.
   * POST /api2/json/access/ticket
   */
  protected static function ticket($verifySSL, $verifyHost)
  {
    self::$Client = new \Curl\Curl();
    self::$Client->setOpts([
      CURLOPT_SSL_VERIFYPEER => $verifySSL,
      CURLOPT_SSL_VERIFYHOST => $verifyHost
    ]);

    if (self::$token_name && self::$token_value) {
      self::$Client->setHeader('Authorization', sprintf(
        'PVEAPIToken=%s!%s=%s',
        self::$username . '@' . self::$realm,
        self::$token_name,
        self::$token_value
      ));
    } else {
      $data = [
        'username'  => self::$username,
        'password'  => self::$password,
        'realm'     => self::$realm,
      ];

      $response = self::$Client->post("https://" . self::$hostname . ":" . self::$port . "/api2/json/access/ticket", $data);

      if (!$response) {
        throw new ProxmoxException('Request params empty');
      }

      // set header
      self::$Client->setHeader('CSRFPreventionToken', $response->data->CSRFPreventionToken);
      // set cookie
      self::$Client->setCookie('PVEAuthCookie', $response->data->ticket);
    }

    return true;
  }
  /**
   * Request
   * @param string $path
   * @param array $params
   * @param string $method
   */
  public static function Request($path, array $params = null, $method = "GET")
  {
    if (substr($path, 0, 1) != '/') {
      $path = '/' . $path;
    }
    $api = "https://" . self::$hostname . ":" . self::$port . "/api2/json" . $path;
    switch ($method) {
      case "GET":
        return self::$Client->get($api, $params);
        break;
      case "PUT":
        return self::$Client->put($api, $params);
        break;
      case "POST":
        return self::$Client->post($api, $params);
        break;
      case "DELETE":
        self::$Client->removeHeader('Content-Length');
        return self::$Client->delete($api, $params);
        break;
      default:
        throw new ProxmoxException('HTTP Request method not allowed.');
    }
  }
}
