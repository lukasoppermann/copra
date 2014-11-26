<?php

return array(

  /*
  |--------------------------------------------------------------------------
  | Api Config
  |--------------------------------------------------------------------------
  |
  | configuration for the api
  |
  */
  'config' => [
    'url'       => $_ENV['FS_API_URL'],
    'version'   => '1',
    'client_id'     => $_ENV['FS_API_CLIENT_ID'],
    'client_secret' => $_ENV['FS_API_CLIENT_SECRET'],
    'scope'         => 'content.read',
  ]

);
