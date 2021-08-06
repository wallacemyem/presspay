    <div class="preloader">
      <div class="preloader-logo"><img src="<?php echo base_url() ?>public/images/logo-dark.png" alt="" width="176" height="28" srcset="<?php echo base_url() ?>public/images/logo-dark.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="<?php echo base_url() ?>public/js/core.min.js"></script>
    <script src="<?php echo base_url() ?>public/js/script.js"></script>
    <script>
        var app = angular.module('app', ['toastr']);
        app.controller('formCtrl', function($scope,$http,toastr) {
            var url = window.location.href;
            var urlArr = url.split('localhost');
            if(urlArr.length>1){
                $scope.base_url = 'http://localhost/presspay/';
            }
            else{
                $scope.base_url = 'https://presspay.ng/';
            }
            $scope.form = {};
            //$scope.form.name = "John";
            $scope.submitForm = function(){
                if($scope.isLoading)
                return;
                if($scope.form.fname && $scope.form.lname && $scope.form.email && $scope.form.phone && $scope.form.msg){
                    $scope.isLoading = true;
                    //send message
                    $http.post($scope.base_url+'ap/major/contact',JSON.stringify($scope.form))
                    .then(function(response) {
                        $scope.isLoading = false;
                        if(response.data && response.data.status){
                            $scope.response = response.data;
                            toastr.success(response.data.message);
                            $scope.form = {};
                        }
                        else if(response.data && !response.data.status){
                            toastr.warning(response.data.message);
                        }
                        else{
                            toastr.warning('An error occured while connecting to server');
                        }
                    },function(error){
                        $scope.isLoading = false;
                        toastr.warning('An error occured while connecting to server');
                    });
                }
            }
        });
        app.controller('refCtrl', function($scope,$http,toastr) {
            var url = window.location.href;
            var urlArr = url.split('localhost');
            if(urlArr.length>1){
                $scope.base_url = 'http://localhost/presspay/';
            }
            else{
                $scope.base_url = 'https://presspay.ng/';
            }
            $scope.ref = {};
            //$scope.form.name = "John";
            $scope.submitReferal = function(){
                if($scope.isLoadingRef)
                return;
                if($scope.ref.rname && $scope.ref.remail && $scope.ref.fname && $scope.ref.femail){
                    $scope.isLoadingRef = true;
                    //send message
                    $http.post($scope.base_url+'ap/major/refer',JSON.stringify($scope.ref))
                    .then(function(response) {
                        $scope.isLoadingRef = false;
                        if(response.data && response.data.status){
                            $scope.response = response.data;
                            toastr.success(response.data.message);
                            $scope.ref = {};
                        }
                        else if(response.data && !response.data.status){
                            toastr.warning(response.data.message);
                        }
                        else{
                            toastr.warning('An error occured while connecting to server');
                        }
                    },function(error){
                        $scope.isLoadingRef = false;
                        toastr.warning('An error occured while connecting to server');
                    });
                }
            }
        });
        app.controller('subCtrl', function($scope,$http,toastr) {
            var url = window.location.href;
            var urlArr = url.split('localhost');
            if(urlArr.length>1){
                $scope.base_url = 'http://localhost/presspay/';
            }
            else{
                $scope.base_url = 'https://presspay.ng/';
            }
            $scope.sub = {};
            //$scope.form.name = "John";
            $scope.submitSub = function(){
                if($scope.isLoadingSub)
                return;
                if($scope.sub.email){
                    $scope.isLoadingSub = true;
                    //send message
                    $http.post($scope.base_url+'ap/major/subscribe',JSON.stringify($scope.ref))
                    .then(function(response) {
                        $scope.isLoadingSub = false;
                        if(response.data && response.data.status){
                            $scope.response = response.data;
                            toastr.success(response.data.message);
                            $scope.ref = {};
                        }
                        else if(response.data && !response.data.status){
                            toastr.warning(response.data.message);
                        }
                        else{
                            toastr.warning('An error occured while connecting to server');
                        }
                    },function(error){
                        $scope.isLoadingSub = false;
                        toastr.warning('An error occured while connecting to server');
                    });
                }
            }
        });
    </script>
    <script>
        $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {
            console.log(window.location.href.includes('faq'))
            if(window.location.href.includes('faq'))
            return;

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        });
    </script>
<!--<script src="<?= base_url() ?>public/menu/jquery.min.js"></script>-->
<script type="text/javascript" src="<?= base_url() ?>public/menu/menumaker.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60e94c28649e0a0a5ccb7cb2/1fa7l2vuv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->