<?php

if (!defined('UUID_VARIANT_NCS')) {
    define('UUID_VARIANT_NCS', 0);
    define('UUID_VARIANT_DCE', 1);
    define('UUID_VARIANT_MICROSOFT', 2);
    define('UUID_VARIANT_OTHER', 3);
    define('UUID_TYPE_DEFAULT', 0);
    define('UUID_TYPE_TIME', 1);
    define('UUID_TYPE_DCE', 4);
    define('UUID_TYPE_NAME', 1);
    define('UUID_TYPE_RANDOM', 4);
    define('UUID_TYPE_NULL', -1);
    define('UUID_TYPE_INVALID', -42);
}

/**
 * Compare two UUIDs
 *
 * @param string $uuid1
 * @param string $uuid2
 * @return int
 */
function uuid_compare($uuid1, $uuid2)
{

}

/**
 * Generate a new UUID
 *
 * @param int|null $uuid_type
 * @return string
 */
function uuid_create($uuid_type = null)
{

}

/**
 * Check whether an UUID is the NULL UUID 00000000-0000-0000-0000-000000000000
 *
 * @param string $uuid
 * @return bool
 */
function uuid_is_null($uuid)
{

}

/**
 * Check whether a given UUID string is a valid UUID
 *
 * @param string $uuid
 * @return bool
 */
function uuid_is_valid($uuid)
{

}

/**
 * Get UUID creator network MAC address
 *
 * @param string $uuid
 * @return string
 */
function uuid_mac($uuid)
{

}

/**
 * @param string $uuid
 * @return string
 */
function uuid_parse($uuid)
{

}

/**
 * Extract creation time from a time based UUID as UNIX timestamp
 *
 * @param string $uuid
 * @return int
 */
function uuid_time($uuid)
{

}

/**
 * Return the UUIDs type
 *
 * @param string $uuid
 * @return int
 */
function uuid_type($uuid)
{

}

/**
 * @param string $uuid
 * @return string
 */
function uuid_unparse($uuid)
{

}

/**
 * Return the UUIDs variant
 *
 * @param string $uuid
 * @return int
 */
function uuid_variant($uuid)
{

}