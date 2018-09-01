<div class="page-footer">
                    <p class="no-s" style="text-align:center"><span>&copy;trado</span><i class="fa fa-bitcoin"></i></p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>DEMOS</h3>
            </header>
            <div class="col-md-6 demo-block demo-selected demo-active">
                <p>Dark<br>Design</p>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin2/index.html"><p>Light<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin3/index.html"><p>Material<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Horizontal<br>(Coming)</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
        </nav>
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/pace-master/pace.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/uniform/js/jquery.uniform.standalone.js') }}"></script>
        <script src="{{ URL::asset('plugins/offcanvasmenueffects/js/classie.js') }}"></script>
        <script src="{{ URL::asset('plugins/waves/waves.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/3d-bold-navigation/js/main.js') }}"></script>
        <script src="{{ URL::asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/curvedlines/curvedLines.js') }}"></script>
        <script src="{{ URL::asset('plugins/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('js/meteor.min.js') }}"></script>
        <script src="{{ URL::asset('js/pages/dashboard.js') }}"></script>
 	 

       <script src="{{ URL::asset('plugins/summernote-master/summernote.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
        <script src="{{ URL::asset('js/pages/form-elements.js') }}"></script>
	<script src="{{ URL::asset('js/pages/charts-flot.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/flot/jquery.flot.pie.min.js') }}"></script>


	
        <script>
            (function(b,i,t,C,O,I,N) {
              window.addEventListener('load',function() {
                if(b.getElementById(C))return;
                I=b.createElement(i),N=b.getElementsByTagName(i)[0];
                I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
              },false)
            })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
	    
	    if (typeof (eWgs) === 'undefined') {
        document.write('<scr' + 'ipt src="https://api.ethplorer.io/widget.js?' + new Date().getTime().toString().substr(0, 7) + '" async></scr' + 'ipt>');
        var eWgs = [];
    }
    eWgs.push(function () {
        ethplorerWidget.init(
            '#token-txs-11', // Placeholder element
            'tokenHistory', // Widget type
            {
                address: '0xe94327d07fc17907b4db788e5adf2ed424addff6', // keep empty to show all tokens
                limit: 5, // Number of records to show
            },
            {
                header: '<div class="txs-header">WETH Recent Transactions</div>', // customized header
                loader: '<div class="txs-loading">* L * O * A * D * I * N * G *<br><small>Please wait...</small></div>', // customized loader
                bigScreenTable: '<tr><td>%from% <span class="tx-send">sent</span> <span class="tx-amount">%amount% %token%</span> <span class="tx-send">to</span> %to% <span class="tx-send">at</span><span class="tx-date"> %datetime%</span></td></tr>'

            }

        );
    });


	    
          </script>
    </body>
</html>
