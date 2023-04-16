$(document).ready(function () {
    $("form").submit(function (event) {

        $(".form-group").removeClass("has-error");
        $(".help-block").remove();

      var formData = {
        fullname: $("#fullname").val(),
        email: $("#email").val(),
        number: $("#number").val(),
        dateofbirth: $('#date_picker').val(),
        age: $('#age').val(),
        gender: $('#gender').val()
      };
  
      $.ajax({
        type: "POST",
        url: "controller/validate.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        if (!data.success) {

            if (data.errors.fullname) {
                $("#fullname-group").addClass("has-error");
                $("#fullname-group").append(
                    '<div class="help-block">' + data.errors.fullname + "</div>"
                );
            }

            if (data.errors.email) {
                $("#email-group").addClass("has-error");
                $("#email-group").append(
                '<div class="help-block">' + data.errors.email + "</div>"
                );
            }

            if (data.errors.number) {
                $("#number-group").addClass("has-error");
                $("#number-group").append(
                '<div class="help-block">' + data.errors.number + "</div>"
                );
            }

            if (data.errors.dateofbirth) {
                $("#dateofbirth-group").addClass("has-error");
                $("#dateofbirth-group").append(
                '<div class="help-block">' + data.errors.dateofbirth + "</div>"
                );
            }

            if (data.errors.age) {
                $("#age-group").addClass("has-error");
                $("#age-group").append(
                '<div class="help-block">' + data.errors.age + "</div>"
                );
            }

            if (data.errors.gender) {
                $("#gender-group").addClass("has-error");
                $("#gender-group").append(
                '<div class="help-block">' + data.errors.gender + "</div>"
                );
            }

        } else {
            $.ajax({
                type: "POST",
                url: "controller/insert.php",
                data: formData,
                dataType: "json",
                encode: true,
              }).done(function (data) {
                $("form").html(
                    '<div class="alert alert-success">' + data.message + "</div>"
                );
            }).fail(function (data) {
                console.log(data);
                $("form").html(
                  '<div class="alert alert-danger">' + data.errors + "</div>"
                );
              });
        }
      }).fail(function (data) {
        $("form").html(
          '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
        );
      });
  
      event.preventDefault();
    });
  });