<?php

namespace admin\ngrest\interfaces;

interface Config
{
    public function setConfig(array $config);
    
    public function getConfig();
    
    public function onFinish();
}