<!doctype html>
<html lang="tr">
  <?php
    error_reporting(0);
    require_once ('vendor/autoload.php');
    use \Statickidz\GoogleTranslate;
    if($_POST){
        $code = explode(";", $_POST["code"]);
        $document_prew = "";
        foreach ($code as $codex) {
            $source = 'en';
            $target = 'tr';
            $x = explode("=", $codex);
            $text = (string) $x[1];
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
            $document_prew = $document_prew.$x[0]."=".$result.";";  
        }
    }

  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dil Çevirici</title>
    <style>
        .code{ min-height:80vh; }
    </style>
  </head>
  <body>
    <div class="col-md-12 text-center">
        <h2>Script Çevirici</h2>
        <p>Dil dosyanızı Sağ Tarafa Yapıştırın</p>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <textarea class="form-control code" name="code" id="code" cols="30" rows="10"></textarea><br>
                    <input type="submit" class="btn btn-primary" value="Çevir">
                </form>
            </div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <textarea class="form-control code" name="code" id="code" cols="30" rows="10"><?php echo $document_prew; ?></textarea><br>
                </form>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
