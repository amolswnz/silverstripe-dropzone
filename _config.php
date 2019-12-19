<?php

define('DROPZONE_DIR', basename(dirname(__FILE__)));

if (!class_exists('SS_Object')) {
    class_alias('Object', 'SS_Object');
}
