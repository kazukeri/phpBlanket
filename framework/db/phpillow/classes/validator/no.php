<?php
/**
 * phpillow CouchDB backend
 *
 * This file is part of phpillow.
 *
 * phpillow is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation; version 3 of the License.
 *
 * phpillow is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for
 * more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with phpillow; if not, write to the Free Software Foundation, Inc., 51
 * Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @package Core
 * @version arbit-0.5-alpha
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPL
 */

/**
 * Pseudo no-validator
 *
 * @package Core
 * @version arbit-0.5-alpha
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPL
 */
class phpillowNoValidator extends phpillowValidator
{
    /**
     * Do not validate input, but just pass.
     * 
     * Do not validate input, but just pass.
     * 
     * @param mixed $input 
     * @return mixed
     */
    public function validate( $input )
    {
        return $input;
    }
}

