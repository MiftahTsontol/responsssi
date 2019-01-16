<h1>ISI SALDO</h1>
  <form role="form" action="mumet.php" method="post">
    <div class="form-group">
        <label>Jumlah </label>
        <input class="form-control" placeholder="Jumlah Dana  " name="uang" required>
    </div>
    <div class="form-group">
        <label>Sumber </label>
        <input class="form-control" placeholder="Sumber Dana" name="sumber" required>
    </div> 
    <div class="form-group">
      <label >Saldo akan digunakan oleh:</label>
      <select class="form-control" name="dari">
        <option value="NETWOKING">NETWOKING</option>
        <option value="SKIL DEVELOPMENT">SKIL DEVELOPMENT</option>
        <option value="INTERNAL">INTERNAL</option>
        <option value="Lain-Lain">Lain-Lain</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default" name="ks_hmj">Submit </button>
    <button type="reset" class="btn btn-primary">Reset </button>
  </form>
