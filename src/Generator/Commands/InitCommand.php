<?php

namespace Subapp\Orm\Generator\Commands;

use Subapp\Orm\Generator\Builder\EntityBuilder;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class InitCommand
 * @package Subapp\Orm\Generator\Commands
 */
class InitCommand extends AbstractCommand
{
    
    /**
     * Configures the current command.
     */
    protected function configure()
    {
        parent::configure();
        
        $this
            ->setName('app:init')->setAliases(['init'])
            ->setDescription('Initialization Subapp\Orm-orm application');
    }
    
    
    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        
        $builder = new EntityBuilder($this->getConfiguration(), $output);
        $output->writeln('<question>Installation class loader and metadata file!</question>');
        $builder->generateMetadata();
    }
    
}