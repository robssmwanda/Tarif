
$(function() {

  $('#formData').submit(function(e) {
    e.preventDefault()
    $('.comments').empty();
    let postdata = $('#formData').serialize();
    
     $.ajax({
        type: 'POST',
        url: 'ScriptPHP/script.php',
        data: postdata,
        dataType: 'json',
        success: function(result) {
            if(result.isSuccess) {
                $("#formData").append("<p>Merci beaucoup !</p>");
                $("#formData")[0].reset()
            }else {
                $("#firstname + .comments").html(result.firstnameErr);
                $("#email + .comments").html(result.emailErr);
                $("#contact + .comments").html(result.messageErr);
            }
        }

     });

  });

});