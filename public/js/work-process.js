function changeWorkProcess(element) {
    const currentWorkProcessNumber = $("#work-process-selectors .active").data(
        "work-process"
    );
    const selectedWorkProcessNumber = $(element).data("work-process");

    $(`.work-process-selector[data-work-process="${currentWorkProcessNumber}"]`)
        .removeClass("active bg-white text-custom-light-green")
        .addClass(
            "bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray"
        );

    $(
        `.work-process-selector[data-work-process="${selectedWorkProcessNumber}"]`
    )
        .removeClass(
            "bg-custom-light-green/20 hover:bg-custom-light-green/30 text-custom-dark-gray"
        )
        .addClass("active bg-white text-custom-light-green");

    $(
        `.work-process-detail[data-work-process="${currentWorkProcessNumber}"]`
    ).fadeOut("fast", function () {
        $(
            `.work-process-detail[data-work-process="${selectedWorkProcessNumber}"]`
        ).fadeIn("fast");
    });
}
