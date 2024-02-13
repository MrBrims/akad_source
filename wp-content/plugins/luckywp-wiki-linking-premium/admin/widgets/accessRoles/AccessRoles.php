<?php

namespace luckywp\wikiLinkingPremium\admin\widgets\accessRoles;

use luckywp\wikiLinkingPremium\core\base\Widget;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\core\helpers\Html;

class AccessRoles extends Widget
{

    /**
     * @var array
     */
    public $field;

    public function run()
    {
        $value = Core::$plugin->settings->getValue($this->field['group'], $this->field['id'], [], false);
        if (!is_array($value)) {
            $value = [];
        }

        // Роли
        $roles = [];
        foreach (wp_roles()->roles as $role => $details) {
            $roles[$role] = translate_user_role($details['name']);
        }

        // HTML
        $html = Html::hiddenInput($this->field['name']);
        foreach ($roles as $roleId => $roleName) {
            $options = [
                'label' => $roleName,
                'value' => $roleId,
            ];
            $checked = in_array($roleId, $value);
            if ($roleId == 'administrator') {
                $checked = true;
                $options['disabled'] = true;
            }
            $html .= '<p>' . Html::checkbox($this->field['name'] . '[]', $checked, $options) . '</p>';
        }
        return $html;
    }
}
