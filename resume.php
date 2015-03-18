<?php include_once("head.php"); ?>
    <body>
        <!-- Preloader -->
        <?php include_once("preloader.php"); ?>
        <!-- END Preloader -->

        <!-- Page Container -->
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations header-fixed-top">

            <!-- Main Sidebar -->
            <?php include_once("mainSidebar.php"); ?>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <?php include_once("header.php"); ?>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Dashboard Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-stopwatch"></i>Selection <strong>Resume</strong>
                                <br>
                                <small>Blade type: <span>B</span></small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Dashboard Header -->
                    
                    <!-- Options Indata -->
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-extra themed-background-dark">
                                            <h3 class="widget-content-light">
                                                <strong>Options</strong>
                                            </h3>
                                        </div>
                                        <div class="widget-extra-full">
                                            <div class="row">
                                                <div class="btn-group btn-group-lg">
                                                    <a href="selection.php" class="btn btn-alt btn-primary" data-toggle="tooltip" title="Return To Wizard">
                                                        <i class="gi gi-left_arrow"></i>
                                                    </a>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="General Info">
                                                        <i class="gi gi-circle_exclamation_mark"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="List Result" onclick="$('.block').show()">
                                                        <i class="gi gi-list"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="btn-group btn-group-lg">
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="left" title="Sketch">
                                                        <i class="gi gi-picture"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" title="Technical Info">
                                                        <i class="gi gi-circle_info"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="right" title="IVC">
                                                        <i class="gi gi-notes_2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="btn-group btn-group-lg">
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="bottom" title="Price">
                                                        <i class="gi gi-usd"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="bottom" title="Full Cost">
                                                        <i class="gi gi-money"></i>
                                                    </button>
                                                    <button class="btn btn-alt btn-primary" data-toggle="tooltip" data-placement="bottom" title="Print">
                                                        <i class="gi gi-print"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-extra themed-background-dark">
                                            <h3 class="widget-content-light">
                                                <strong>Indata</strong>
                                            </h3>
                                        </div>
                                        <div class="widget-extra-full">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 10%;">Departure</th>
                                                                <th style="width: 15%;">Flow</th>
                                                                <th style="width: 15%;">Inlet Pressure</th>
                                                                <th style="width: 15%;">Outlet Pressure</th>
                                                                <th style="width: 15%;">Temp</th>
                                                                <th style="width: 15%;">Cold Start Up</th>
                                                                <th style="width: 15%;">Density Normal</th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtDeparture" class="form-control input-sm" placeholder="#">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtFlow" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">m3/h</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtInletPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">Pa</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">Pa</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">C°</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm">
                                                                        <span class="input-group-addon" style="font-size: 10px;">C°</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="text" id="txtOutl5tPressure" class="form-control input-sm" value="1.273">
                                                                        <span class="input-group-addon" style="font-size: 10px;">Kg/nm3</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="text-center">
                                                                    <div class="btn-group btn-group-md">
                                                                        <button class="btn btn-alt btn-primary">
                                                                            <i class="gi gi-search"></i> Search
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Options Indata -->
                    
                    <!-- List Result -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Interactive Block -->
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-hide"><i class="fa fa-times"></i></a>
                                    </div>
                                    <h2>List <strong>Result</strong></h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-condensed">
                                            <thead>
                                                <tr class="text-primary">
                                                    <th>Select</th>
                                                    <th>No</th>
                                                    <th>Type</th>
                                                    <th>Size</th>
                                                    <th>Eff</th>
                                                    <th>RPM</th>
                                                    <th>HP</th>
                                                    <th>Pressure rice</th>
                                                    <th class="text-center success">Work line</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="switch switch-primary">
                                                            <input type="checkbox" id="ivcIn_1"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>10</td>
                                                    <td>HCGB</td>
                                                    <td>140</td>
                                                    <td>76.2</td>
                                                    <td>791</td>
                                                    <td>49.58</td>
                                                    <td>1127.3</td>
                                                    <td class="text-center success">3.2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p class="text-muted">Selection Result..</p>
                                <!-- END Interactive Content -->
                            </div>
                            <!-- END Interactive Block -->
                        </div>
                    </div>
                    <!-- End List Result -->

                    <!-- Selected Fan -->
                    <div class="row">
                        <!-- Data Fan -->
                        <div class="col-md-4">
                            <!-- Interactive Block -->
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                                    </div>
                                    <h2>Selected <strong>Fan</strong></h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>Fan Data</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Type</strong>
                                                    </td>
                                                    <td><span id="spanType">HCGB</span></td>
                                                    <td>&nbsp;</td>
                                                    <td style="width:40px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Size</strong>
                                                    </td>
                                                    <td><span id="spanSize">140</span></td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Fan connection area</strong>
                                                    </td>
                                                    <td><span id="spanArea">1.568</span></td>
                                                    <td><span id="spanAreaUnit">m2</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Pd</strong>
                                                    </td>
                                                    <td><span id="spanPd">0</span></td>
                                                    <td><span id="spanPdUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Accessories</strong>
                                                    </td>
                                                    <td><span id="spanAccessories">0</span></td>
                                                    <td><span id="spanAccessoriesUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Inlet connection</strong>
                                                    </td>
                                                    <td><span id="spanInConnection">0</span></td>
                                                    <td><span id="spanInConnectionUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Oulet connection</strong>
                                                    </td>
                                                    <td><span id="spanOutConnection">0</span></td>
                                                    <td><span id="spanOutConnectionUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>&nbsp;</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Flow</strong>
                                                    </td>
                                                    <td><span id="spanFlow">0</span></td>
                                                    <td><span id="spanFlowUnit">m3/h</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Total pressure</strong>
                                                    </td>
                                                    <td><span id="spanTotalPressure">0</span></td>
                                                    <td><span id="spanTotalPressureUnit">Pa</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Efficiancy</strong>
                                                    </td>
                                                    <td><span id="spanEff">0</span></td>
                                                    <td><span>%</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>&nbsp;</strong>
                                                    </td>
                                                    <td><span id="spanKomp">0</span></td>
                                                    <td><span>Kp</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Power</strong>
                                                    </td>
                                                    <td><span id="spanPower">0</span></td>
                                                    <td><span>HP</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Power at Cold Star Up</strong>
                                                    </td>
                                                    <td><span id="spanPowerCold">0</span></td>
                                                    <td><span>HP</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Throttle line</strong>
                                                    </td>
                                                    <td><span id="spanLine">0</span></td>
                                                    <td><span></span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Moment of inertia WR2</strong>
                                                    </td>
                                                    <td><span id="spanWr2">0</span></td>
                                                    <td><span id="spanWr2Unit">Kgm2</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Total wight</strong>
                                                    </td>
                                                    <td><span id="spanTotalWeight">0</span></td>
                                                    <td><span id="spanTotalWeightUnit">Kg</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Speed</strong>
                                                    </td>
                                                    <td><span id="spanSpeed">0</span></td>
                                                    <td><span>rpm</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>Start torque</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>At operation conditions</strong>
                                                    </td>
                                                    <td><span id="spanTorqueOperation">0</span></td>
                                                    <td><span>Nm</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>At 0 flow and 20º C</strong>
                                                    </td>
                                                    <td><span id="spanTorqueFlow">0</span></td>
                                                    <td><span>Nm</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr class="success">
                                                    <th class="success"><strong>Sound</strong></th>
                                                    <td>L wtot</td>
                                                    <td>L ptot at <span style="display: inline;">1</span></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label">To inlet and outlet</label>
                                                    </td>
                                                    <td><span id="spanSoundA1">0</span></td>
                                                    <td><span id="spanSoundA2">0</span></td>
                                                    <td><span>dB(A)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label">To surrounding - free inlet</label>
                                                    </td>
                                                    <td><span id="spanSoundB1">0</span></td>
                                                    <td><span id="spanSoundB2">0</span></td>
                                                    <td><span>dB(A)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label">To surrounding - ducted intet</label>
                                                    </td>
                                                    <td><span id="spanSoundC1">0</span></td>
                                                    <td><span id="spanSoundC2">0</span></td>
                                                    <td><span>dB(A)</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p class="text-muted">Data Fan..</p>
                                <!-- END Interactive Content -->
                            </div>
                            <!-- END Interactive Block -->
                        </div>
                        <!-- Data Fan -->

                        <!-- Graphic Fan -->
                        <div class="col-md-8">
                            <!-- Interactive Block -->
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                                    </div>
                                    <h2>Chart <strong>Data</strong></h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <th class="success" colspan="4"><strong>Fan Data</strong></th>
                                                </tr>
                                                <tr>
                                                    <td><strong>Density</strong></td>
                                                    <td><strong>Flow</strong></td>
                                                    <td><strong>Pressure</strong></td>
                                                    <td><strong>Power</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>0.932 Kg/m3</td>
                                                    <td>m3/h</td>
                                                    <td>Pa</td>
                                                    <td>Hp</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="background-image: url('img/charts/basic.png'); background-repeat: no-repeat; width:602px; height: 432px; margin: auto;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">&nbsp;</div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="background-image: url('img/charts/basic.png'); background-repeat: no-repeat; width:602px; height: 432px; margin: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted">Chart Data..</p>
                                <!-- END Interactive Content -->
                            </div>
                            <!-- END Interactive Block -->
                        </div>
                        <!-- END Graphic Fan -->
                    </div>
                    <!-- End Selected Fan -->                    
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <?php include_once("footer.php"); ?>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- General JavaScript -->
        <?php include_once("generalScript.php"); ?>
        <!-- END General JavaScript -->

        <!-- Script JS -->
        <script>
            //......    
        </script>
        <!-- END Script JS -->
    </body>
</html>