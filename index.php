<?php
  $DB_URL = 'postgres://ewulrekxoetvev:5868ae20ccb624508ef9c33233e740524f59262f6070590b7b0b082d6aef62c4@ec2-3-211-48-92.compute-1.amazonaws.com:5432/dauiocta23rarj';
  $dbopts = parse_url(getenv('DATABASE_URL'));
  $app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
                 array(
                  'pdo.server' => array(
                     'driver'   => 'pgsql',
                     'user' => $dbopts["user"],
                     'password' => $dbopts["pass"],
                     'host' => $dbopts["host"],
                     'port' => $dbopts["port"],
                     'dbname' => ltrim($dbopts["path"],'/')
                     )
                 )
  );

  echo "Hello LINE BOT for WFH";
?>
