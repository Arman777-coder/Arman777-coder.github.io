<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    bootsrap cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<!--    jquery cdn-->


    <script src="<?= base_url('js/code.jquery.com_jquery-3.7.0.min.js') ?>"></script>




    <!--    formbuilder cdns-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


    <title>Shopify</title>
</head>
<body>
<form action="" class="form-builder">
    <div id="form"></div>
    <button id="save-form" class="btn btn-primary mt-3">Save</button>
    <button id="clear-all-fields" class="btn btn-primary mt-3">Clear</button>
</form>


<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script>
//     $(document).ready(function() {
//
//
//         $('#form').formBuilder();
// lang
//     const dataType = 'json'
//   var formBuilder = $('#form').formBuilder('getData', dataType)
//
//     document.getElementById('clear-all-fields').onclick = function() {
//         formBuilder.actions.clearFields();
//     };
//     $('#save-form').on('click',function () {
//
//  var formData = $('#form').formBuilder('getData', dataType)
//         $.ajax({
//             url: '/form/saveForm',
//             method: 'POST',
//             data: { form_data: formData },
//             success: function(response) {
//                 console.log('Form data saved successfully:', response);
//             },
//             error: function(error) {
//                 console.error('Error saving form data:', error);
//             }
//         });
//     })
//     })
$(document).ready(function() {

    var options = {
        showActionButtons: false // defaults: true
    };
    var formBuilder =   $('#form').formBuilder(options);
    $('#save-form').click(function(e) {
        e.preventDefault();
        var formData = formBuilder.actions.getData('json', true);
        $.ajax({
            url: '/form/saveForm',
            method: 'POST',
            data: { form_data: formData },
            success: function(response) {
                alert('Form data saved successfully:', response);
            },
            error: function(error) {
                alert('Error saving form data:', error);
            }
        });



    });
    $('#clear-all-fields').click(function(e) {
        e.preventDefault();

        formBuilder.actions.clearFields();

    });
});
</script>
</body>
</html>