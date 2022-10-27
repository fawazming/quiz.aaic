    <main class="pb-8 px-16  text-center min-h-70 flex flex-col justify-center">
        <div class="">
            <div class="-ml-10 py-5">
            <p class="text-2xl">Access Quiz</p>
            <?php if($quizinput == 'disabled'): ?>
            <p class="hero__lead measure-hero-lead text-white-50">
            You're very much welcome to this edition of Quiz. <b class="text-red-400"> The Quiz is currently disabled.</b> <br> Check back by 4pm, Quiz will be <i>live</i>  from <span class="text-monospace"> 4pm to 7pm</span>. <br>                Cheers.
            </p>
            <?php endif; ?>
            </div>
            <form action="quiz" method="get" class="bg-blue-100 py-12 shadow-2xl text-center">
                <fieldset>
                    <label for="quiz code" class="font-serif sm:text-sm md:text-2xl mb-4">Quiz Code:</label> <br class="md:d-block sm:hidden">
                    <input <?=$quizinput?> type="text" placeholder="Enter the quiz access code" name="code" class="sm:mt-2 md:mt-4 p-3 px-4 border-2 rounded-lg">
                </fieldset>

                <!-- <br> -->
                <input type="submit" class="mt-2 p-1 px-4 border-2 rounded-lg bg-blue-600 text-white hover:shadow-xl hover:text-blue-500 hover:bg-white cursor-pointer" value="Start Quiz">
            </form>
        </div>
        <!-- <div class="min-h-30"></div> -->
    </main>
