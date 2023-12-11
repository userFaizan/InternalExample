// $(document).ready(function () {
//     var currentStep = 0;
//
//     $('form fieldset').not(':first').hide();
//
//     $(document).on('click', '.next', function () {
//         var isValid = true; // Implement your validation logic here
//
//         if (isValid) {
//             $('form fieldset').eq(currentStep).hide();
//             currentStep++;
//
//             // Check if the current step is the last step
//             if (currentStep < $('form fieldset').length) {
//                 // Show the next step
//                 $('form fieldset').eq(currentStep).show();
//             } else {
//                 // Change the button type to "submit" on the last step
//                 $('.next').attr('type', 'submit');
//             }
//
//             updateProgressBar(currentStep);
//         }
//     });
//
//     function updateProgressBar(step) {
//         var percent = (step / $('form fieldset').length) * 100;
//         $('.progress-bar').css('width', percent + '%');
//     }
// });
//
// $(document).ready(function () {
//     $("#msform").submit(function (event) {
//         event.preventDefault();
//
//         var formData = $(this).serialize();
//
//         $.ajax({
//             type: "POST",
//             url: "/submit-form",
//             data: formData,
//             dataType: "json",
//             success: function (response) {
//                 console.log(response);
//                 $("#result").text("Calculated Percentage: " + response.percentage + "%");
//             },
//             error: function (error) {
//                 console.error(error);
//             }
//         });
//     });
// });



$(document).ready(function () {
    // Set up a variable to keep track of the current step
    var currentStep = 0;

    // Hide all fieldsets except the first one
    $('form fieldset').not(':first').hide();

    // Handle the click event for the "Next" button
    $(document).on('click', '.next', function () {
        // Validate current step if needed
        var isValid = true; // Implement your validation logic here

        if (isValid) {
            // Hide the current step
            $('form fieldset').eq(currentStep).hide();

            // Move to the next step
            currentStep++;

            // Show the next step
            $('form fieldset').eq(currentStep).show();

            // Update the progress bar
            updateProgressBar(currentStep);
        }
    });

    // Handle the form submission
    $("#msform").submit(function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Serialize form data
        var formData = $(this).serialize();

        // Send an AJAX request to the server
        $.ajax({
            type: "POST",
            url: "/submit-form", // Use the correct route name
            data: formData,
            dataType: "json",
            success: function (response) {
                // Handle the response (update UI, display a message, etc.)
                console.log(response);

                // For example, update the result fieldset with the calculated percentage
                $("#result").html("Calculated Percentage: " + response.totalPercentage + "%");

                // Hide the current step and show the result step
                $('form fieldset').eq(currentStep).hide();
                currentStep++;
                $('form fieldset').eq(currentStep).show();

                // Update the progress bar
                updateProgressBar(currentStep);
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    // Function to update the progress bar
    function updateProgressBar(step) {
        var percent = (step / $('form fieldset').length) * 100;
        $('.progress-bar').css('width', percent + '%');
    }
});
