 <?php #en casi de que haya fallado la contrasena o el usuerio manda un alert
 if (isset($_SESSION['alertas'])) {
    
    if($_SESSION['alertas'] == 'Eliminado')
    {
      echo "<script>swal({title:'success',text:'Se a aliminado registro',type:'success'  , timer: 2000});</script>";
      $_SESSION['alertas'] = 'Funciona';
    }elseif($_SESSION['alertas'] == 'Nuevo'){

        echo "<script>swal({title:'success',text:'Se a  registrado con exito',type:'success' , timer: 2000 });</script>";
      $_SESSION['alertas'] = 'Funciona';
    }
    elseif($_SESSION['alertas'] == 'actualizar'){

        echo "<script>swal({title:'success',text:'Se a  actualizado con exito',type:'success' , timer: 2000 });</script>";
      $_SESSION['alertas'] = 'Funciona';
    }elseif($_SESSION['alertas'] == 'Fallo'){

        echo "<script>swal({title:'success',text:'A Fallado la ejecución',type:'error' , timer: 2000 });</script>";
      $_SESSION['alertas'] = 'Funciona';
    }else if($_SESSION['alertas'] == 'SubidaImg'){

           echo "<script>swal({title:'warning',text:'".$_SESSION['ms']."',type:'warning' , timer: 2000 });</script>";
        $_SESSION['alertas'] = 'Funciona';
    }


}
 ?>