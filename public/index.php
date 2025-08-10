<?php
require "../helpers.php";
// loadView("home");
loadPartial("head");
loadPartial("navbar");
?>



<!-- Why consultants -->

<section>

    <!-- Main Div -->
    <div class="flex flex-col md:flex-row gap-8 justify-center ">
        <!-- Right side -->
        <div class="flex flex-col ">
            <div>
                <h2 class="h2-primary mb-8">Why Account <br class=""> Consultants?</h2>
            </div>
            <div>
                <p class="paragraph-secondary"> We&apos;re driven by the belief that great things happen through partnerships.<br> Our mission is to give businesses the opportunity to thrive by simplifying their financial and people complexities. <br>We combine exceptional talent with cutting-edge technology, providing individualized solutions that empower both your team and your business.
                </p>
            </div>

        </div>

        <div>
            <img src="https://i.ibb.co/bw0L4sG/portrait-attractive-cuban-woman-presenting-statistical-information-her-unrecognizable-boss-1.png" alt="portrait-attractive-cuban-woman-presenting-statistical-information-her-unrecognizable-boss-1">

        </div>

    </div>


</section>

<?php
loadPartial("footer");
?>