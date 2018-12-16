<?php
/**
 * User: Andy
 * Date: 2018/12/9
 * Time: 11:12
 */

set_include_path(get_include_path().PATH_SEPARATOR."");

spl_autoload_extensions(".php");

spl_autoload_register();