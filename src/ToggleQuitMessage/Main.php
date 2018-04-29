<?php

namespace ToggleQuitMessage;

use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\TextFormat as T;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getLogger()->info(T::AQUA . "ToggleQuitMessage by Varion");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable()
    {
        $this->getLogger()->info(T::AQUA . "ToggleQuitMessage by Varion disattivato");
    }

    public function onQuit (PlayerQuitEvent $e)
    {
        $player = $e->getPlayer();
        $name = $player->getName();
        $e->setQuitMessage("");
    }
}