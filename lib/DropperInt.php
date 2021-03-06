<?php

/**
* This file is part of Dropper.
*
* Dropper is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Dropper is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Dropper. If not, see <http://www.gnu.org/licenses/>.
*
* @author Adam M. Dutko <adam@runbymany.com>
* @link http://www.runbymany.com
* @copyright Copyright &copy; 2011 RunByMany, LLC
* @license GPLv3 or Later
*/

/**
  * The interface for the Dropper wrapper library around the DigitalOcean.com API.
  *
  * @interface DropperInt
  */
interface DropperInt 
{

    /**
      * The setup method required to source configuration values and check for 
      * various dependencies.
      *
      * @param string $config The path to a valid settings.ini file.
      */
    public function setup($config);
    
}

?>
