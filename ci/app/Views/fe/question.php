<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="<?=base_url('fe/css/tailwind.css')?>">
</head>
<style>
    .min-h-70{
        min-height: 73vh;
    }
    .max-h-15{
        max-height: 15vh;
    }
    .list-group li{
        display: none;
    }
    .list-group .active{
        display: block;
    }
</style>

<body class="min-h-screen">
    <header class="sticky top-0 inset-x-0 flex justify-between items-center bg-white py-6 md:px-16 px-4 max-h-15 bg-red-100">
        <img src="<?=base_url('assets/media/image/logo.png')?>" alt="" width="60px">
        <p class="font-thin md:text-3xl sm:text-base hidden md:block"><?=$title?></p>
        <p class="font-thin md:text-3xl sm:text-base " id="countdown">RayyanTech Exams</p>
        <!-- <span class="ml-5 text-white text-monospace h3" id="countdown"></span> -->
    </header>
    <main class="pb-8 px-16 md:px-32 min-h-70 flex flex-col justify-center">
        <div>
            <div class="-ml-10 py-5">
                <p class="text-2xl text-center md:hidden"><?=$title?></p>
                <p><?=$description?></p>
            </div>
            <p class="text-center text-2xl" id="numbering"></p>
            <form action="quizlet" id="quizlet" method="post">
                <?php
                $cat = json_decode($questions);
                $combo = range(0, (count($cat)-1));
                ?>
                <ol class="list-group">
                     <?php foreach ($combo as $key => $random) : ?>
                    <li class="bg-blue-100 py-8 px-4 shadow-2xl mb-3 quizz ">
                        <div class="page-section">
                            <div class="page-separator">
                                <p class="measure-lead-max text-90 text-black-70">
                                    <?= ((array) $cat[$random])[0] ?></p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="a" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[1] ?> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="b" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[2] ?> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="c" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[3] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="d" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[4] ?></label>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <?php endforeach; ?>
                </ol>
                <div class="text-center">
                    <a href="#!" id="prev" class="mt-2 p-1 px-4 border-2 rounded-lg bg-green-600 text-white hover:shadow-xl hover:text-green-500 hover:bg-white cursor-pointer hidden">Prev</a>
                    <input type="submit" id="subm" class="mt-2 p-1 px-4 border-2 rounded-lg bg-red-600 text-white hover:shadow-xl hover:text-red-500 hover:bg-white cursor-pointer hidden" value="Submit Quiz">
                    <a href="#!" id="next" class="mt-2 p-1 px-4 border-2 rounded-lg bg-green-600 text-white hover:shadow-xl hover:text-green-500 hover:bg-white cursor-pointer">Next</a>
                </div>


        </div>
        <!-- <div class="min-h-30"></div> -->
    </main>
    <footer class="bg-blue-400 py-4 px-16 max-h-15">
        <div class="text-white mb-2">
            <p class="m-0 text-xl flex justify-start items-center"> <img src="img/logo-light.png" alt="" width="75px"> &nbsp; &nbsp; &nbsp; &nbsp; RayyanTech Exams</p>
            <p class="text-sm md:text-base">A platform created to monitor, track and test students.</p>
        </div>
        <p class="text-center text-white text-sm">App by <a href="https://rayyantech.sgm.ng" class="hover:underline">RayyanTech</a> </p>
    </footer>
    <script src="<?=base_url('fe/js/jquery.js')?>"></script>
    <script src="<?=base_url('fe/js/easytimer.js')?>"></script>
    <script>
        let counter = 0;
        $('#next').click(()=>{
            console.log(counter);
            $('#prev').removeClass('hidden');
            document.querySelectorAll('.quizz').item(counter).classList.remove('active')
            counter++
            if(counter+1 == document.querySelectorAll('.quizz').length){
                $('#subm').removeClass('hidden');
                $('#next').addClass('hidden');
            }
            document.querySelectorAll('.quizz').item(counter).classList.add('active');
            number()
        })

        $('#prev').click(()=>{
            $('#next').removeClass('hidden');
            document.querySelectorAll('.quizz').item(counter).classList.remove('active')
            counter--

            if(counter-1 == -1){
                $('#prev').addClass('hidden');
                $('#subm').addClass('hidden');
            }
            document.querySelectorAll('.quizz').item(counter).classList.add('active');
            number()
        })
        function number(){
            document.querySelectorAll('.quizz').item(counter).classList.add('active')
          $('#numbering').html(`${counter+1} of ${document.querySelectorAll('.quizz').length}`)
        }
        number()
        // Countdown
        var cd = 375;
        var timer = new Timer();
        timer.start({
            countdown: true,
            startValues: {
                seconds: cd
            }
        });
        var tmr = new Timer();
        tmr.start({
            countdown: true,
            startValues: {
                seconds: 119
            }
        });

        $('#countdown').html(timer.getTimeValues().toString());

        timer.addEventListener('secondsUpdated', function(e) {
            $('#countdown').html(timer.getTimeValues().toString());
        });

        timer.addEventListener('targetAchieved', function(e) {
            $('#quizlet').submit();
            $('#countdown').html('Time up!!');
        });
        tmr.addEventListener('targetAchieved', function(e) {
            $('#countdown').addClass('text-red-600');
            $('#countdown').addClass('font-bold');
            $('#countdown').addClass('text-3xl');
        });
    </script>
</body>

</html>