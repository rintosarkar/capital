

@extends('layouts.adminMaster')

@section('style')
    {{-- style for data table --}}
   <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
   <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
   <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />
@endsection

@section('body-content')
        <div class="row states-info">
        <div class="col-md-3">
            <div class="panel red-bg">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-xs-8">
                            <span class="state-title"> Members Joining Today </span>
                            <h4> 2,232</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel blue-bg">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="col-xs-8">
                            <span class="state-title">  Total Deposit Today  </span>
                            <h4>$ 2,980</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel green-bg">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <div class="col-xs-8">
                            <span class="state-title">  Total Withdrawal Request Today  </span>
                            <h4> $ 5980</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel yellow-bg">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-usd"></i>
                        </div>
                        <div class="col-xs-8">
                            <span class="state-title">  Previous Blance  </span>
                            <h4> $10,000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-8">
                <section class="panel">
                <header class="panel-heading">
                    Monthly Payment Today
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table">
                <table  class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6</td>
                    <td>Win 98+</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td class="center hidden-phone">7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td class="center hidden-phone">1.9</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.2</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.3</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.4</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.6</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td class="center hidden-phone">125.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td class="center hidden-phone">312.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">419.3</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">522.1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">420</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td class="center hidden-phone">420.1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td class="center hidden-phone">413</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td class="center hidden-phone">8.5</td>
                    <td class="center hidden-phone">C/A<sup>1</sup></td>
                </tr>
                <tr class="gradeC">
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td class="center hidden-phone">3.1</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td class="center hidden-phone">3.3</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td class="center hidden-phone">3.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeX">
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeU">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">U</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                </tr>
                </tfoot>
                </table>
                </div>
                </div>
                </section>
            </div>
            <div class="col-md-4">
                {{-- <div class="wdgt-profile">
                    <div class="profile">
                        <img src="images/gallery/wdgt-img.jpg" alt=""/>
                        <div class="profile-social">
                            <a href="#" ><i class="fa fa-pinterest"></i></a>
                            <a href="#" ><i class="fa fa-twitter"></i></a>
                            <a href="#" ><i class="fa fa-facebook"></i></a>
                        </div>
                        <ul class="profile-tab">
                            <li>
                                <a href="#">
                                    <i class="fa fa-camera"></i>
                                    Photo
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-music"></i>
                                    Music
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-comments"></i>
                                    Comments
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="profile-info">
                        <h5>Margarita Rose</h5>
                        <span>Creative Designer</span>
                    </div>
                </div> --}}
                <div class="panel green-box">
                    <div class="panel-body extra-pad">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="knob">
                                    <span class="chart" data-percent="79">
                                        <span class="percent">79% <span class="sm">Today's Profit</span></span>
                                    </span>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6 col-xs-6">
                                <div class="knob">
                                    <span class="chart" data-percent="56">
                                        <span class="percent">56% <span class="sm">Bounce rate</span></span>
                                    </span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <section class="panel">
                <header class="panel-heading">
                    Support Query List
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table">
                <table  class="display table table-bordered table-striped" id="supportQuery-table">
                <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6</td>
                    <td>Win 98+</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td class="center hidden-phone">7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td class="center hidden-phone">1.9</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.2</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.3</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.4</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.6</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td class="center hidden-phone">125.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td class="center hidden-phone">312.8</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">419.3</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">522.1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">420</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td class="center hidden-phone">420.1</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td class="center hidden-phone">413</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td class="center hidden-phone">8.5</td>
                    <td class="center hidden-phone">C/A<sup>1</sup></td>
                </tr>
                <tr class="gradeC">
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td class="center hidden-phone">3.1</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td class="center hidden-phone">3.3</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td class="center hidden-phone">3.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeX">
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">A</td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeU">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">U</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                </tr>
                </tfoot>
                </table>
                </div>
                </div>
                </section>
            </div> {{-- supportQuery table end --}}

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Add Notice
                                <span class="tools pull-right">
                                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="fa fa-times" href="javascript:;"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" name="subject" id="subjcet" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea placeholder="Type a message here..." class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" value="Submit" class="btn btn-primary pull-right">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body extra-pad">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="v-title">Visits</div>
                                    <div class="v-value">10,090</div>
                                    <div id="visit-1"></div>
                                    <div class="v-info">Pages/Visit</div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="v-title">Unique Visitors</div>
                                    <div class="v-value">8,173</div>
                                    <div id="visit-2"></div>
                                    <div class="v-info">Avg. Visit Duration</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="row">
                    <div class="col-md-12">
                        <ul class="iconic-list">
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-camera-retro"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar"></i>
                                </a>
                            </li>
                            <li>
                                <a class="last" href="#">
                                    <i class="fa fa-crosshairs"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}



            </div>

            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body">
                        <div class="dir-info">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="images/photos/user2.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h5>Wild Awake</h5>
                                    <span>
                                        <a href="#" class="small"> katy Perry</a>
                                    </span>
                                </div>
                                <div class="col-xs-3">
                                    <a class="dir-like" href="#">
                                        <span class="small">434</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="images/photos/user1.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h5>Bulet Proof</h5>
                                    <span>
                                        <a href="#" class="small"> Bruno Mars</a>
                                    </span>
                                </div>
                                <div class="col-xs-3">
                                    <a class="dir-like" href="#">
                                        <span class="small">441</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="images/photos/user3.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h5>Bit it</h5>
                                    <span>
                                        <a href="#" class="small"> Jackson</a>
                                    </span>
                                </div>
                                <div class="col-xs-3">
                                    <a class="dir-like" href="#">
                                        <span class="small">124</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="images/photos/user4.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h5>Its my life</h5>
                                    <span>
                                        <a href="#" class="small"> Bon jovi</a>
                                    </span>
                                </div>
                                <div class="col-xs-3">
                                    <a class="dir-like" href="#">
                                        <span class="small">334</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="images/photos/user1.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h5>Bulet Proof</h5>
                                    <span>
                                        <a href="#" class="small"> Bruno Mars</a>
                                    </span>
                                </div>
                                <div class="col-xs-3">
                                    <a class="dir-like" href="#">
                                        <span class="small">44</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <header class="panel-heading">
                        Chat
                    </header>
                    <div class="panel-body">
                        <ul class="chats cool-chat">
                            <li class="in">
                                <img src="images/photos/user1.png" alt="" class="avatar">
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a class="name" href="#">Jone Doe</a>
                                    <span class="datetime">at Mar 12, 2014 6:12</span>
                                    <span class="body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    </span>
                                </div>
                            </li>
                            <li class="out">
                                <img src="images/photos/user2.png" alt="" class="avatar">
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a class="name" href="#">Margarita Rose</a>
                                    <span class="datetime">at Mar 12, 2014 6:13</span>
                                    <span class="body">
                                        sed diam nonummy nibh euismod tincidunt ut
                                    </span>
                                </div>
                            </li>
                            <li class="in">
                                <img src="images/photos/user1.png" alt="" class="avatar">
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a class="name" href="#">Jone Doe</a>
                                    <span class="datetime">at Mar 12, 2014 6:12</span>
                                    <span class="body">
                                        aoreet dolore magna aliquam erat volutpat.
                                    </span>
                                </div>
                            </li>
                            <li class="out">
                                <img src="images/photos/user2.png" alt="" class="avatar">
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a class="name" href="#">Margarita Rose</a>
                                    <span class="datetime">at Mar 12, 2014 6:13</span>
                                    <span class="body">
                                        sed diam nonummy nibh euismod tincidunt ut
                                    </span>
                                </div>
                            </li>
                            <li class="in">
                                <img src="images/photos/user1.png" alt="" class="avatar">
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a class="name" href="#">Jone Doe</a>
                                    <span class="datetime">at Mar 12, 2014 6:12</span>
                                    <span class="body">
                                        aoreet dolore magna aliquam erat volutpat.
                                    </span>
                                </div>
                            </li>
                            <li class="out">
                                <img src="images/photos/user2.png" alt="" class="avatar">
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a class="name" href="#">Margarita Rose</a>
                                    <span class="datetime">at Mar 12, 2014 6:13</span>
                                    <span class="body">
                                        sed diam nonummy nibh
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-form ">
                            <form role="form" class="form-inline">
                                <div class="form-group">
                                    <input type="text" style="width: 100%" placeholder="Type a message here..." class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <section class="panel post-wrap pro-box">
                    <aside class="post-highlight purple v-align">
                        <div class="panel-body">
                            <h2>AdminEx in Excelent templates <a href="javascript:;"> </a> 1 days ago  by John Doe</h2>
                        </div>
                    </aside>
                    <aside>
                        <div class="post-info">
                            <span class="arrow-pro left"></span>
                            <div class="panel-body">
                                <div class="text-center twite">
                                    <i class="fa fa-twitter"></i>
                                    <h1>Twitter Feed</h1>
                                </div>
                            </div>
                        </div>
                    </aside>
                </section>
                <div class="panel">
                    <div class="panel-body">
                        <div class="media usr-info">
                            <a href="#" class="pull-left">
                                <img class="thumb" src="images/photos/user2.png" alt=""/>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Mila Watson</h4>
                                <span>Senior UI Designer</span>
                                <p>I use to design websites and applications for the web.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer custom-trq-footer">
                        <ul class="user-states">
                            <li>
                                <i class="fa fa-heart"></i> 127
                            </li>
                            <li>
                                <i class="fa fa-eye"></i> 853
                            </li>
                            <li>
                                <i class="fa fa-user"></i> 311
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel blue-box twt-info">
                    <div class="panel-body">
                        <h3>19 Februay 2014</h3>

                        <p>AdminEx is new model of admin
                            dashboard <a href="#">http://t.co/3laCVziTw4</a>
                            4 days ago by John Doe</p>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('script')
    <!--dynamic table-->
    {!! Html::script('js/advanced-datatable/js/jquery.dataTables.js') !!}
    {!! Html::script('js/data-tables/DT_bootstrap.js') !!}
    <!--dynamic table initialization -->
    {!! Html::script('js/dynamic_table_init.js') !!}
    
    {!! Html::script('js/main-chart.js') !!}

    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
    

    
@stop