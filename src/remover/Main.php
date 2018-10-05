<?php

namespace Remover;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable() {
        $this->getLogger()->info(C::GREEN . "Remover has been activated by A354");
        unlink($this->getServer()->getDataPath()."server.log");
    }    
    
    public function onRun($currentTick): void {
        $this->getLogger()->info(C::BLUE . "Removed the server.log file to avoid storage shortage");
    }
        
    public function onDisable() {
        $this->getLogger()->info(C::RED . "Remover has been deactivated by A354");
    }
}
