<div align="center">
<h1>ToastBroadcaster | v3.0.3<h1>
</div>
<p align="center">
<a href="https://poggit.pmmp.io/p/ToastBroadcaster"><img src="https://poggit.pmmp.io/shield.state/ToastBroadcaster"></a>
<a href="https://poggit.pmmp.io/p/ToastBroadcaster"><img src="https://poggit.pmmp.io/shield.api/ToastBroadcaster"></a>
<a href="https://poggit.pmmp.io/p/ToastBroadcaster"><img src="https://poggit.pmmp.io/shield.dl.total/ToastBroadcaster"></a>
<a href="https://poggit.pmmp.io/p/ToastBroadcaster"><img src="https://poggit.pmmp.io/shield.dl/ToastBroadcaster"></a>
<br>

<img src="https://github.com/NoobMCBG/ToastBroadcaster/blob/main/rainbow.gif">
<br>
✔️ Create toast style notifications for all your players ✔️
<br>
<img src="https://github.com/NoobMCBG/ToastBroadcaster/blob/main/toast.png"/>
<br>

<img src="https://github.com/NoobMCBG/KillDeathSound/blob/main/rainbow.gif">
</p>

<br>

## Features
>- Create toast style notifications for all your players
  
<br>

## Config
```yaml
---
#  
#  ░████████╗░█████╗░░█████╗░░██████╗████████╗██████╗░██████╗░░█████╗░░█████╗░██████╗░░█████╗░░█████╗░░██████╗████████╗███████╗██████╗░
#  ░╚══██╔══╝██╔══██╗██╔══██╗██╔════╝╚══██╔══╝██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔════╝╚══██╔══╝██╔════╝██╔══██╗
#  ░░░░██║░░░██║░░██║███████║╚█████╗░░░░██║░░░██████╦╝██████╔╝██║░░██║███████║██║░░██║██║░░╚═╝███████║╚█████╗░░░░██║░░░█████╗░░██████╔╝
#  ░░░░██║░░░██║░░██║██╔══██║░╚═══██╗░░░██║░░░██╔══██╗██╔══██╗██║░░██║██╔══██║██║░░██║██║░░██╗██╔══██║░╚═══██╗░░░██║░░░██╔══╝░░██╔══██╗
#  ░░░░██║░░░╚█████╔╝██║░░██║██████╔╝░░░██║░░░██████╦╝██║░░██║╚█████╔╝██║░░██║██████╔╝╚█████╔╝██║░░██║██████╔╝░░░██║░░░███████╗██║░░██║
#  ░░░░╚═╝░░░░╚════╝░╚═╝░░╚═╝╚═════╝░░░░╚═╝░░░╚═════╝░╚═╝░░╚═╝░╚════╝░╚═╝░░╚═╝╚═════╝░░╚════╝░╚═╝░░╚═╝╚═════╝░░░░╚═╝░░░╚══════╝╚═╝░░╚═╝
title: "§d[ToastBroadcaster]" # Title toast
broadcast:
  delay: 60 # Delay message
  message: # All message broadcast
  - "§a1"
  - "§b2"
  - "§c3"
...
```

<br>

## For Developer
>- You can access to ToastBroadcaster by using ```ToastBroadcaster::getInstance()```
>- sendToast usage:
```php
$player = $event->getPlayer();
$title = "[Title]";
$subtitle = "Toast";
ToastBroadcaster::getInstance()->sendToast($player, $title, $subtitle);
```

>- broadcastToast usage:
```php
$player = $event->getPlayer();
$title = "[Title]";
$subtitle = "Toast";
ToastBroadcaster::getInstance()->broadcastToast($title, $subtitle);
```

<br>

## Install
>- Step 1: Click the `Direct Download` button to download the plugin
>- Step 2: move the file `ToastBroadcaster.phar` into the file `plugins`
>- Step 3: Restart server for plugins to work
