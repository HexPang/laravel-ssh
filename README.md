# SSH Client For Laravel
SSH Client for laravel.

| Build Status |
| ---- |
| [![Build Status](https://circleci.com/gh/HexPang/laravel-ssh.png?circle-token=7b09b960cbb1ddff17c8d93ccf7db44834569514)]() |

## Install With Composer
> composer require hexpang/laravel-ssh

Open **config/app.php** add for **aliases**

> 'SSH' => App\Services\RemoteService::class,

## Usage

```
use SSH;
$ssh = new SSH($host,$port,$username,$password);
```

## Method
| Method | Description | Usage |
| ------ | ----------- | ----- |
| Ping | Check port | $ssh->ping($host,$port,$timeOut)
| Connect | Connect to server | $ssh->Connect() |
| Authorize | Authorize | $ssh->Authorize() |
| Disconnect | Disconnect | $ssh->Disconnect() |
| Execute | Execute command and response result for an array[ Response,Error ] | $ssh->Execute($command) |
