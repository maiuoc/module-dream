define([], function ($) {
    var returnedModule = function () {
		var _name = 'module1 name';
        this.getName = function () {
            return _name;
        };
		console.log('it is called module 4');
    };
    return returnedModule;
});