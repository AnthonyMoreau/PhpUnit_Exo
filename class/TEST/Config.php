<?php

namespace Nigma\TEST;


class Config
{

    /**
     * @param array $arg
     * @return array
     */
    public function Array_Filter(array $arg): array
    {
        if(empty($arg)){
            throw new \RuntimeException('$arg EST VIDE');
        }
        $arg = $this->Array_Filter_Key($arg);
        $x = new self();
        return array_map(array($x, 'Is_Empty_Value'), $arg);
    }

    /**
     * @param $value
     * @return string
     */
    private function Is_Empty_Value(string $value): string
    {
        if (empty($value)){$value = 'default';}
        return $value;
    }

    /**
     * @param array $arg
     * @return array
     */
    private function Array_Filter_Key(array $arg): array
    {
        $tab = [];
        foreach ($arg as $key => $value){if (empty($key)){$key = 'default';}$tab [$key]= $value;}
        return $tab;
    }
}