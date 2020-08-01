<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_0_3($object)
{
    return ($object->registerHook('actionCategoryFormBuilderModifier') &&
        $object->registerHook('actionAfterUpdateCategoryFormHandler') &&
        $object->registerHook('actionAfterCreateCategoryFormHandler'));
}