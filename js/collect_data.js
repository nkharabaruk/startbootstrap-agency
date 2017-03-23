function collectData(data) {
    $.ajax({
        url: "././mail/collect_data.php",
        type: "POST",
        data: {info: data},
        cache: false,
        success: function () {
            console.log("some browser data collected");
        },
        error: function () {
            console.log("something went wrong");
        }
    });
}

