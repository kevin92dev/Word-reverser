<?php

namespace AppBundle\Reverser\Application\Service;

class WordReverserService
{
    /**
     * Return an imploded words reversed.
     *
     * @param array $words
     * @return string
     */
    public function reverse(array $words): string
    {
        return implode(' ', array_reverse(array_map([$this, 'reverseWord'], $words)));
    }

    /**
     * Return a reversed word.
     *
     * @param string $word
     * @return string
     */
    protected function reverseWord(string $word): string
    {
        return strrev($word);
    }
}
