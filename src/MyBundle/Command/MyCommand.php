<?php

namespace MyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends ContainerAwareCommand
{

    private $input;
    private $output;

    protected function configure()
    {
        $this
            ->setName('my:hello')
            ->setDescription('Say Hello !!!')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Give your name',
                'Anonymous'
            )
            ->addOption(
                'uppercase',
                'u',
                InputOption::VALUE_NONE,
                'Set text to uppercase'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $name = $this->input->getArgument('name');
        $uppercase = $this->input->getOption('uppercase');
        $text = sprintf('Hello %s !!!', $name);

        $finalText = $uppercase ? strtoupper($text) : $text;

        $this->output->writeln('<info>'.$finalText.'</info>');
    }

}