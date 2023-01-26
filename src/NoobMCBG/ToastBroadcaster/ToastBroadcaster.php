<?php

declare(strict_types=1);

namespace NoobMCBG\ToastBroadcaster;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\ToastRequestPacket;
use NoobMCBG\ToastBroadcaster\task\ToastBroadcasterTask;
use NoobMCBG\ToastBroadcaster\task\CheckUpdateTask;

class ToastBroadcaster extends PluginBase {

	public static $instance;

	public static function getInstance() : self {
		return self::$instance;
	}

	public function onEnable() : void {
		$this->saveDefaultConfig();
		$this->checkUpdate();
		$this->getScheduler()->scheduleRepeatingTask(new ToastBroadcasterTask($this), 20 * (int)$this->getConfig()->getAll()["broadcast"]["delay"]);
		self::$instance = $this;
	}
	
	public function checkUpdate(bool $isRetry = false): void {
            	$this->getServer()->getAsyncPool()->submitTask(new CheckUpdateTask($this->getDescription()->getName(), $this->getDescription()->getVersion()));
        }

	public function sendToast(Player $player, string $title = "", string $subtitle = ""){
		$packet = ToastRequestPacket::create(
        	$title,
        	$subtitle
		);
		$player->getNetworkSession()->sendDataPacket($packet);
	}

	public function broadcastToast(string $title = "", string $subtitle = ""){
		foreach($this->getServer()->getOnlinePlayers() as $player){
			$packet = ToastRequestPacket::create(
        		$title,
        		$subtitle
			);
			$player->getNetworkSession()->sendDataPacket($packet);
		}
	}
}
