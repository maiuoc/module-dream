define(['module1','jquery'], function (module1ref,$) {
    var module1 = new module1ref();
    var returnedModule = function () {
        this.getModule1Name = function () {
            return module1.getName();
        };
		this.showMsg = function()
		{
			console.log(module1.getName()+'Show Msg ka ka');
		};
    };
  
    return returnedModule;
  
});