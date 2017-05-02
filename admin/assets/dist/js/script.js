// Add Record
function addRecord() {
    // get values
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var gender = $("#gender").val();
    var mobile = $("#mobile").val();
    var zone = $("#zone").val();
    var state = $("#state").val();
    var city = $("#city").val();
    var zipcode = $("#zipcode").val();
    var photo = $("#photo").val();
    var slogan = $("#slogan").val();
    var work_education = $("#work_education").val();
    var about_me = $("#about_me").val();
    var last_login = $("#last_login").val();
    var corp_id = $("#corp_id").val();



    // Add record
    $.post("ajax/addRecord.php", {
        first_name: first_name,
        last_name: last_name,
        email: email,
        password: password,
        gender: gender,
        mobile: mobile,
        zone: zone,
        state: state,
        city: city,
        zipcode: zipcode,
        photo: photo,
        slogan: slogan,
        work_education: work_education,
        about_me: about_me,
        last_login: last_login,
        corp_id: corp_id
    },

        function (data, status) {
            // close the popup
            $("#add_new_record_modal").modal("hide");

            // read records again
            readRecords();

            // clear fields from the popup
            $("#first_name").val("");
            $("#last_name").val("");
            $("#password").val("");
            $("#gender").val("");
            $("#mobile").val("");
            $("#state").val("");
            $("#email").val("");
            $("#city").val("");
            $("#zipcode").val("");
            $("#photo").val("");
            $("#slogan").val("");
            $("#work_education").val("");
            $("#about_me").val("");
            $("#last_login").val("");
            $("#corp_id").val("");
        });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
            id: id
        },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
        id: id
    },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_first_name").val(user.first_name);
            $("#update_last_name").val(user.last_name);
            $("#update_email").val(user.email);
            $("#update_gender").val(user.update_gender);

            $("#update_mobile").val(user.update_mobile);
            $("#update_gender").val(user.update_gender);
            $("#update_zone").val(user.update_zone);
            $("#update_state").val(user.update_state);
            $("#update_city").val(user.update_city);
            $("#update_zipcode").val(user.update_zipcode);
            $("#update_photo").val(user.update_photo);
            $("#update_slogan").val(user.update_slogan);
            $("#update_work_education").val(user.update_work_education);
            $("#update_about_me").val(user.update_about_me);
            $("#update_last_login").val(user.update_last_login);
            $("#update_corp_id").val(user.update_corp_id);

        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var first_name = $("#update_first_name").val();
    var last_name = $("#update_last_name").val();
    var email = $("#update_email").val();

    var gender = $("#update_gender").val();
    var mobile = $("#update_mobile").val();
    var zone = $("#update_zone").val();
    var State = $("#update_State").val();
    var city = $("#update_city").val();
    var zipcode = $("#update_zipcode").val();
    var DOB = $("#update_DOB").val();
    var slogan = $("#update_slogan").val();
    var work_education = $("#update_work_education").val();
    var about_me = $("#update_about_me").val();
    var last_login = $("#update_last_login").val();
    var corp_id = $("#update_corp_id").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
        id: id,
        first_name: first_name,
        last_name: last_name,
        email: email,
        password: password,
        gender: gender,
        mobile: mobile,
        zone: zone,
        state: state,
        city: city,
        zipcode: zipcode,
        photo: photo,
        slogan: slogan,
        work_education: work_education,
        about_me: about_me,
        last_login: last_login,
        corp_id: corp_id

    },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});