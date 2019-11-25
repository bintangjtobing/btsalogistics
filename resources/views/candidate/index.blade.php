<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags-->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Apply for job in BTSA Logistics">
   <meta name="author" content="Bintang J Tobing">
   <meta name="keywords" content="Apply Job, Apply Job BTSA Logistics, BTSA Logistics, Interviewer, Candidate">

   <!-- Title Page-->
   <link rel="shortcut icon"
      href="https://res.cloudinary.com/btsa-co-id/image/upload/v1541503574/jscsstxtfiledll/icon/starlogo.ico">
   <title>Apply for job @BTSA LOGISTICS</title>
   <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>

   <!-- Font special for pages-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Main CSS/JS-->
   <script src="{!!asset('js/datepicker/datepicker.js')!!}"></script>
   <script src="{!!asset('js/datepicker/datepicker.en.js')!!}"></script>
   <link href="{!!asset('css/datepicker/datepicker.css')!!}" rel="stylesheet" media="all">
   <link href="{!!asset('css/candidate.css')!!}" rel="stylesheet" media="all">
</head>

<body>
   <div class="page-wrapper bg-dark p-t-100 p-b-50">
      <div class="wrapper wrapper--w900">
         <div class="card card-6">
            <div class="card-heading">
               <h2 class="title">Apply for job</h2>
            </div>
            <div class="card-body">
               <form method="POST">
                  <div class="form-row">
                     <label for="" class="my-1 mr-2">Posisi yang dilamar</label>
                     <select name="job" id="" class="custom-select my-1 mr-sm-2">
                        <option selected>Choose...</option>
                        <option value="IT">IT</option>
                        <option value="HRD">HRD</option>
                     </select>
                  </div>
                  <div class="form-row">
                     <div class="headerbio">
                        <h1>1. Biodata Staff</h1>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="">Nama Lengkap <i class="fas fa-star-of-life"></i></label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="">Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" id="" placeholder="Nama Panggilan"
                           class="form-control">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="">Tempat Lahir <i class="fas fa-star-of-life"></i></label>
                        <select name="born_at" id="" class="custom-select mr-sm-2" required>
                           <option selected>Choose...</option>
                           <option value="Medan">Medan</option>
                           <option value="Jakarta">Jakarta</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="">Tanggal Lahir <i class="fas fa-star-of-life"></i></label>
                        <input type="text" name="tanggal_lahir" class="datepicker-here form-control"
                           data-position="right top" data-language="en" required>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="">No. KTP <i class="fas fa-star-of-life"></i></label>
                        <input type="text" name="NoKtp" id="" class="form-control" required>
                        <small class="form-text text-muted">Nomor KTP harus dimasukkan karena bersifat wajib.</small>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="">No. SIM</label>
                        <input type="text" name="NoSim" id="" class="form-control">
                        <small class="form-text text-muted">Masukkan nomor SIM kamu jika kamu memilikinya / dalam sedang
                           diperlukan.</small>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="">No. NPWP</label>
                        <input type="text" name="NoNpwp" id="" class="form-control">
                        <small class="form-text text-muted">Masukkan nomor NPWP kamu jika kamu memilikinya / dalam
                           sedang
                           diperlukan.</small>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="">No. BPJS Kesehatan</label>
                        <input type="text" name="NoBpjs" id="" class="form-control">
                        <small class="form-text text-muted">Masukkan nomor NPWP kamu jika kamu memilikinya / dalam
                           sedang
                           diperlukan.</small>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="">Suku</label>
                        <select name="suku" class="custom-select">
                           <option value="Batak">Batak</option>
                           <option value="Melayu">Melayu</option>
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="">Agama</label>
                        <select name="agama" class="custom-select">
                           <option value="Kristen">Kristen</option>
                           <option value="Islam">Islam</option>
                        </select>
                     </div>
                     <div class="form-group col-md-2">
                        <label for="">Golongan Darah</label>
                        <select name="golongandarah" class="custom-select mr-sm-2">
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="AB">AB</option>
                           <option value="O">O</option>
                        </select>
                     </div>
                     <div class="form-group col-md-1">
                        <label for="">Anak ke:</label>
                        <select name="anak_ke" id="" class="custom-select mr-sm-2">
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="">Alamat KTP <i class="fas fa-star-of-life"></i></label>
                        <input type="text" name="alamatKtp" class="form-control" required>
                        <small class="form-text text-muted">Alamat yang diisi harus sesuai dengan alamat yang tertera di
                           KTP.</small>
                     </div>
                     <div class="form-group col-md-5">
                        <label for="">Alamat Tinggal <i class="fas fa-star-of-life"></i></label>
                        <input type="text" name="alamatTinggal" class="form-control" required>
                     </div>
                     <div class="form-group col-md-2">
                        <label for="">Status Rumah <i class="fas fa-star-of-life"></i></label>
                        <select name="statusrumah" class="custom-select mr-sm-2" required>
                           <option value="kontrak">Kontrak</option>
                           <option value="MilikKeluarga">Milik Keluarga</option>
                           <option value="MilikSendiri">Milik Sendiri</option>
                           <option value="kos">Kos</option>
                           <option value="menumpang">Menumpang</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="">Email aktif <i class="fas fa-star-of-life"></i></label>
                        <input type="text" name="email" id="" class="form-control" required
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="">No. HP yang bisa dihubungi <i class="fas fa-star-of-life"></i></label>
                        <input type="text" name="noHp" id="" class="form-control" required pattern=".{12,}">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="name">Upload CV</div>
                     <div class="value">
                        <div class="input-group js-input-file">
                           <input class="input-file" type="file" name="file_cv" id="file">
                           <label class="label--file" for="file">Choose file</label>
                           <span class="input-file__info">No file chosen</span>
                        </div>
                        <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50
                           MB
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="card-footer">
               <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Jquery JS-->
   <script src="{!!asset('vendor/jquery/jquery/jquery.min.js')!!}"></script>
   <!-- Main JS-->
   <script src="{!!asset('js/candidate.js')!!}"></script>
   {{-- <script>
      // Initialization
      $('#datepicker-here').datepicker({
         language: 'en',
      })
      // Access instance of plugin
      $('#datepicker-here').data('datepicker')
   </script> --}}

</body>

</html>