<?php
loadPartial("head");
loadPartial("navbar");
?>

<section>
    <!-- Main Div -->
    <div class="flex flex-col md:flex-row my-20 justify-center gap-8">
        <!-- Left side -->
        <div class="flex flex-col gap-8">
            <h2 class="h2-primary">Get Started with<br> Accounting Consultants</h2>

            <p class="paragraph-left">We handle every aspect of your business's financial operations. Saving you money, time,<br> and resources so you can grow your bottom line.From bookkeeping, accounting, and tax, <br> to payroll and HR, we've got you covered.</p>
            <p class="paragraph-left">Schedule time for a consultation and to review your financial goals.<br>It's time to put your finances on solid ground.</p>
            <div class="flex flex-row gap-8">
                <div class="flex flex-col">
                    <h2 class="h2-primary">85+</h2>
                    <span>
                        <p class="font-bold text-orange-600">NPS Score</p>
                    </span>
                </div>
                <div class="flex flex-col">
                    <h2 class="h2-primary">305+</h2>
                    <span>
                        <p class="font-bold text-orange-600">Happy Customers</p>
                    </span>
                </div>

            </div>


        </div>

        <!-- Right Side -->
        <div class=" p-16 bg-orange-400 rounded-lg ">

            <form action="">
                <div class="flex flex-col justify-between">
                    <div class="mb-8">
                        <label for="fname"></label>
                        <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none" placeholder="First Name" type="text" name="fname" value="">
                        <label for="lname"></label>
                        <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none" placeholder="Last Name" type="text" id="lname" name="lname" value=""><br><br>
                        <label for="email"></label>
                        <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none w-full" placeholder="Email address" type="text" id="email" name="email" value=""><br><br>
                        <label for="lname"></label>
                        <textarea class="border-2 rounded-md border-slate-200 p-2 w-full focus:outline-none" placeholder="Tell us a little about your business and your business needs."></textarea>
                    </div>


                    <button class="button-forms w-full" type="submit" value="submit">Submit</button>

                </div>


            </form>

        </div>



    </div>
</section>


<?php
loadPartial("footer");
?>