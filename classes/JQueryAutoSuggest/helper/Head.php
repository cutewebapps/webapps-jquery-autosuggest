<?php

class JQueryAutoSuggest_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
            $this->headScript()->append(
                $this->staticpath() . 'jquery-autosuggest/js/jquery.autoSuggest.js', 'jquery' );
            $this->headLink()->append(
                $this->staticpath() . 'jquery-autosuggest/css/autoSuggest.css' );
    }
}
