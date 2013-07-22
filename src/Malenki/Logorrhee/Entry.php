<?php

namespace Malenki\Logorrhee;

class Entry
{
    const LABEL_INFO = 'Info';
    const LABEL_SUCCESS = 'Success';
    const LABEL_WARNING = 'Warning';
    const LABEL_ERROR = 'Error';

    protected $is_ltr = true;
    protected $has_color = false;
    protected $str_label = null;
    protected $str_msg = null;

    public function __construct($str_msg, $str_label = self::LABEL_INFO)
    {
    }

    public function hasCustomLabel()
    {
        return (boolean) $this->str_label;
    }

    public function useColor()
    {
        $this->has_color = true;
    }

    public function getLabel()
    {
        return $this->str_label;
    }

    public function getMessage()
    {
        return $this->str_msg;
    }
}
