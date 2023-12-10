$(window).on("load", function () {
	const elem = document.querySelector(".mansory");
	new Masonry(elem, {
		itemSelector: ".mansory-item",
		columnWidth: 200,
		gutter: 20,
		columnWidth: ".mansory-sizer",
		percentPosition: true,
	});

	$(".btn-to-top").click(function () {
		$("html", "body").animate(
			{
				scrollTop: 0,
			},
			1500,
			"easeInOutExpo"
		);
	});

	AOS.init();

	const profilIsotope = $(".profil-container").isotope({
		itemSelector: ".profil-item",
	});

	$(".profil-filters li").click(function () {
		$(".profil-filters li").removeClass("filter-active");
		$(".profil-filters li").removeClass("text-white");
		$(this).addClass("filter-active");
		$(this).addClass("text-white");

		profilIsotope.isotope({
			filter: $(this).data("filter"),
		});

		AOS.init();
	});
});
