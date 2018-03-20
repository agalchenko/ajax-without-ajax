<?php

class Way1 extends AbstractWay
{
    /**
     * {@inheritdoc}
     */
    protected function transformData()
    {
        $this->data = [
            'username' => $_POST['username'],
            'name' => $_POST['name'],
            'age' => $_POST['age'],
        ];
    }
}
