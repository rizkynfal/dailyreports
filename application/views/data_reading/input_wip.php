<div class="collapse col " id="inputWip">

    <div class="card card-body p-3 mb-4">
        <form class="row" method="POST" action="<?= base_url() ?>datareading/inputDataWip">
            <div class="row">
                <div class="col-sm-3 mb-3">
                    <label for="namaReporter" class="form-label">Nama Reporter</label>
                    <input type="text" class="form-control" id="namaReporter" name="namaReporter" value="<?php
                                                                                                            if ($_SESSION['status'] == 'login') {
                                                                                                                echo $_SESSION["nama_user"];
                                                                                                            } ?>" readonly>
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="inputTanggal" class="form-label">Tanggal</label>
                    <?php date_default_timezone_set("Asia/Jakarta");
                    $tanggal = date("d-F-Y"); ?>
                    <input type="text" name="inputTanggal" class="form-control" id="inputTanggal" value="<?php echo $tanggal ?>" readonly>
                </div>
            </div>
            <div class="col-sm-3  mb-3">
                <label for="inputTime" class="form-label">Time</label>
                <input type="text" name="inputTime" class="form-control" id="inputTime" readonly>
            </div>
            <div class="form-header fs-3 text-center">
                Input Wip
            </div>
            <div class="col-3 mb-3">
                <label for="inputBudi" class="form-label">Budi#</label>
                <br>
                <select class="p-2 rounded " id="inputBudi" name="inputBudi" style="width: 100% ;">
                    <option>---</option>


                    <option class="form-control col-auto " value="1">Budi 3</option>

                </select>
            </div>

            <div class="col-3 mb-3">
                <label for="inputRemaks" class="form-label">Remaks</label>
                <br>
                <select class="p-2 rounded" id="inputRemaks" name="inputRemaks" style="width: 100% ;">
                    <option>---</option>

                    <option class="form-control" value="Pompa No 1">Pompa No 1</option>
                    <option class="form-control" value="Pompa No 2">Pompa No 2</option>

                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputDischargePressure" class="form-label">Discharge Pressure</label>
                <input placeholder="0" type="text" class="form-control" name="inputDischargePressure" id="inputDischargePressure">
            </div>
            <div class="col-3 mb-3">
                <label for="inputWaterLinePressure" class="form-label">Water Line Pressure</label>

                <input placeholder="0" type="text" class="form-control" id="inputWaterLinePressure" name="inputWaterLinePressure">


            </div>
            <div class="col-3 mb-3">
                <label for="inputMotorFrequency" class="form-label">Motor Frequency</label>

                <input placeholder="0" type="text" class="form-control" name="inputMotorFrequency" id="inputMotorFrequency">

            </div>
            <div class="col-3 mb-3">
                <label for="inputMotorAmpere" class="form-label">Motor Ampere</label>
                <div class="input-group">
                    <input placeholder="0" type="text" class="form-control" name="inputMotorAmpere" id="inputMotorAmpere">
                    <div class="input-group-text">A</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputPumpedWater" class="form-label">Pumped Water</label>

                <input placeholder="0" type="text" class="form-control" name="inputPumpedWater" id="inputPumpedWater">

            </div>
            <div class="col-3 mb-3">
                <label for="inputPumpedWater" class="form-label">Well Head Pressure</label>

                <input placeholder="0" type="text" class="form-control" name="inputWhpWip" id="inputWhpWip">

            </div>
            <div class="row">
                <div class="d-grid gap-2 col-2 ">

                    <button type="submit" class="btn btn-success p-3">Simpan</button>
                    <button class="btn btn-danger p-3" type="button" data-bs-toggle="collapse" data-bs-target="#inputWip" aria-expanded="false" aria-controls="inputWip">Batal</button>
                </div>
            </div>

        </form>

    </div>
</div>