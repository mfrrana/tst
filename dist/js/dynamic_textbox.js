$(document).ready(function () {

    var counter = 2;

    $("#addButtonStuEmail").click(function () {

        if (counter > 2) {
            //alert("Only 10 textboxes allow");
            return false;
        }

        /* var newTextBoxSpan = $(document.createElement('span'))
         .attr("id", 'TextBoxSpan' + counter);*/
        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="stu_email' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupStuEmail");


        counter++;
    });
});

/*=====================For stu_mobile=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonStuMobile").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="stu_mobile' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupStuMobile");


        counter++;
    });


});

/*=====================For stu_phone=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonStuPhone").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="stu_phone' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupStuPhone");


        counter++;
    });


});

/*=====================For mother_email=========================*/
$(document).ready(function () {

    var counter = 2;

    $("#addButtonMotherEmail").click(function () {

        if (counter > 2) {
            //alert("Only 10 textboxes allow");
            return false;
        }

        /* var newTextBoxSpan = $(document.createElement('span'))
         .attr("id", 'TextBoxSpan' + counter);*/
        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="mother_email' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupMotherEmail");


        counter++;
    });
});

/*=====================For mother_mobile=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonMotherMobile").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="mother_mobile' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupMotherMobile");


        counter++;
    });


});

/*=====================For mother_phone=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonMotherPhone").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="mother_phone' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupMotherPhone");


        counter++;
    });


});




/*=====================For father_email=========================*/
$(document).ready(function () {

    var counter = 2;

    $("#addButtonFatherEmail").click(function () {

        if (counter > 2) {
            //alert("Only 10 textboxes allow");
            return false;
        }

        /* var newTextBoxSpan = $(document.createElement('span'))
         .attr("id", 'TextBoxSpan' + counter);*/
        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="father_email' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupFatherEmail");


        counter++;
    });
});

/*=====================For father_mobile=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonFatherMobile").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="father_mobile' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupFatherMobile");


        counter++;
    });


});

/*=====================For father_phone=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonFatherPhone").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="father_phone' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupFatherPhone");


        counter++;
    });


});


/*=====================For attendent_email=========================*/
$(document).ready(function () {

    var counter = 2;

    $("#addButtonAttendentEmail").click(function () {

        if (counter > 2) {
            //alert("Only 10 textboxes allow");
            return false;
        }

        /* var newTextBoxSpan = $(document.createElement('span'))
         .attr("id", 'TextBoxSpan' + counter);*/
        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="attendent_email' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupAttendentEmail");


        counter++;
    });
});

/*=====================For attendent_mobile=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonAttendentMobile").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="attendent_mobile' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupAttendentMobile");


        counter++;
    });


});

/*=====================For attendent_phone=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonAttendentPhone").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="attendent_phone' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupAttendentPhone");


        counter++;
    });


});


/*=====================For teacher_email=========================*/
$(document).ready(function () {

    var counter = 2;

    $("#addButtonTeacherEmail").click(function () {

        if (counter > 2) {
            //alert("Only 10 textboxes allow");
            return false;
        }

        /* var newTextBoxSpan = $(document.createElement('span'))
         .attr("id", 'TextBoxSpan' + counter);*/
        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="teacher_email' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupTeacherEmail");


        counter++;
    });
});

/*=====================For teacher_mobile=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonTeacherMobile").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="teacher_mobile' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupTeacherMobile");


        counter++;
    });


});

/*=====================For teacher_phone=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonTeacherPhone").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="15" name="teacher_phone' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupTeacherPhone");


        counter++;
    });


});



/*============================ENROLEMENT FORM DYNAMIC TEXT BOX======================================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonEmail").click(function () {

        if (counter > 2) {
            //alert("Only 10 textboxes allow");
            return false;
        }
        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="20" name="email' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupEmail");


        counter++;
    });
});

/*=====================For stu_mobile=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonMobile").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="20" name="mobile' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupMobile");


        counter++;
    });


});

/*=====================For stu_phone=========================*/

$(document).ready(function () {

    var counter = 2;

    $("#addButtonPhone").click(function () {

        if (counter > 2) {
            return false;
        }

        var newTextBoxSpan = $(document.createElement('span'))
                .attr("id", 'TextBoxSpan' + counter);


        newTextBoxSpan.after().html('<input type="text" size="20" name="phone' + counter +
                '" id="textbox' + counter + '" value="" >');

        newTextBoxSpan.appendTo("#TextBoxesGroupPhone");


        counter++;
    });


});
