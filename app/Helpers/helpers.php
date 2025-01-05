<?php

if (!function_exists('vendorCss')) {
    function vendorCss(string $asset): string
    {
        return asset("css/vendors/extensions/{$asset}");
    }
}

if (!function_exists('pluginCss')) {
    function pluginCss(string $asset): string
    {
        return asset("css/plugins/extensions/{$asset}");
    }
}

if (!function_exists('pluginJs')) {
    function pluginJs(string $asset): string
    {
        return asset("js/scripts/extensions/{$asset}");
    }
}

if (!function_exists('vendorJs')) {
    function vendorJs(string $asset): string
    {
        return asset("js/vendors/extensions/{$asset}");
    }
}
