<?php

namespace NoMoreBot

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreSpawnEvent;

class Main extends PluginBase implements Listener{
  
  private $whitelist == false;
  private $IPs = [];
  
public function onEnable(){
  $this->getServer()->PluginManager()->registerEvents($this, $this);
  $this->getLogger->info(TextFormat::BLUE . "[NoMoreBot Enabled]");
  $this->saveDefaultConfig();
  $this->wl = new Config($this->getDataFolder()."NMBWhitelist.properties", Config::PROPERTIES);
}

public onLoad(){
  $this->getLogger->info(TextFormat::BLUE . "[NoMoreBot Loading]");
  $wl->save();
}

public function onDisable(){
  $this->getLogger()->info(TextFormat::BLUE . "[NoMoreBot Disabled]");
  $wl->save();
  }

public function onPreSpawn(PlayerPreSpawnEvent $e){
  if($this->whitelist === true){
    if(!$wl->exist($name)){
      $player-kick("[NoMoreBot] Bot Attack Detected!")
    }
  }else{
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new WhitelistAdder($this, $player), 20);
  }
 }
}
