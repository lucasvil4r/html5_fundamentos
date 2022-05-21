<html>

    <head>
        <title>Meu primeiro site em PHP!</title>

        <script> scr="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <style type="text/css">
            .linha  {
                font-weight: bold;
                color: green;
                padding-left: 50px;
                line-height: 100px;
            }
        </style>
    </head>

    <body>

        <?php
            for ( $i = 0 ; $i < 10 ; $i++ ) {
                print( "<span class=\"linha\">linha número " . $i . "</span><br />");
            }
        ?>

    </body>

    <script type="text/javascript">
        $(document).ready(function()    {
            alert("Deu certo!");
        });
    </script>

</html>
