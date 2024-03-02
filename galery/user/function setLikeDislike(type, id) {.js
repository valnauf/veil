function setLikeDislike(type, id) {
    jQuery.ajax({
        url: "include/setLikeDislike.php",
        type: "post",
        data: "type=" + type + "&id=" + id,
        beforeSend: function () {
            // Show image container
            $("#reaction_loader").show();
            //alert ("yyy");
        },
        success: function (result) {
            result = jQuery.parseJSON(result);
            console.log(result.opertion);
            if (result.opertion == "awesome") {
                jQuery("#awesome_" + id).addClass("awesome_c");
                jQuery("#good_" + id).removeClass("good_c");
                jQuery("#ok_" + id).removeClass("ok_c");
                jQuery("#not_good_" + id).removeClass("not_good_c");
                jQuery("#fail_" + id).removeClass("fail_c");
            }

            if (result.opertion == "good") {
                jQuery("#awesome_" + id).removeClass("awesome_c");
                jQuery("#good_" + id).addClass("good_c");
                jQuery("#ok_" + id).removeClass("ok_c");
                jQuery("#not_good_" + id).removeClass("not_good_c");
                jQuery("#fail_" + id).removeClass("fail_c");
            }

            if (result.opertion == "ok") {
                jQuery("#awesome_" + id).removeClass("awesome_c");
                jQuery("#good_" + id).removeClass("good_c");
                jQuery("#ok_" + id).addClass("ok_c");
                jQuery("#not_good_" + id).removeClass("not_good_c");
                jQuery("#fail_" + id).removeClass("fail_c");
            }
            if (result.opertion == "not_good") {
                jQuery("#awesome_" + id).removeClass("awesome_c");
                jQuery("#good_" + id).removeClass("good_c");
                jQuery("#ok_" + id).removeClass("ok_c");
                jQuery("#not_good_" + id).addClass("not_good_c");
                jQuery("#fail_" + id).removeClass("fail_c");
            }
            if (result.opertion == "fail") {
                jQuery("#awesome_" + id).removeClass("awesome_c");
                jQuery("#good_" + id).removeClass("good_c");
                jQuery("#ok_" + id).removeClass("ok_c");
                jQuery("#not_good_" + id).removeClass("not_good_c");
                jQuery("#fail_" + id).addClass("fail_c");
            }

            if (result.opertion == "un_awesome" || result.opertion == "un_good" || result.opertion == "un_ok" || result.opertion == "un_not_good" || result.opertion == "un_fail") {
                jQuery("#awesome_" + id).removeClass("awesome_c");
                jQuery("#good_" + id).removeClass("good_c");
                jQuery("#ok_" + id).removeClass("ok_c");
                jQuery("#not_good_" + id).removeClass("not_good_c");
                jQuery("#fail_" + id).removeClass("fail_c");
            }

            jQuery("#awesome_" + id + " #awesome").html(result.awesome);
            jQuery("#good_" + id + " #good").html(result.good);
            jQuery("#ok_" + id + " #ok").html(result.ok);
            jQuery("#not_good_" + id + " #not_good").html(result.not_good);
            jQuery("#fail_" + id + " #fail").html(result.fail);
        },

        complete: function (data) {
            // Hide image container
            $("#reaction_loader").hide();
        },
    });
}