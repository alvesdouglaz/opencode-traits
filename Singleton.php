<?php
/**
 * The Opencode Traits package
 *
 * @package     Opencode/Traits
 * @copyright   2019 (c) Douglas Alves
 * @author      Douglas Alves <https://github.com/alvesdouglaz/>
 * @link        https://github.com/alvesdouglaz/opencode-traits
 * @license     https://github.com/alvesdouglaz/opencode-traits/blob/master/LICENSE Apache-2.0
 * @version     1.0.0
 */

namespace Opencode\Traits
{

    /**
     * Singleton
     *
     * @package     Opencode/Traits
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    trait Singleton
    {

        private static $instance = null;

        public static function instance($par = null)
        {
            return self::getInstance($par);
        }

        /**
         * Returns a unique instance of a class.
         *
         * @staticvar Singleton $instance The unique instance of this class
         *
         * @return Singleton The unique instance.
         */
        public static function getInstance($par = null)
        {
            if(null === self::$instance && null !== $par)
                self::$instance = new static($par);
            else if(null === self::$instance)
                self::$instance = new static();

            return self::$instance;
        }

        /**
         * Constructor of the protected type prevents a new instance of the Class
         * from being created through the `new` operator outside that class.
         */
        protected function __construct() {}

        /**
         * Clone method of the private type prevents the cloning of this instance
         *
         * @return void
         */
        private function __clone() {}

        /**
         * Unserialize method of the private type to prevent the deserialization of
         * the instance
         *
         * @return void
         */
        private function __wakeup() {}

    }
}