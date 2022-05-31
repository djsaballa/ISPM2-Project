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
            @include('components.sidenavUser')
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
                        <summary title="How can I check my appointment?">How can I check my appointment?</summary>
                        <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed illo quod debitis ducimus iste soluta rerum ipsa consequuntur minus quae. Ea minus ex corporis, pariatur quia rerum sequi iusto odit enim expedita fugiat, assumenda molestiae earum iste blanditiis, ipsum ratione.</p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="What can I expect at my first consultation?">What can I expect at my first consultation?</summary>
                        <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestias similique! Molestiae sapiente omnis, illo facere odit reprehenderit eveniet consequuntur sit minus adipisci temporibus eius inventore quidem. Dignissimos, facere quae. Rem quas a laborum est officia pariatur voluptatum iusto perferendis aut labore fugit magni inventore nulla architecto, velit, facilis itaque.</p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="What are your opening hours?">What are your opening hours?</summary>
                        <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error ea accusantium? Sunt cum in, repudiandae et facere at nesciunt commodi non quia earum libero aliquid labore obcaecati repellendus consequatur! Nesciunt impedit ducimus illum unde optio veritatis atque facere, voluptate a odio asperiores laudantium rerum.</p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="Do I need a referral?">Do I need a referral?</summary>
                        <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quisquam numquam labore explicabo cupiditate laboriosam. Ipsam explicabo possimus illum aspernatur.</p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="Is the cost of the appointment covered by private health insurance?">Is the cost of the appointment covered by private health insurance?</summary>
                        <p class="faq-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quos quam asperiores enim sequi nihil? Iure blanditiis autem in ratione rerum, sequi cupiditate eos nemo iusto unde eaque voluptatum alias, porro aliquid sunt. Nesciunt veritatis, ex esse tempora laudantium officiis? Quas corrupti a aut sed quaerat, ipsa incidunt tempora velit dolor distinctio repellat tenetur illum consectetur quos veniam eius provident earum doloremque commodi! Minus amet, obcaecati rem, modi accusantium ad, deleniti possimus incidunt laudantium vitae iusto laborum culpa! Similique, repellat.</p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="What are the parking and public transport options?">What are the parking and public transport options?</summary>
                        <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quisquam numquam labore explicabo cupiditate laboriosam. Ipsam explicabo possimus illum aspernatur.</p>
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