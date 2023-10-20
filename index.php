<?php
require_once 'autoload.php';
// Header('Content-Type : application/json');


$object_array = [];

$object = [
    "id"            => 0,
    "name"          => "Gundala",
    "hitPoints"     => 100,
    "strength"      => 10,
    "defense"       => 10,
    "intelligence"  => 10,
];

array_push($object_array, $object);

$object = [
    "id"            => 1,
    "name"          => "Arjuna",
    "hitPoints"     => 100,
    "strength"      => 10,
    "defense"       => 10,
    "intelligence"  => 10,
    "class"         => 1
];

array_push($object_array, $object);

$data['data']    = $object_array;
$data['success'] = true;
$data['message'] = null;

// echo ($data);
// dd($data);
// echo "<pre>"; 
// echo json_encode(json_decode($data), JSON_PRETTY_PRINT); 
// echo "</pre>";
// echo '<pre>'.(json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)).'<pre>';

//select dari server
$stmt   = "SELECT * FROM transaksi_parkir";
$query  = mysqli_query($conn1,$stmt) or die(mysqli_error($conn1));
$count  = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TEST CODE PT. PRANALA</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once 'layout/css.php'; ?>
        <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <style>
            th {
                vertical-align: middle !important;
                text-align: center;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
        <div class="wrapper">
            <?php sess('menu_active', 'index'); require_once 'layout/menu.php'; ?>
            <div class="content-wrapper">
                <section class="content container-fluid">
                    <div class="box box-primary">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- pengecekan dari sisi FE menggunakan min=0, value di set 0, dan harus required -->
                                <input type="number" class="form-control input_angka" name="input_angka" id="input_angka" value="0" mi="0" placeholder="input angka" required>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-4">
                                <button id="generate_segitiga">Generate Segitiga</button>
                            </div>
                            <div class="col-lg-4">
                                <button id="generate_ganjil">Generate Bilangan Ganjil</button>
                            </div>
                            <div class="col-lg-4">
                                <button id="generate_prima">Generate Bilangan Prima</button>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Result</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col" id="hasil">
                                    <textarea name="area" id="area" cols="15" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require_once 'layout/footer.php'; ?>
        </div>
    </body>
</html>
<?php require_once 'layout/script.php'; ?>
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    
    $( "#generate_segitiga" ).on( "click", function() {
        var angka = $('#input_angka').val();
        var text  = document.getElementById('area');

        if(angka < 1){
            return alert("INPUT ANGKA YANG BENAR!");
        }else{
            $.ajax({
                url: "proses/generate_segitiga.php",
                type: "GET",
                data: {angka},
                success: function(result){
                    if(result.status == 200){
                        text.innerHTML = '';
                        text.innerHTML += result.data;
                    }
                }
            })
        }
    });

    $( "#generate_ganjil" ).on( "click", function() {
        var angka = $('#input_angka').val();
        var text  = document.getElementById('hasil');

        if(angka < 1){
            return alert("INPUT ANGKA YANG BENAR!");
        }else{
            $.ajax({
                url: "proses/generate_ganjil.php",
                type: "GET",
                data: {angka},
                success: function(result){
                    if(result.status == 200){
                        text.innerHTML = '';
                        text.innerHTML += result.data;
                    }
                }
            })
        }
    });

    $( "#generate_prima" ).on( "click", function() {
        var angka = $('#input_angka').val();
        var text  = document.getElementById('hasil');

        if(angka < 1){
            return alert("INPUT ANGKA YANG BENAR!");
        }else{
            $.ajax({
                url: "proses/generate_prima.php",
                type: "GET",
                data: {angka},
                success: function(result){
                    if(result.status == 200){
                        text.innerHTML = '';
                        text.innerHTML += result.data;
                    }
                }
            })
        }

        // alert(angka);
    });
</script>