<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

class Way2 extends AbstractWay
{
    /**
     * {@inheritdoc}
     */
    protected function transformData()
    {
        $this->data = json_decode($_GET['postData'], true);
    }

    /**
     * {@inheritdoc}
     */
    protected function answer(): string
    {
        return sprintf("data: %s\n\n", json_encode($this->prepareAnswer()));;
    }
}
