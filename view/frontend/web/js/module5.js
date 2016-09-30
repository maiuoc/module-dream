define(['jquery'], function ($) {
    var returnedModule = function () {
		$(document).ready(function()
		{
			$('#test-new-click-2').click(function(){
				alert('Evert fire');
			})
		});
    };
    return returnedModule;
});