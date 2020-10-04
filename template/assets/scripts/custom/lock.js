var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
		        "../template/assets/img/bg/1.jpg",
		        "../template/assets/img/bg/cvsubg.png",
		        "../template/assets/img/bg/3.jpg",
		        "../template/assets/img/bg/4.jpg"
		        ], {
		          fade: 3000,
		          duration: 8000
		      });
        }

    };

}();