<?php
require "../helpers.php";
// loadView("home");
loadPartial("head");
loadPartial("navbar");
?>



<!-- Why consultants -->

<section>
    <!-- Main Div -->
    <div class="flex flex-col md:flex-row justify-center items-center gap-10 px-20 mt-20 mb-24">
        <!-- Top Left side -->
        <div class="flex flex-col justify-between md:flex-row p-16 bg-orange-100">
            <div>
                <h2 class="h2-primary mb-8">Why Account Consultants?</h2>
                <div>
                    <p class="paragraph-left"> We&apos;re driven by the belief that great things happen through partnerships.<br> Our mission is to give businesses the opportunity to thrive by <br>simplifying their financial and people complexities. <br>We combine exceptional talent with cutting-edge technology, providing individualized solutions <br> that empower both your team and your business.
                    </p>
                    <div class="flex flex-col md:flex-row mt-8 md:gap-10">
                        <a class="button" href="">Let&#39;s Chat</a>
                        <a class="button-secondary" href="">See Reviews</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Side -->
        <div class="hover:scale-105 transition-transform duration-300">
            <img src="https://i.ibb.co/67zcZ9JR/portrait-attractive-cuban-woman-presenting-statistical-information-her-unrecognizable-boss-1-3.png" alt="portrait-attractive-cuban-woman-presenting-statistical-information-her-unrecognizable-boss-1-3">

        </div>

    </div>
</section>

<section>
    <!-- Middle Section -->
    <div class="flex flex-col md:flex-row justify-center gap-28 mt-16 mb-24 ">
        <!-- Left Side -->

        <div class="flex flex-col justify-start ">
            <div>

                <h2 class="h2-primary">Say Goodbye To <br>Your Financial Headaches</h2>
            </div>

            <div class="flex flex-col">
                <div class="h3-primary pt-16">Founder&apos;s frustrations</div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “Where&apos;d our cash go?”
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “We need a CFO to figure it all out!”
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “Another surprise expense?!”
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “I&apos;m not a technical wizard.”
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “Another tax season surprise?”
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “I have to figure it out alone?”
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-red-400">x&nbsp; </span> “Chaotic financial data!”
                </div>
            </div>


        </div>

        <!-- Right Side -->
        <div class="flex flex-col justify-start ">
            <p class="paragraph-left mb-4 ">Feeling overwhelmed? Solving unique and complex problems can be hard for some <br>accounting solutions. Accounting Consultants handle yours with strategy, accuracy,<br> and automation, ensuring you always have an answer for the toughest questionor scenario.</p>
            <div class="flex flex-col">
                <div class="h3-primary pt-16">Accounting Consultants solutions</div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> Real-time financial dashboard
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> Get the answers, without the cost
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> Streamlined, automated systems
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> User-friendly financial tools
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> Year-round tax strategy
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> Your dedicated finance team
                </div>
                <div class="py-8 border-b-2 border-slate-400 mb-16 text-xl font-bold text-gray-600">
                    <span class="text-xl font-bold text-green-600">&check;&nbsp; </span> Centralized financial ecosystem
                </div>

                <div> <a class="button" href="">Solve Yoir Finance Challenges &rarr;</a></div>
            </div>


        </div>

    </div>

</section>

<section>
    <div class="flex flex-col items-center my-16">

        <h2 class="h2-primary mb-4 text-center">End-to-end Finance Operations. <br>All in one place.</h2>
        <p class="paragraph-left">We deliver financial services that meet the unique needs and nuances of your business. Together, we’ll create a financial solution as exceptional as your vision.</p>

    </div>
</section>

<?php
loadPartial("footer");
?>