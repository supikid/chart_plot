<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chart Plot</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- data -->

</head>

<body>
    <div class="container">
        <div class="text-center mt-3">
            <h1>Chart Plot</h1>
            <canvas id="myChart" width="400" height="400"></canvas>
            <div>
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mi>y</mi>
                    <mo>=</mo>
                    <mi>A</mi>
                    <msup>
                        <mi>x</mi>
                        <mn>B</mn>
                    </msup>
                    <mo>+</mo>
                    <mi>C</mi>
                </math>
            </div>
            <form class="mt-2">
                <div class="row">
                    <div class="form-floating col">
                        <input type="text" id="x-start" class="form-control" placeholder="x-start" aria-label="x-start" value="-10">
                        <label for="x-start">開始</label>
                    </div>
                    <div class="form-floating col">
                        <input type="text" id="x-end" class="form-control" placeholder="x-end" aria-label="x-end" value="10">
                        <label for="x-end">終了</label>
                    </div>
                    <div class="form-floating col">
                        <input type="text" id="pma" class="form-control" placeholder="param A" aria-label="param A" value="1">
                        <label for="pma">パラメータA</label>
                    </div>
                    <div class="form-floating col">
                        <input type="text" id="pmb" class="form-control" placeholder="param B" aria-label="param B" value="1">
                        <label for="pmb">パラメータB</label>
                    </div>
                    <div class="form-floating col">
                        <input type="text" id="pmc" class="form-control" placeholder="param C" aria-label="param C" value="0">
                        <label for="pmc">パラメータC</label>
                    </div>

                </div>
                ※整数のみ有効
                <div class="row mt-2">
                    <input id="draw" class="btn btn-secondary" type="button" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="copyright text-center">supilog</div>
    </footer>
    
    </div>
    <!-- jquery -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- mathjax -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <!-- js -->
    <script src="/js/main.js"></script>
</body>

</html>