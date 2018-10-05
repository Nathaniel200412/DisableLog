<?php

namespace Remover;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable() {
        $this->getLogger()->info(TextFormat::GREEN . "Remover has been activated by A354");
        unlink($this->getServer()->getDataPath()."server.log");
    }    
        
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "Remover has been deactivated by A354");
    }
}
