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
                                <i class="gi gi-stopwatch"></i>Wizard <strong>Selection</strong>
                                <br>
                                <small></small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Dashboard Header -->

                    <div class="row">
                        <div class="col-md-5 hidden-sm">
                            <div class="block">
                                <h4 class="page-header">Preview</h4>
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <td colspan="2">000</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td colspan="2">00/00/000</td>
                                        </tr>
                                        <tr>
                                            <th>Customer</th>
                                            <td colspan="2">A/C AIRE ACONDICIONADO Y REFRIGERACION</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td colspan="2">JOSE LUIS MORALES CAMPOS - sisgab@prodigy.net.mx</td>
                                        </tr>
                                        <tr>
                                            <th>Units</th>
                                            <td colspan="2">System International</td>
                                        </tr>
                                        <tr>
                                            <th style="width:30%">IVC</th>
                                            <td style="width:35%"><span class="label label-primary">IN</span></td>
                                            <td style="width:35%"><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>DMBG</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Flexible</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Screen</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Damper</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Diffusor</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Louver</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Silencer</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                        <tr>
                                            <th>Inlet Box</th>
                                            <td><span class="label label-primary">IN</span></td>
                                            <td><span class="label label-default">OUT</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <!-- Clickable Wizard Block -->
                            <div class="block">
                                <!-- Clickable Wizard Content -->
                                <form id="clickable-wizard" action="#" method="post" class="form-horizontal">

                                    <!-- First Step -->
                                    <div id="clickable-first" class="step">
                                        <!-- Step Info -->
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <ul class="nav nav-pills nav-justified clickable-steps">
                                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-first"><strong>1. Customer</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Units</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Accessories</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Step Info -->
                                        <h4 class="page-header">&nbsp;</h4>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">#</label>
                                            <div class="col-md-5">
                                                <input type="hidden" id="spnSelectionId">
                                                <span id="spnNoSelection" class="form-control input-sm">000</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Date</label>
                                            <div class="col-md-5">
                                                <span id="spnSelectionDate" class="form-control input-sm">00-00-0000</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="txtCustomer">Customer</label>
                                            <div class="col-md-5">
                                                <select id="slcCustomer" name="slcCustomer" class="form-control input-sm">
                                                    <option value="0">Select</option>
                                                    <option value="1">Customer 01</option>
                                                    <option value="2">Customer 02</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="slcContact">Contact</label>
                                            <div class="col-md-5">
                                                <select id="slcContact" name="slcContact" class="form-control input-sm">
                                                    <option value="0">Select</option>
                                                    <option value="1">Contact 01</option>}
                                                    <option value="2">Contact 02</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-5">
                                                <input type="text" id="txtContact" name="txtContact" class="form-control input-sm" placeholder="Contact optional">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="txtReference">Reference</label>
                                            <div class="col-md-5">
                                                <input type="text" id="txtReference" name="txtReference" class="form-control input-sm" placeholder="Reference">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="txtNoProposal">No. Proposal</label>
                                            <div class="col-md-5">
                                                <input type="text" id="txtNoProposal" name="txtNoProposal" class="form-control input-sm" placeholder="No Proposal">
                                            </div>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="form-group clickable-steps">
                                            <div class="col-xs-12 text-center">
                                                <button class="btn btn-sm btn-warning disabled">Previous</button>
                                                <a href="javascript:void(0)" data-gotostep="clickable-second" class="btn btn-sm btn-primary">Next <i class="gi gi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- END Navigation Buttons -->
                                    </div>
                                    <!-- END First Step -->

                                    <!-- Second Step -->
                                    <div id="clickable-second" class="step">
                                        <!-- Step Info -->
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <ul class="nav nav-pills nav-justified clickable-steps">
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Customer</strong></a></li>
                                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Units</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Accessories</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Step Info -->

                                        <h4 class="page-header">&nbsp;</h4>
                                        <input type="hidden" id="hdnUnit">
                                        
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <table class="table table-borderless table-condensed text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center text-primary">
                                                                <a href="javascript:cambiarSeleccionUnidades('SI');" class="btn btnSistemaSI btn-primary">
                                                                    System International
                                                                </a>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="sistemaSI themed-color">
                                                        <tr><td><strong>C°</strong></td></tr>
                                                        <tr><td><strong>m³/h - Nm³/h</strong></td></tr>
                                                        <tr><td><strong>mmwg - Pa</strong></td></tr>
                                                        <tr><td><strong>Kg/m³ - Kg/Nm³</strong></td></tr>
                                                        <tr><td><strong>mmHg - mBar - m</strong></td></tr>
                                                        <tr><td><strong>m/s</strong></td></tr>
                                                        <tr><td><strong>m²</strong></td></tr>
                                                        <tr><td><strong>Kw</strong></td></tr>
                                                        <tr><td><strong>Kgm²</strong></td></tr>
                                                        <tr><td><strong>Kg</strong></td></tr>
                                                        <tr><td><strong>Nm</strong></td></tr>
                                                        <tr><td><strong>m</strong></td></tr>
                                                        <tr><td><strong>dB(A)</strong></td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-4">
                                                <table class="table table-borderless table-condensed text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">
                                                                <button class="btn btn-info">
                                                                    <i class="gi gi-ruller"></i>
                                                                </button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>Temperature</strong></td></tr>
                                                        <tr><td><strong>Flow</strong></td></tr>
                                                        <tr><td><strong>Pressure</strong></td></tr>
                                                        <tr><td><strong>Density</strong></td></tr>
                                                        <tr><td><strong>Ambient pressure</strong></td></tr>
                                                        <tr><td><strong>Air velocity</strong></td></tr>
                                                        <tr><td><strong>Area</strong></td></tr>
                                                        <tr><td><strong>Power</strong></td></tr>
                                                        <tr><td><strong>Inertia</strong></td></tr>
                                                        <tr><td><strong>Weight</strong></td></tr>
                                                        <tr><td><strong>Torque</strong></td></tr>
                                                        <tr><td><strong>Sound distance</strong></td></tr>
                                                        <tr><td><strong>Sound</strong></td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-4">
                                                <table class="table table-borderless table-condensed text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center text-primary">
                                                                <a href="javascript:cambiarSeleccionUnidades('SA');" class="btn btnSistemaSA btn-default">
                                                                    System American
                                                                </a>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="sistemaSA">
                                                        <tr><td><strong>F°</strong></td></tr>
                                                        <tr><td><strong>acfm - scfm</strong></td></tr>
                                                        <tr><td><strong>inwg - lb/in²</strong></td></tr>
                                                        <tr><td><strong>lb/ft³ - slb/ft³</strong></td></tr>
                                                        <tr><td><strong>inHg - ft</strong></td></tr>
                                                        <tr><td><strong>fpm</strong></td></tr>
                                                        <tr><td><strong>ft²</strong></td></tr>
                                                        <tr><td><strong>Hp</strong></td></tr>
                                                        <tr><td><strong>lbft²</strong></td></tr>
                                                        <tr><td><strong>Lb</strong></td></tr>
                                                        <tr><td><strong>lbft</strong></td></tr>
                                                        <tr><td><strong>ft</strong></td></tr>
                                                        <tr><td><strong>dB(A)</strong></td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="form-group clickable-steps">
                                            <div class="col-xs-12 text-center">
                                                <a href="javascript:void(0)" data-gotostep="clickable-first" class="btn btn-sm btn-warning"><i class="gi gi-chevron-left"></i> Previous</a>
                                                <a href="javascript:void(0)" data-gotostep="clickable-third" class="btn btn-sm btn-primary">Next <i class="gi gi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- END Navigation Buttons -->
                                    </div>
                                    <!-- END Second Step -->

                                    <!-- Third Step -->
                                    <div id="clickable-third" class="step">
                                        <!-- Step Info -->
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <ul class="nav nav-pills nav-justified clickable-steps">
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Customer</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-check"></i> <strong>2. Units</strong></a></li>
                                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Accessories</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>4. Selection data</strong></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Step Info -->

                                        <h4 class="page-header">&nbsp;</h4>
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr class="text-primary">
                                                        <th>Description</th>
                                                        <th>Inlet</th>
                                                        <th>Oulet</th>
                                                        <th>Value</th>
                                                        <th>Image</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>IVC</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="ivcIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="ivcOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0.3</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/ivc.jpg" style="width:40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>DMBG</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="ivcOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="dmbgOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0.2</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/difusor.jpg" style="width:40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flexible</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="flexibleIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="flexibleOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/flexible.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Screen</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="screenIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="screenOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0.2</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/screen.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Damper</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="damperIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="damperOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/damper.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diffusor</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="diffusorIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="diffusorOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/diffusor.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Louver</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="louverIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="louverOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0.15</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/louver.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Silencer</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="silencerIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="silencerOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0.15</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/silencer.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Inlet Box</td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="inletBoxIn_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" id="inletBoxOut_1"><span></span>
                                                            </label>
                                                        </td>
                                                        <td>0.15</td>
                                                        <td>
                                                            <img src="img/placeholders/accessories/inletbox.jpg" style="width: 40px; height:40px;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="form-group clickable-steps">
                                            <div class="col-xs-12 text-center">
                                                <a href="javascript:void(0)" data-gotostep="clickable-second" class="btn btn-sm btn-warning"><i class="gi gi-chevron-left"></i> Previous</a>
                                                <a href="javascript:void(0)" data-gotostep="clickable-four" class="btn btn-sm btn-primary">Next <i class="gi gi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- END Navigation Buttons -->
                                    </div>
                                    <!-- END Third Step -->

                                    <!-- Four Step -->
                                    <div id="clickable-four" class="step">
                                        <!-- Step Info -->
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <ul class="nav nav-pills nav-justified clickable-steps">
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Customer</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-check"></i> <strong>2. Units</strong></a></li>
                                                    <li><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>3. Accessories</strong></a></li>
                                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-four"><strong>3. Selection data</strong></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Step Info -->

                                        <h4 class="page-header">&nbsp;</h4>
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr class="text-primary">
                                                        <th>Description</th>
                                                        <th>Data</th>
                                                        <th>Units</th>
                                                        <th>Include</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Blade Type</strong></td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcBladeType">
                                                                <option value="1">B</option>
                                                                <option value="2">P</option>
                                                                <option value="3">T</option>
                                                                <option value="4">C</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Flow Unit</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcFlowUnit">
                                                                <option class="uSI" value="m3h">m3/h</option>
                                                                <option class="uSI" value="m3s">m3/s</option>
                                                                <option class="uSI" value="nm3h">Nm3/h</option>
                                                                <option class="uSA" value="acfm">acfm</option>
                                                                <option class="uSA" value="scfm">scfm</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Pressure Unit</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcPressureUnit">
                                                                <option class="uSI" value="Pa">Pa</option>
                                                                <option class="uSI" value="mmwg">mmwg</option>
                                                                <option class="uSA" value="inwg">inwg</option>
                                                                <option class="uSA" value="lbin2">lb/in2</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Density Normal Unit</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcDensityNormalUnit">
                                                                <option class="uSI" value="kgnm3">Kg/Nm3</option>
                                                                <option class="uSI" value="kgm3">Kg/m3</option>
                                                                <option class="uSA" value="lbft3" style="display: none;">lb/ft3</option>
                                                                <option class="uSA" value="slbft3" style="display: none;">slb/ft3</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Fan Arrangment</strong></td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcFanArragment">
                                                                <option value="1">1 Amca</option>
                                                                <option value="4">4 Amca</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Ambient Pressure</strong></td>
                                                        <td>
                                                            <input type="text" class="form-control input-sm" id="txtAmbientPressure">
                                                        </td>
                                                        <td>
                                                        <select class="form-control input-sm" id="slcAmbientPressureUnit">
                                                                <option class="uSI" value="mmHg">mmHg</option>
                                                                <option class="uSI" value="mBar">mBar</option>
                                                                <option class="uSI" value="m">m</option>
                                                                <option class="uSA" value="inHg">inHg</option>
                                                                <option class="uSA" value="ft">ft</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Pressure Definition Inlet</strong></td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcPressureIn">
                                                                <option value="S">Static</option>
                                                                <option value="T">Total</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Pressure Definition Outlet</strong></td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcPressureOut">
                                                                <option value="S">Static</option>
                                                                <option value="T">Total</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Connections - Max Air Velocity</strong></td>
                                                        <td>
                                                            <input type="text" class="form-control input-sm" id="txtConnectionMax">
                                                        </td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcMaxAir">
                                                                <option class="uSI" value="ms">m/s</option>
                                                                <option class="uSA" value="fpm">fpm</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcMaxAirYn">
                                                                <option value="N">No</option>
                                                                <option value="Y">Yes</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Motors</strong></td>
                                                        <td>
                                                            <select class="form-control input-sm" id="slcMotor">
                                                                <option value="siemens">Siemens</option>
                                                                <option value="us">US</option>
                                                                <option value="abb">ABB</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Sound Pressure - Distance</strong></td>
                                                        <td>
                                                            <input type="text" class="form-control input-sm" id="txtSoundDistance">
                                                        </td>
                                                        <td>
                                                            <span class="uSI">m</span>
                                                            <span class="uSA">ft</span>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Sound Pressure - Max Sound</strong></td>
                                                        <td>
                                                            <input type="text" class="form-control input-sm" id="txtSoundMax">
                                                        </td>
                                                        <td>db(A)</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="form-group clickable-steps">
                                            <div class="col-md-8 col-md-offset-4">
                                                <a href="javascript:void(0)" data-gotostep="clickable-third" class="btn btn-sm btn-warning"><i class="gi gi-chevron-left"></i> Previous</a>
                                                <button class="btn btn-sm btn-primary" id="complete"><i class="gi gi-ok_2"></i> Complete</button>
                                            </div>
                                        </div>
                                        <!-- END Navigation Buttons -->
                                    </div>
                                    <!-- END Four Step -->
                                </form>
                                <!-- END Clickable Wizard Content -->
                            </div>
                            <!-- END Clickable Wizard Block -->
                        </div>
                    </div>

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
            /* Initialize Clickable Wizard */
            var clickableWizard = $('#clickable-wizard');

            clickableWizard.formwizard({disableUIStyles: true, inDuration: 0, outDuration: 0});

            $('.clickable-steps a').on('click', function(){
                var gotostep = $(this).data('gotostep');

                clickableWizard.formwizard('show', gotostep);
            });
        </script>
        <script src="js/controllers/selection.js"></script>
        <!-- END Script JS -->
    </body>
</html>