            <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2020 IT SOLUTIONS BD Dashboard </div>
                        <div class="credit">Designed by: <a href="#">IT SOLUTIONS BD</a></div>
                    </div>
                </footer><!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script data-cfasync="false" src="{{asset('/backend/it-solutionsbd/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/popper.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <!-- Third Party Scripts(used by this page)-->
 <!-- Third Party Scripts(used by this page)-->
  
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/chartJs/Chart.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/sparkline/sparkline.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/datatables/dataTables.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
       
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/pages/dashboard.js')}}"></script>
       
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/datatables/dataTables.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/datatables/data-basic.active.js')}}"></script>
        <!--Page Scripts(used by all page)-->
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/sidebar.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        {{-- <script src="{{asset('/backend/it-solutionsbd/assets/plugins/toastr/toastr.min.js')}}"></script> --}}
         <script src="{{asset('/backend/it-solutionsbd/assets/plugins/summernote/summernote.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/summernote/summernote.active.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/summernote/summernote.active.js')}}">
          
        </script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/modals/classie.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/modals/modalEffects.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/dropzone/dist/min/dropzone.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/dropzone/dropzone.active.js')}}"></script>

         <script src="{{asset('/backend/it-solutionsbd/assets/plugins/bootstrap-wizard/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/bootstrap-wizard/form.scripts.js')}}"></script>
        <!-- Third Party Scripts(used by this page)-->
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/select2/dist/js/select2.min.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/plugins/jquery.sumoselect/jquery.sumoselect.min.js')}}"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/pages/demo.select2.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/pages/demo.jquery.sumoselect.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/pages/newsletter.active.js')}}"></script>
        <script src="{{asset('/backend/it-solutionsbd/assets/dist/js/pages/invoice.active.js')}}"></script>
        @yield('script')
         <script>  
       
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Your Data Safe!");
                  }
                });
            });
    </script>
    
  {{-- <script src="http://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script> --}}
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
  @if(Session::has('messege'))
  var type="{{Session::get('alert-type','info')}}"
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('messege') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('messege') }}");
    break;
    case 'warning':
    toastr.warning("{{ Session::get('messege') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('messege') }}");
    break;
  }
  @endif    

  
  
</script> 
