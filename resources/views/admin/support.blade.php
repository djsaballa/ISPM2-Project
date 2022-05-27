<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{asset('css/support.css')}}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

    <title>eMachine | Support</title>
</head>

<body>
    <div>
        <sideNav>
            @include('components.sidenavAdmin')
        </sideNav>
        <h1 class="supp-header">SUPPORT</h1>
        <h5 class="supp-subhead">How can we help you?</h5>

        <div id="faq" class="faq-body">
            <div class="faq-header">
                <h3 class="faq-title">FAQ's</h3>
                <div class="seperator"></div>
            </div>
            <div class="faq-list">
                <div>
                    <details open>
                        <summary title="How to add an event?">How to add an event?</summary>
                        <p class="faq-content">Step 1: Go to the upcoming events page. <br>
                            Step 2: Click the “add” button on the upper right of the table.<br>
                            Step 3: Input the event’s details on the form.<br>
                            Step 4: Lastly, click “save” to add the event on the list.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="Can I delete a scheduled event?">Can I delete a scheduled event?</summary>
                        <p class="faq-content">Step 1: Go to the upcoming events page. <br>
                            Step 2: Click the “delete” button parallel to the event you wish to remove.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="How to edit a scheduled event?">How to edit a scheduled event?</summary>
                        <p class="faq-content">Step 1: Go to the scheduled events page. <br>
                            Step 2: Click the “edit” button that corresponds to the event details you're going to edit. <br>
                            Step 3: Edit the details on the form.<br>
                            Step 4: Lastly, click “save” to update the event.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="How to change passwords?">How to change passwords?</summary>
                        <p class="faq-content">Step 1: Go to the list of employee pages. <br>
                            Step 2: Click the “change password” button that corresponds to employee’s detail. <br>
                            Step 3: Change or set to default password. <br>
                            Step 4: Lastly, click “save” to update the event.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="How to Edit bookings?">How to Edit bookings?</summary>
                        <p class="faq-content">If someone have made a mistake in their bookings, you can follow this steps: <br>
                            1st Step: Go to the Bookings Page by clicking the word ‘Bookings’ in the sidebar on the left. <br>
                            2nd Step: on the Bookings Page, we can see two buttons on the right side of each tables, press the ‘Edit’ button of which table you want to edit. <br>
                            3rd Step: Edit the Name, Desk No., Date and/or Reason of the table you had selected. <br>
                            4th Step: Once you had rewrite the table, press the button ‘Edit’.<br>
                            That is how you Edit the Bookings.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="How to Delete an Entry in the Bookings?">How to Delete an Entry in the Bookings?</summary>
                        <p class="faq-content">To Delete an entry in the list follow this two easy steps: <br>
                            1st Step: Go to the Bookings Page by clicking the word ‘Bookings’ in the sidebar on the left. <br>
                            2nd Step: On the Bookings Page, we can see two buttons on the right side of each table, <br> press the ‘Delete’ button and that is how you Edit the Bookings.
                        </p>
                    </details>
                </div>
            </div>
        </div>

    </div>
    <!-- </div> -->
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>