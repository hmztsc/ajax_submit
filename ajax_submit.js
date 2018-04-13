/*

What does it do ?
Basic ajax form senders for all forms

Author : Hamza TAŞCI - Full Stack Web Developer
github.com/hmztsc

*/

$("form.ajax").submit(function(e){
    e.preventDefault();

    var t = $(this),
        id = t.attr("id"),
        name = t.attr("name"),
        url = t.attr("action"),
        type = t.attr("method"),
        data = t.serialize();

    console.log(id);

    if(!t.find(".ajax_loader").length){
        t.append("<div class='ajax_loader'><i class='fa fa-3x fa-refresh fa-spin'></i></div>");
    }

    var ajax_loader = t.find(".ajax_loader");

    $.ajax({
        url:url,
        type:type,
        data:data,
        beforeSend:function () {

            ajax_loader.addClass("active");

            /* FORM 1 */

            form1_beforeSend(id);
            form2_beforeSend(id);
            /*
            form3_beforeSend(id);
            */
        },
        success:function (data) {

            setTimeout(function () {
                ajax_loader.removeClass("active");
            },100);

            form1_success(id,data);
            form2_success(id,data);
            /*
            form3_success(id);
            */
        }
    });

});

/* Form 1 = Start*/
function form1_beforeSend(id){

    if(id!="callRequest") return

}
function form1_success(id,data){

    if(id!="callRequest") return

    console.log(data);

}
/* Form 1 = End */

/* Form 2 = Start */
function form2_beforeSend(id){

    if(id!="subscribe") return

}

function form2_success(id,data){

    if(id!="subscribe") return

    console.log(data);

}
/* Form 2 = End */