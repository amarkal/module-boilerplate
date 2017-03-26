<?php
/**
 * [module-name]
 *
 * [description]
 *
 * @package   [package-name]
 * @author    [author]
 * @link      [link]
 * @copyright [copyrights]
 */

// Prevent direct file access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Prevent loading the library more than once
 */
if( defined( 'AMARKAL_MODULE' ) ) return false;
define( 'AMARKAL_MODULE', true );