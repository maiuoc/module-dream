define([
    'jquery',
	'uiComponent',
], function ($, Component) {
	'use strict';	
    $(document).ready(function(){	
		$('#mai-uoc').click(function()
		{
			alert("test");
		})
    });
	return $.MST_Dream.maiuoc;
});