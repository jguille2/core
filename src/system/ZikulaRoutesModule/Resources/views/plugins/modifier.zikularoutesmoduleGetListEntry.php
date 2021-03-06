<?php
/**
 * Routes.
 *
 * @copyright Zikula contributors (Zikula)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @author Zikula contributors <support@zikula.org>.
 * @link http://www.zikula.org
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.6.2 (http://modulestudio.de).
 */

/**
 * The zikularoutesmoduleGetListEntry modifier displays the name
 * or names for a given list item.
 *
 * @param string $value      The dropdown value to process.
 * @param string $objectType The treated object type.
 * @param string $fieldName  The list field's name.
 * @param string $delimiter  String used as separator for multiple selections.
 *
 * @return string List item name.
 */
function smarty_modifier_zikularoutesmoduleGetListEntry($value, $objectType = '', $fieldName = '', $delimiter = ', ')
{
    if (empty($value) || empty($objectType) || empty($fieldName)) {
        return $value;
    }

    $serviceManager = ServiceUtil::getManager();
    $helper = $serviceManager->get('zikularoutesmodule.listentries_helper');

    return $helper->resolve($value, $objectType, $fieldName, $delimiter);
}
