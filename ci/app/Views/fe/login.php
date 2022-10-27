    <main class="pb-8 px-16  text-center min-h-70 flex flex-col justify-center">
        <div class="">
            <div class="-ml-10 py-5">
                <p class="text-2xl">Sign up / Sign In</p>

            </div>
            <form action="login" method="post" class="bg-blue-100 py-12 shadow-2xl text-center">
                <fieldset>
                    <label for="quiz code" class="font-serif sm:text-sm md:text-2xl mb-4">Surname:</label> <br class="md:d-block sm:hidden">
                    <input type="text" placeholder="Enter your Surname" name="password" class="sm:mt-2 md:mt-4 p-3 px-4 border-2 rounded-lg">
                </fieldset>
                <fieldset>
                    <label for="quiz code" class="font-serif sm:text-sm md:text-2xl mb-4">ADM No:</label> <br class="md:d-block sm:hidden">
                    <input type="number" placeholder="Enter your admission number" name="email" class="sm:mt-2 md:mt-4 p-3 px-4 border-2 rounded-lg">
                </fieldset>

                <!-- <br> -->
                <input type="submit" class="mt-2 p-1 px-4 border-2 rounded-lg bg-blue-600 text-white hover:shadow-xl hover:text-blue-500 hover:bg-white cursor-pointer" value="Start Quiz">
            </form>
        </div>
        <!-- <div class="min-h-30"></div> -->
    </main>
