                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                      <!-- Area Chart -->
                      <div class="col-xl-12 col-lg-15">
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Progres Resto Suka Makan</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">

                            <div class="">
                              <canvas id="progress_resto">


                              </canvas>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>


                    <script>
                      var ctx = document.getElementById("progress_resto");
                      var progress_resto = new Chart(ctx, {
                        type: 'line',
                        data: {
                          labels: [
                            <?php
                            include "../koneksi.php";
                            $r = mysqli_query($con, "Select * from tb_reservasi");
                            while ($rreservasi = mysqli_fetch_array($r)) {
                              echo "'$rreservasi[tgl_reservasi]',";
                            }
                            ?>
                          ],
                          datasets: [{
                            label: "Total Bayar",
                            lineTension: 0.3,
                            backgroundColor: "rgba(2,117,216,0.2)",
                            borderColor: "rgba(2,117,216,1)",
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(2,117,216,1)",
                            pointBorderColor: "rgba(255,255,255,0.8)",
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(2,117,216,1)",
                            pointHitRadius: 50,
                            pointBorderWidth: 2,
                            data: [
                              <?php
                              include "../koneksi.php";
                              $total_bayar = mysqli_query($con, "Select * from tb_reservasi");
                              while ($rtotal_bayar = mysqli_fetch_array($total_bayar)) {
                                echo "'$rtotal_bayar[total_bayar]',";
                              }
                              ?>
                            ],
                          }],
                        },
                        options: {
                          scales: {
                            xAxes: [{
                              time: {
                                unit: 'date'
                              },
                              gridLines: {
                                display: false
                              },
                              ticks: {
                                maxTicksLimit: 10
                              }
                            }],
                            yAxes: [{
                              ticks: {
                                min: 0,
                                max: 5000000,
                                maxTicksLimit: 10
                              },
                              gridLines: {
                                color: "rgba(0, 0, 0, .125)",
                              }
                            }],
                          },
                          legend: {
                            display: false
                          }
                        }
                      });
                    </script>