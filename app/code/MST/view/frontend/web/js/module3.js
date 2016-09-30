/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*jshint browser:true jquery:true*/
define([
    'jquery',
    'mage/template',
], function ($, mageTemplate){
    "use strict";
    $.widget('mage.module3', {
        options: {
           option_1 : 'tes Kak '
        },
        /**
         * Bind handlers to events
         */
        _create: function () {
            this._on({'click [data-role="test_action_element"]': $.proxy(this._testClick, this)});
        },
        /**
		* Method triggers an AJAX request to make API query
		* @private
		*/
		_testClick : function()
		{
			var self = this;
			console.log(self.options.option_1)
		}
        
    })

    return $.mage.module3;
});
