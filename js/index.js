$(document).ready(function ()
{
	$(".thumb img").on("mouseover", function ()
	{
		$(this).css("filter", "grayscale(0%)").css("cursor", "pointer");
	});

	$(".thumb img").on("mouseout", function ()
	{
		$(this).css("filter", "grayscale(90%)");
	});

	$(".thumb img").on("click", function ()
	{
		$("#modal").modal("toggle");
		$("#modal-imagem").attr("src", $(this).attr("src"))
	});

	$(".continue-reading").on("click", function ()
	{
		$("#modal-news").modal("toggle");
	});
});
