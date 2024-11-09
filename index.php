<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD JSON</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <main class="container p-5 mt-5">
      <h1>Form</h1>
      <form action="config/khsjson.php" method="POST">
        <div class="row mb-3">
          <label for="npm" class="col-sm-2 col-form-label">NPM</label>
          <div class="col-sm-10">
            <input
              type="text"
              inputmode="numeric"
              class="form-control"
              id="npm"
              name="npm"
            />
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="nama" />
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="gridRadios"
                id="kelamin1"
                value="laki-laki"
                checked
              />
              <label class="form-check-label" for="kelamin1"> Laki-Laki </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="gridRadios"
                id="kelamin2"
                value="perempuan"
              />
              <label class="form-check-label" for="kelamin2"> Perempuan </label>
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-10">
            <select class="form-select" name="jurusan" aria-label="Default select example">
              <option selected>Pilih Jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="DKV">DKV</option>
              <option value="Manajemen">Manajemen</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="ttugas" class="col-sm-2 col-form-label"
            >Nilai Tugas</label
          >
          <div class="col-sm-10">
            <input
              type="text"
              inputmode="numeric"
              class="form-control"
              name="ttugas"
              id="ttugas"
            />
          </div>
        </div>
        <div class="row mb-3">
          <label for="tuts" class="col-sm-2 col-form-label">Nilai UTS</label>
          <div class="col-sm-10">
            <input
              type="text"
              inputmode="numeric"
              class="form-control"
              name="tuts"
              id="tuts"
            />
          </div>
        </div>
        <div class="row mb-3">
          <label for="tuas" class="col-sm-2 col-form-label">Nilai UAS</label>
          <div class="col-sm-10">
            <input
              type="text"
              inputmode="numeric"
              class="form-control"
              name="tuas"
              id="tuas"
            />
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </main>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/config.js"></script>
  </body>
</html>
