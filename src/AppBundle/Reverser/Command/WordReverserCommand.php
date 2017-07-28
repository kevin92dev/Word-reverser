<?php

namespace AppBundle\Reverser\Command;

use AppBundle\Reverser\Application\Service\WordReverserService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class WordReverserCommand
 */
class WordReverserCommand extends ContainerAwareCommand
{
    protected function configure(): void
    {
        $this
            ->setName('app:reverser')
            ->setDescription('Reverse the given strings')
            ->addArgument('word1', InputArgument::REQUIRED, 'The first word')
            ->addArgument('word2', InputArgument::REQUIRED, 'The second word')
            ->addArgument('word3', InputArgument::REQUIRED, 'The third word')
            ->addArgument('word4', InputArgument::REQUIRED, 'The fourth word')
            ->addArgument('word5', InputArgument::REQUIRED, 'The fifth word')
            ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $args = $input->getArguments();

        unset($args['command']);

        $wordReverser = new WordReverserService();
        echo $wordReverser->reverse($args).PHP_EOL;
    }
}
