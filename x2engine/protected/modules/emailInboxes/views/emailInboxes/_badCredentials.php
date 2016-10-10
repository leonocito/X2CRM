<?php
/***********************************************************************************
 * X2CRM is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2016 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. on our website at www.x2crm.com, or at our
 * email address: contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 **********************************************************************************/

Yii::app()->clientScript->registerCss('_badCredentialsCss',"
#my-email-inbox-reconfigure-instructions-container {
    border: none;
    background: none;
    padding: 0;
}
");

?>
<div id='inbox-body-container' class='inbox-body-container'>
    <div id='my-email-inbox-reconfigure-instructions-container'>
        <div>
            <h2><?php 
                echo CHtml::encode (Yii::t('emailInboxes', 
                    "Failed to open IMAP connection. Please check your email configuration and ".
                    "ensure that your email credentials are valid. The error given was: "));
                ?>
                <div class='imap-error-msg'>
                     <?php echo $error; ?>
                </div>
            </h2>
            <a href='<?php echo $this->createUrl ('/emailInboxes/configureMyInbox'); ?>'><?php
                echo Yii::t('emailInboxes', '-Configure your personal email inbox-'); 
            ?></a>
        </div>
    </div>
</div>

