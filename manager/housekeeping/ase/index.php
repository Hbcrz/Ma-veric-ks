<?PHP
/**-------------- Copyright (C) 2013 - Mavericks Trynity -------------------------
	
	 * Author: |Lion - All rights reserved.
     * This program is private: you can not redistribute it and/or modify
     * it under the terms of the GNU General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.

     * This program is distributed in the hope that it will be useful,
     * but without any warranty without even the implied warranty of
     * merchantability or fitness for a particular purpose. See the
     * GNU General Public License for more details.

   ---------------------------------------------------------------------*/

Require '../../../Init.php';

if(!$ase->LoginExist())
    new CompressHtml( Mavericks::$Template->draw('housekeeping_login') );
else
    new CompressHtml( Mavericks::$Template->draw('housekeeping_home') );