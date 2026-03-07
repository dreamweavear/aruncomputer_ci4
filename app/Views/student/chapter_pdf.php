<!DOCTYPE html>
<html lang="hi">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&family=Noto+Sans+Devanagari:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?= $chapter['name'] ?></title>
<style>
        @font-face {
        /* font-family: 'Noto Sans', sans-serif; */
        /* src: url('<?= base_url('fonts/NotoSans.ttf') ?>') format('truetype'); */

      
        font-family: 'Noto Sans Devanagari';
        src: url('<?= base_url('fonts/NotoSansDevanagari.ttf') ?>') format('truetype');
        

    }

    body {
        /* font-family: 'Noto Sans', sans-serif; */
       
        font-size: 18px;
         font-weight: normal;
        line-height: 1.8;
         font-family: 'Noto Sans Devanagari', sans-serif !important;
         /* font-family: 'NotoSansDevanagari', sans-serif !important; */
        
    word-spacing: 2px; /* Add word spacing */
    text-rendering: geometricPrecision; /* Improve rendering */


    }

    h1, h2, h3, h4, h5, h6, strong, b {
    /* font-family: 'Noto Sans', sans-serif !important; */
    /* font-family: 'NotoSansDevanagari', sans-serif; */
     font-family: 'Noto Sans Devanagari', sans-serif;
    font-weight: normal;
    font-size: 20px;
    line-height: 1.8;
    text-rendering: geometricPrecision; /* Improve rendering */
}
</style>

</head>
<body>
    <?= $chapter['content'] ?>
</body>
</html>



<style>
    @font-face {
        font-family: 'Noto Sans Devanagari';
        src: url('<?= base_url('fonts/NotoSansDevanagari.ttf') ?>') format('truetype');
    }
    body {
        font-family: 'Noto Sans Devanagari', sans-serif;
    }
</style>