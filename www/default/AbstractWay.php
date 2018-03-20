<?php

abstract class AbstractWay
{
    const RESPONSE_TEMPLATE = '[%s] Hello %s (%s)! You current PHP version is %s.';

    /**
     * @var array
     */
    protected $data = [];

    /**
     * Transform post data to needed array.
     *
     * @return mixed
     */
    abstract protected function transformData();

    public function run()
    {
        $this->transformData();

        if ($this->validateData()) {
            echo $this->answer();
        }
    }

    /**
     * @return bool
     */
    protected function validateData(): bool
    {
        return isset($this->data['username'])
            && isset($this->data['name'])
            && isset($this->data['age']);
    }

    /**
     * @return string
     */
    protected function answer(): string
    {
        return json_encode($this->prepareAnswer());
    }

    /**
     * @return array
     */
    protected function prepareAnswer(): array
    {
        return array_merge(
            $this->data,
            [
                'message' => sprintf(
                    self::RESPONSE_TEMPLATE,
                    date('Y-m-d H:i'),
                    $this->data['name'],
                    $this->data['username'],
                    phpversion()
                ),
            ]
        );
    }
}
