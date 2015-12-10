/*
|
| CONSOLE STUB FOR OLD BROWSERS
|
*/
if(!this.console){
	this.console = function(){
		this.log = this.alert = this.info = this.error = this.debug = function(){};
	}
}


$(document).ready(function(){
    
    window.objectManager = new ObjectManager();
    objectManager.initObjects();

});