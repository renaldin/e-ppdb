<?php
echo "<script>
Swal.fire({title: 'Kuota Batas Pendaftaran Terpenuhi',text: '',icon: 'error',confirmButtonText: 'OK'
}).then((result) => {if (result.value)
  {window.location = 'welcome.php';
  }
})</script>";
