<?php

namespace NoobMCBG\ToastBroadcaster\task;

use pocketmine\scheduler\Task;
use NoobMCBG\ToastBroadcaster\ToastBroadcaster;

class ToastBroadcasterTask extends Task {
    
    	private ToastBroadcaster $plugin;
    
    	private $i;
    
    	public function __construct(ToastBroadcaster $plugin){
        	$this->plugin = $plugin;
		$this->i = 0;
    	}

    	public function onRun() : void {
        	$title = $this->plugin->getConfig()->get("title");
        	$messages = $this->plugin->getConfig()->getNested("broadcast.message");
    		back:
    		if($this->i < count($messages)){
    	    		$this->plugin->broadcastToast($title, $messages[$this->i]);
    	    		$this->i++;
    		}else{
		    	$this->i = 0;
		    	goto back;
		}
    	}
}
