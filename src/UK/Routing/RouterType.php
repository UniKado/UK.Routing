<?php
/**
 * @author         UniKado <unikado+pubcode@protonmail.com>
 * @copyright  (c) 2016, UniKado
 * @package        UK\Routing
 * @since          2016-07-11
 * @version        0.1.3
 */

namespace UK\Routing;


/**
 * The UK\Routing\RouterType fake enum interface.
 *
 * @since v0.1.0
 */
interface RouterType
{

   /**
    * The Router is of type Rewrite to GET parameter. It means a called, not existing URL path is permitted
    * to a GET URL Parameter. (e.g.: /index.php?url=/foo/bar) THis type allow you to define the name of the
    * required GET parameter.
    */
   const REWRITE_TO_GET = 'GET';

   /**
    * The Router is of type Rewrite to Request URI. (e.g.: /index.php/foo/bar) and is get by
    * $_SERVER[ 'REQUEST_URI' ]
    */
   const REWRITE_TO_REQUEST_URI = 'REQUEST_URI';

   /**
    * The Router uses a custom Request URI path.
    */
   const CUSTOM = 'CUSTOM';

}

