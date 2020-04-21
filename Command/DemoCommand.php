<?php
namespace Command;

use Service\DemoService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DemoCommand extends Command
{
    protected function configure()
    {
        $this->setName("demo")
            ->setDescription("This is a demo command");

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $demoService = new DemoService();
        $output->writeln('hello! demo command' . $demoService->demo());
    }
}