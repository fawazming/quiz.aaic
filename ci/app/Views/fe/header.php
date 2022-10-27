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
</style>
<body class="min-h-screen">
    <header class="flex justify-between items-center bg-white py-6 px-16 max-h-15 bg-red-100">
        <img src="<?=base_url('assets/media/image/logo.png')?>" alt="" width="60px">
        <p class="font-thin md:text-3xl sm:text-base">AAIC Exams</p>
    </header>