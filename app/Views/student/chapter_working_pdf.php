<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title><?= $chapter['name'] ?></title>
<style>
        @font-face {
        font-family: 'Noto Sans', sans-serif;
        src: url('<?= base_url('fonts/NotoSans.ttf') ?>') format('truetype');

        /* src: url('<?= base_url('fonts/NotoSansDevanagari-Regular.ttf') ?>') format('truetype'); */             
    }

    body {
        font-family: 'Noto Sans', sans-serif;
        /* font-family: 'NotoSansDevanagari', sans-serif; */
        font-size: 18px;
         font-weight: normal;
        line-height: 1.8;


         /* font-family: 'NotoSansDevanagari', sans-serif !important; */
        
    word-spacing: 2px; /* Add word spacing */
    text-rendering: geometricPrecision; /* Improve rendering */


    }

    h1, h2, h3, h4, h5, h6, strong, b {
    font-family: 'Noto Sans', sans-serif !important;
    /* font-family: 'NotoSansDevanagari', sans-serif; */
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
