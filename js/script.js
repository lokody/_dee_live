/*
jQuery(function($){

	$("a.menu-toggle").on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass("open");
		$("ul.menu-container").toggleClass("open");
	});
});
*/

/*let menuBtn = document.querySelector('.menu-toggle');
let menuUl = document.querySelector('ul.menu');

menuBtn.addEventListener('click', function(event){
	event.preventDefault();
	this.classList.toggle("open");
	menuUl.classList.toggle('open');
});*/



/*let callsidetoggle = document.querySelector('.sidebar-toggle');
if(callsidetoggle) {
	callsidetoggle.addEventListener('click', function(event){
		event.preventDefault();
		//this.classList.toggle("open");
		this.parentElement.classList.toggle("slideup");
		this.parentElement.parentElement.parentElement.classList.toggle("slideup");


		//alert(target.clientHeight);
	});
}*/

function toggleSpeaker(id) {
	let list = document.querySelector("ul.speaker-list");
	list.classList.toggle("disabled");
	let speakerPop = document.getElementById(id);
	speakerPop.classList.toggle("show");
}

function getRandomInt(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function isEmail(email) {
  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(email);
}

jQuery.noConflict();

jQuery(function($){

	let w = $(window).width();
	let h = $(window).height();

	$(".menu-toggle").on("click", function(e){
		e.preventDefault();
		$(this).toggleClass("open");
		$("ul.menu").toggleClass("open");
	});

	$(".sidebar-toggle").on("click", function(e){
		e.preventDefault();
		$(this).parent().toggleClass("slideup");
		$(this).parent().parent().parent().toggleClass("slideup");
	});

	$("a.speaker-thumb").on("click", function(e){
		e.preventDefault();
		$("ul.speaker-list").toggleClass("disabled");
		let sid = $(this).data("speakerid");
		$("#"+sid).toggleClass("show");
	});

	$(".popover .close-btn").on("click", function(e){
		e.preventDefault();
		$("ul.speaker-list").toggleClass("disabled");
		let sid = $(this).parent().attr("id");
		$("#"+sid).toggleClass("show");
	});

	let mousex, mousey;
	let perc, percy;

	let $paeEye = $(".pae-eye");
	let $paeLid = $(".pae-lid");
	

	$(document).mousemove(function(event){
		mousex = event.pageX;
		perc = mousex/w;

		mousey = event.pageY;
		percy = mousey/h;


		let eyePx = -40 + (80 * perc);
		let eyePy = -25 + (50 * percy);
		$paeEye.css({
			"transform" : "translate("+eyePx+"px, "+eyePy+"px)"
		});
	});

	function blinkWait() {
		setTimeout(function(){
			blinkShow();
		}, getRandomInt(300, 5000));
	};

	function blinkShow() {
		$paeLid.addClass("show");
		setTimeout(function(){
			$paeLid.removeClass("show");
			blinkWait();
		}, 100);
	};

	blinkWait();


	$("#regform").change(function(){
		
		var empty = $(this).parent().find(".form-control").filter(function() {
			return this.value === "";
		});

		let qtySum = getQtySum();
		//alert(empty.length);

		let validEmail = isEmail($("#reg-email").val());

		if(!validEmail) {
			$("#reg-email").addClass("not-valid");
			$("#not-valid-msg").show();
		}else {
			$("#reg-email").removeClass("not-valid");
			$("#not-valid-msg").hide();
		}

		if(!empty.length && qtySum > 0 && validEmail) {
			$("#submitbtn").removeClass("disabled").attr("disabled", false);
		}else {
			$("#submitbtn").addClass("disabled").attr("disabled", true);
		}

		/*if(empty.length && qtySum === 0) {
			$("#submitbtn").addClass("disabled").attr("disabled", true);
		}else if(!empty.length && qtySum > 0){
			$("#submitbtn").removeClass("disabled").attr("disabled", false);
		}*/

		updateTotal();

	});

	$("#regform").submit(function(event){
		event.preventDefault();

		if($("#submitbtn").hasClass("disabled")) return;

		//alert("send");

		var formData = new FormData($("#regform")[0]);
		$.ajax({
			url: 'ticketreg.php',  //Server script to process data
			type: 'POST',
		
			//Ajax events
			beforeSend: beforeSendHandler,
			success: completeHandler,
			error: errorHandler,
			// Form data
			data: formData,
			//Options to tell jQuery not to process data or worry about content-type.
			cache: false,
			contentType: false,
			processData: false
		});
	});

	function beforeSendHandler(e){
		//alert("before: "+e);
	}

	function completeHandler(e){
		console.log("e: "+e);
		let msg = JSON.parse(e);
		
		if(msg[0] == 1){
			//alert(msg[1]);
			window.location.href = msg[1];
		}else{
			alert("Ajax error. Please try again.");
		}
		
	}
	function errorHandler(e){
		alert("Error: "+e);
	}

	function getQtySum() {
		let sum = 0;
		$("input.qty").each(function(){
			sum += parseInt(this.value);
		});

		return sum;
	}

	function updateTotal() {
		let sumTickets = 0;
		$("input.qty-ticket").each(function(){
			sumTickets += parseInt(this.value);
		});

		let sumDinner = 0;
		$("input.qty-dinner").each(function(){
			sumDinner += parseInt(this.value);
		});

		let priceTicket = $(".article-container.ticket").data("price");
		$(".article-container.ticket .sum").text(sumTickets);
		$(".article-container.ticket .price").text("€"+(sumTickets * priceTicket));

		let priceDinner = $(".article-container.dinner").data("price");
		$(".article-container.dinner .sum").text(sumDinner);
		$(".article-container.dinner .price").text("€"+(sumDinner * priceDinner));

		let totalPrice = (sumTickets * priceTicket) + (sumDinner * priceDinner);
		let subtotalPrice = 100 * totalPrice / 127;
		subtotalPrice = subtotalPrice.toFixed(2);
		let taxPrice = totalPrice - subtotalPrice;
		taxPrice = taxPrice.toFixed(2);

		$(".total-container.total .price").text("€"+totalPrice);
		$(".total-container.subtotal .price").text("€"+subtotalPrice);
		$(".total-container.tax .price").text("€"+taxPrice);
		$(".pay-button").text("Pay €"+totalPrice);

		//alert(sumTickets);
	}

	$("a.modal-btn").on("click", function(e){
		e.preventDefault();
		let id = $(this).attr("href");
		$(".modal .text-container").removeClass("show");
		$(id).addClass("show");
		$("body").addClass("showmodal");
		//$(".modal-container").fadeIn(200);
		$(".modal-container").show();
	});

	$(".modal a.close-btn, .modal a.close-modal").on("click", function(e){
		e.preventDefault();
		closeModal();
	});

	function closeModal() {
		$(".modal-container").fadeOut(200, function(){
			$("body").removeClass("showmodal");
		});
	}


	$(".modal-container").on("click", function(e){
		//alert(e.target);
		if(!$(".modal").is(e.target) && $(".modal").has(e.target).length === 0) {
     		closeModal();
   		}
	});
	

});