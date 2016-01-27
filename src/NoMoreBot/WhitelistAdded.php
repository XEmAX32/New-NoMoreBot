<?php

namespace NoMoreBot;

use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat;

class JoinWHAdder extends PluginTask{
  
public function __construct($plugin){
  $this->plugin = $plugin;
  parent::__construct($plugin);
}
     
public function onRun($tick, $player){
  $this->plugin->sec -= 1;
  if($this->plugin->sec => 0){
    $wl->set($name);
    $player->sendMessage(TextFormat::BLUE . "[NoMoreBot] You Have Been Added On Whitelist");
  }
 }
}
