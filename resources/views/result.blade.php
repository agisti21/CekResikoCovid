@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="result.css">
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    Hasil
  </div>
  <div class="card-body">

        @if($survey->yes>-1 & $survey->yes<8)        
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                            <strong id="status">Resiko anda terkena COVID-19 adalah "Rendah"</strong>
                    </div>
            </div>     
        @elseif($survey->yes>7 & $survey->yes<15)
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">                   
                        <strong id="status">Resiko anda terkena COVID-19 adalah "Sedang"</strong>
                    </div>
            </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong id="status">Resiko anda terkena COVID-19 adalah "Tinggi"</strong>
                </div>
            </div>
        @endif
    <a href="/logout" class="btn btn-primary">Selesai</a>
  </div>
</div>
</div>
</div>
</body>
</html>
