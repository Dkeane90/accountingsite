<?php
loadPartial("head");
loadPartial("navbar");
?>

<section>
    <div class="flex flex-col items-center">
        <h2 class="h2-primary">Please login</h2>
    </div>

    <div class=" p-16 bg-orange-400 rounded-lg mx-auto my-16 w-1/2">


        <form action="">
            <div class="flex flex-col items-center">
                <div class="mb-8">
                    <label for="first name"></label>
                    <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none" placeholder="First Name" type="text" name="firstname" value="">
                    <label for="lname"></label>
                    <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none" placeholder="Last Name" type="text" name="lastname" value=""><br><br>
                    <label for="email"></label>
                    <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none" placeholder="Email address" type="email" name="email" value="">

                    <label for="password"></label>
                    <input class="border-2 rounded-md border-slate-200 p-2 focus:outline-none" placeholder="Enter your Password" type="password" name="password" value=""><br><br>
                </div>
                <button class="button-forms" type="submit" value="submit">Login</button>
                <p class="mt-2">No account? <a class="text-blue-800" href="/signup">Sign up</a></p>
            </div>


        </form>

    </div>

</section>


<h1>TEST</h1>

<?php
loadPartial("footer");
?>