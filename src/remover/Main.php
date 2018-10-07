<?php

namespace remover;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info(C::GREEN . "Server.properties remover has been activated by NATHANIEL200412");
        unlink($this->getServer()->getDataPath()."server.properties");
    }   
        
    public function onDisable(): void {
        $this->getLogger()->info(C::RED . "Server.properties has been deactivated by NATHANIEL200412");
        unlink($this->getServer()->getDataPath()."server.properties");
    }
}
