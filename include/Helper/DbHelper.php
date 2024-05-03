<<<<<<< HEAD
<?php
date_default_timezone_set('Asia/Jakarta');


function getAll($koneksi,$table){
    $query = mysqli_query($koneksi,"SELECT * FROM $table;");
    $result = null ;
    if(mysqli_num_rows($query) > 0){
        $result = $query;
    }
    return $result;
}

function getDataWithQuery($koneksi,$query){
    $sql = mysqli_query($koneksi,$query);
    $result = null;
    if(mysqli_num_rows($sql) > 0){
        $result = $sql;
    }
    return $result;
}
function getDataCount($koneksi,$table){
    $sql = mysqli_query($koneksi,"SELECT COUNT(*) as C FROM $table;");
    $result = 0;
    if(mysqli_num_rows($sql) > 0){
        $result = mysqli_fetch_assoc($sql)['C'];
    }
    return $result;
}


=======
<?php
date_default_timezone_set('Asia/Jakarta');


function getAll($koneksi,$table){
    $query = mysqli_query($koneksi,"SELECT * FROM $table;");
    $result = null ;
    if(mysqli_num_rows($query) > 0){
        $result = $query;
    }
    return $result;
}

function getDataWithQuery($koneksi,$query){
    $sql = mysqli_query($koneksi,$query);
    $result = null;
    if(mysqli_num_rows($sql) > 0){
        $result = $sql;
    }
    return $result;
}
function getDataCount($koneksi,$table){
    $sql = mysqli_query($koneksi,"SELECT COUNT(*) as C FROM $table;");
    $result = 0;
    if(mysqli_num_rows($sql) > 0){
        $result = mysqli_fetch_assoc($sql)['C'];
    }
    return $result;
}


>>>>>>> 3f3c0cc9417be49b819c9518551879e5b4cf08fb
?>