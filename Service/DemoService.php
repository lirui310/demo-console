<?php


namespace Service;


use Model\DemoModel;

class DemoService
{
    public function demo()
    {
        $demoModel = new DemoModel();
        return "DemoService 调用 DemoModel: " . $demoModel->getDemo();
    }
}