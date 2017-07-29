@include('frontend.header')
@include('frontend.sub_header')




@yield('content')







@include('frontend.footer')


@yield('script_link')


@yield('javascript_code')







<!-- /.content-wrapper -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".divisions").change(function () {
            var classid = $(this).val();
            // alert(classid);
            $("#districts").html('');
            $.ajax({
                url: "{{ url('admin/donor/get_district') }}" + '/' + classid,
                type: "GET",
                dataType: "html",
                success: function (data) {
                    //    alert(data);
                    $("#districts").append(data);
                }
            });
        });
    });


    $(document).ready(function () {
        $(".districts").change(function () {
            var classid = $(this).val();
            // alert(classid);
            $("#upazillas").html('');
            $.ajax({
                url: "{{ url('admin/donor/get_upazilla') }}" + '/' + classid,
                type: "GET",
                dataType: "html",
                success: function (data) {
                    // alert(data);
                    $("#upazillas").append(data);
                }
            });
        });
    });

       $(document).ready(function () {
        $(".is_active").click(function () {
              $(this).addClass("active");
        });
    });

   </script>
   
</body>
</html>