<?php

namespace Controller;

class Pokemon extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->setTitle('Pokémon');
        $node = $this->root->appendChild($this->xml->createElement('page-pokemon'));

        $lists = \Pogo\Data\Lists::getAll();
        $all = new \Pogo\Strings();
        $all->addLists($lists);

        $reasons = $all->getReasons();
        foreach ($reasons as $name => $reasonList) {
            $reasonNode = $node->appendChild($this->xml->createElement('reasons'));
            $reasonNode->setAttribute('name', $name);
            foreach ($reasonList as $reasonEntry) {
                $entryNode = $reasonNode->appendChild($this->xml->createElement('reason'));
                $entryNode->setAttribute('text', $reasonEntry);
            }
        }
    }
}