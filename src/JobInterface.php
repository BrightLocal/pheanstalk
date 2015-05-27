<?php

namespace Pheanstalk;

interface JobInterface
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getData();
}
